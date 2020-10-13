<?php

namespace App\Http\Controllers\Payment;

use App\Payments\UnionPayGateway;
use App\Enums\{CacheKeyPrefix,
    LoggerCollection,
    Payment\AlipayCode,
    Payment\AlipayBankGatewayCode,
    Payment\PaymentType,
    Payment\UnionPayCode,
    Payment\UnionPayGatewayBankCode,
    Payment\UnionPayGatewayResultCode
};
use App\Handlers\ResponseData;
use App\Models\Payment;
use App\Payments\AlipayBankGateway;
use App\Payments\AlipayLegacyExpress;
use App\Http\ {
    Controllers\Controller, Requests\Api\PaymentRequest
};
use App\Services\Api\OrderService;
use Exception;
use Illuminate\{Contracts\Foundation\Application,
    Contracts\Routing\ResponseFactory,
    Http\RedirectResponse,
    Http\Request,
    Http\Response,
    Support\Arr,
    Support\Facades\App,
    Support\Facades\Cache,
    Support\Facades\Crypt,
    Support\Facades\Log
};

/**
 * @group [Payment] Payment
 * 支付管理
 * @package App\Http\Controllers\Payment
 */
class PaymentController extends Controller
{

    private $orderService;
    private $payment;

    public function __construct(OrderService $orderService, Payment $payment)
    {
        $this->orderService = $orderService;
        $this->payment = $payment;
        config(['logging.channels.mongodb.collection' => LoggerCollection::PayLog]);
    }

    /**
     * Unionpay request payment
     * 银联支付-发起支付
     * @queryParam no required 订单号
     * @queryParam total_amount required 总金额
     * @queryParam payment_key required 支付key
     * @param PaymentRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function payByUnionpay(PaymentRequest $request)
    {
        $requestData = $request->all();

        $gateway = \Omnipay::gateway('unionpay');
        // 配置文件未生效，此处手动读取通知URL
        //$gateway->setNotifyUrl(config('laravel-omnipay.gateways.unionpay.options.notifyUrl'));
        $order = [
            'orderId' => $requestData['no'],  // 商户生成订单号
            'txnTime' => date('YmdHis'),  // 商户发起交易时间,格式YmdHis
            'orderDesc' => $requestData['product_name'], // 商户订单名称
            'txnAmt' => $requestData['total_amount'], // 订单价格,单位为分
        ];
        try {
            $response = $gateway->purchase($order)->send();
            //$response->redirect(); // 跳转支付
            return response(ResponseData::requestSuccess(['pay_url' => $response->getRedirectUrl()]));
        } catch (\Exception $e) {
            Log::error('银联支付-发起失败', ['message' => [
                'msg' => $e->getMessage(),
                'order_no' => $requestData['no']
            ]]);
            return response(ResponseData::requestFails($order, '支付发起失败'));
        }
    }

    /**
     * Unionpay return payment results
     * 银联支付-前端回调
     * @param Request $request
     * @return array|RedirectResponse
     */
    public function unionpayReturn(Request $request)
    {
        $requestData = $request->all();
        $gateway = \Omnipay::gateway('unionpay');
        $response = $gateway->completePurchase(['request_params' => $_REQUEST])->send();
        try {
            if ($response->isPaid()) {
                // 跳转到订单界面
                return redirect()->route('my-account');
            }
        } catch (\Exception $e) {
            Log::error('银联支付-前端回调失败', ['message' => [
                'msg' => $e->getMessage(),
                'order_no' => $requestData['no']
            ]]);
            return ResponseData::requestFails($requestData, '前端回调失败');
        }
    }

    /**
     * Unionpay notify payment results
     * 银联支付-异步通知
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function unionpayNotify(Request $request)
    {
        $requestData = $request->all();
        $requestData['order_no'] = $requestData['orderId'];
        try {
            // 支付成功
            if ($request['respCode'] == UnionPayCode::Success) {
                // 调用服务层更新该订单状态数据
                // 调整订单号名称
                $requestData['order_no'] = $requestData['order_id'];
                $this->orderService->changeStatus($requestData);
                Log::info('银联支付-支付成功', ['message' => [
                    'order_no' => $requestData['order_no'],
                    'msg' => $requestData,
                    'pay_time' => $requestData['extra']['pay_time']
                ]]);
            }
        } catch (\Exception $e) {
            Log::error('银联支付-异步通知失败', ['message' => [
                'msg' => $e->getMessage(),
                'order_no' => $requestData['order_no']
            ]]);
            return response(ResponseData::requestFails($requestData, '异步通知失败'));
        }
    }

    /**
     * Alipay web request payment
     * 支付宝网页支付-发起支付
     * @queryParam no required 订单号
     * @queryParam total_amount required 总金额
     * @queryParam payment_key required 支付key
     * @param PaymentRequest $request
     * @return mixed
     */
    public function payByAlipayAopPage(PaymentRequest $request)
    {
        $requestData = $request->all();
        $requestData['subject'] = 'Queen-Spades' . $requestData['no'];
        $requestData['out_trade_no'] = $requestData['no'];
        $requestData['product_code'] = 'FAST_INSTANT_TRADE_PAY';
        unset($requestData['no']);
//        // 调用支付宝的网页支付
//        return app('alipay')->web([
//            'out_trade_no' => $requestData['no'], // 订单编号，需保证在商户端不重复
//            'total_amount' => $requestData['total_amount'], // 订单金额，单位元，支持小数点后两位
//            'subject' => $requestData['product_name'] ?? 'Queen-Spades ' . $requestData['no'], // 订单标题
//        ]);
        try {
            $gateway = \Omnipay::gateway('Alipay_AopPage');
            if (App::environment(['local', 'staging', 'debug'])) {
                $gateway->setEnvironment('sandbox');  // 正式环境需要设置为production
            }
            //$gateway->setEnvironment('production');
            $response = $gateway->purchase()->setBizContent($requestData)->send();

            return response(ResponseData::requestSuccess(['pay_url' => $response->getRedirectUrl()]));
        } catch (\Exception $e) {
            Log::error('支付宝WEB-支付发起失败', ['message' => [
                'msg' => $e->getMessage(),
                'order_no' => $requestData['out_trade_no']
            ]]);
            return response(ResponseData::requestFails($requestData, '支付发起失败'));
        }
    }

    /**
     * Alipay web return payment results
     * 支付宝网页支付-前端回调
     * @param Request $request
     * @return Application|ResponseFactory|RedirectResponse|Response
     */
    public function alipayAopPageReturn(Request $request)
    {
        $requestData = $request->all();
        // 校验提交的参数是否合法
        try {
            app('alipay')->verify();
        } catch (Exception $e) {
            Log::error('支付宝WEB-前端回调失败', ['message' => [
                'msg' => $e->getMessage(),
                'order_no' => $requestData['out_trade_no']
            ]]);
            return response(ResponseData::requestFails($requestData, '前端回调失败'));
        }
        return redirect()->route('my-account');  // 跳转到订单界面
    }

    /**
     * Alipay web notify payment results
     * 支付宝网页支付-服务器端回调
     * @param Request $request
     * @return mixed
     */
    public function alipayAopPageNotify(Request $request)
    {
        $requestData = $request->all();
        // 校验输入参数
        $data = app('alipay')->verify();
        // 如果订单状态是成功或者结束
        if (in_array($data->trade_status, [AlipayCode::TRADE_SUCCESS, AlipayCode::TRADE_FINISHED])) {
            $requestData = [
                'order_no' => $data->out_trade_no,
                'status' => AlipayCode::TRADE_SUCCESS,
                'payment_no' => $data->trade_no
            ];
            // 调用服务层更新该订单状态数据
            $this->orderService->changeStatus($requestData);

            Log::info('支付宝WEB-支付成功', ['message' => [
                'order_no' => $requestData['out_trade_no'],
                'msg' => $requestData
            ]]);
            return app('alipay')->success();  //  返回数据给支付宝
        }
        return response(ResponseData::requestFails($requestData, '异步通知失败'));
    }

    /**
     * Alipay bank gateway pay request
     * 支付宝网银网关-发起支付
     * @queryParam no required 订单号
     * @queryParam total_amount required 总金额
     * @queryParam payment_key required 支付key
     * @param PaymentRequest $request
     * @return string
     */
    public function payByAlipayBankGateway(PaymentRequest $request)
    {
        $requestData = $request->all();
        if (!Cache::has(CacheKeyPrefix::AlipayBankGateway)) {
            return response(ResponseData::dataError('', '配置读取失败，请稍后重试'));
        }
        try {
            $cacheData = Cache::get(CacheKeyPrefix::AlipayBankGateway);
            // 参数
            $params['merch_id'] = $cacheData->merch_id;
            $params['product'] = $cacheData->product;
            $params['order_id'] = $requestData['no'];
            $params['amount'] = $requestData['total_amount'];
            $params['notify_url'] = $cacheData->notify_url;
            $params['return_url'] = $cacheData->return_url;
            $params['extends'] = config('pay.alipay_gateway.extends');
            $params['key'] = Crypt::decrypt($cacheData->key);
            // 签名
            $params['sign'] = AlipayBankGateway::sign($params);
            // 签名完成，移除key
            unset($params['key']);
            $result = AlipayBankGateway::post('https://pays.pdshjsm.cn/pay/index.php/trade/pay', $params);
            if ($result['code'] != AlipayBankGatewayCode::RequestSuccess) {
                //exit('受理失败');
                return response(ResponseData::requestFails($result));
            }
            if (AlipayBankGateway::verify(config('pay.alipay_gateway.key'), $result)) {
                //return redirect($result['pay_url']);
                return response(ResponseData::requestSuccess(['pay_url' => $result['pay_url']]));
            }
        } catch (\Exception $e) {
            Log::error('支付宝网关-支付发起失败', ['message' => [
                'msg' => $e->getMessage(),
                'order_no' => $requestData['no']
            ]]);
            return response(ResponseData::requestFails($params, '支付发起失败'));
        }

    }

    /**
     * Alipay bank gateway return
     * 支付宝网银网关-同步跳转(前端)
     * @param Request $request
     * @return string
     */
    public function alipayBankGatewayReturn(Request $request)
    {
        $requestData = $request->all();
        if ($requestData['code'] != AlipayBankGatewayCode::RequestSuccess) {
            return response(ResponseData::paramError('', '受理失败'));
        }
        if (!Cache::has(CacheKeyPrefix::AlipayBankGateway)) {
            return response(ResponseData::dataError('', '配置读取失败，请稍后重试'));
        }
        try {
            $cacheData = Cache::get(CacheKeyPrefix::AlipayBankGateway);
            AlipayBankGateway::verify(Crypt::decrypt($cacheData->key), $requestData);

            return redirect()->route('my-account'); // 返回订单界面
        } catch (\Exception $e) {
            Log::error('支付宝网关-前端回调失败', ['message' => [
                'msg' => $e->getMessage(),
                'order_no' => $requestData['order_id']
            ]]);
            return response(ResponseData::requestFails($requestData, '前端回调失败'));
        }
    }

    /**
     * Alipay bank gateway notify
     * 支付宝网银网关-异步通知(服务端)
     * @param Request $request
     * @return string
     */
    public function alipayBankGatewayNotify(Request $request)
    {
        $requestData = $request->all();
        if ($requestData['code'] != AlipayBankGatewayCode::RequestSuccess) {
            return response(ResponseData::paramError('', '受理失败'));
        }
        if (!Cache::has(CacheKeyPrefix::AlipayBankGateway)) {
            return response(ResponseData::dataError('', '配置读取失败，请稍后重试'));
        }
        $cacheData = Cache::get(CacheKeyPrefix::AlipayBankGateway);

        try {
            AlipayBankGateway::verify(Crypt::decrypt($cacheData->key), $requestData);
            // 调整订单号名称
            $requestData['order_no'] = $requestData['order_id'];
            $this->orderService->changeStatus($requestData);
            Log::info('支付宝网关-支付成功', ['message' => [
                'order_no' => $requestData['order_no'],
                'msg' => $requestData,
            ]]);
        } catch (\Exception $e) {
            Log::error('支付宝网关-异步通知失败', ['message' => [
                'msg' => $e->getMessage(),
                'order_no' => $requestData['order_no']
            ]]);
            return response(ResponseData::requestFails($requestData, '异步通知失败'));
        }
        return 'success'; // 支付宝支付成功后必须返回对值
    }

    /**
     * Alipay legacy express pay request
     * 支付宝即时到账-发起支付
     * @queryParam no required 订单号
     * @queryParam total_amount required 总金额
     * @queryParam payment_key required 支付key
     * @param PaymentRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function payByAlipayLegacyExpress(PaymentRequest $request)
    {
        $requestData = $request->all();
        //*************************保留代码，防止Ominipay出问题时调用原生方法******
        // 配置参数
        // $config = config('pay.alipay_legacy_express');
        // 构造要请求的参数数组
        $parameter = [
            "out_trade_no" => $requestData['no'],
            "subject" => $requestData['subject'] ?? 'Queen-Spades' . $requestData['no'],
            "total_fee" => $requestData['total_amount']
        ];
        // $array = Arr::collapse([$parameter, $config]);
        // 建立请求
        // $alipaySubmit = (new AlipayLegacyExpress($config))->buildRequestForm($array, 'get', '确认');
        // Log::info('支付宝即时到账-支付发起', ['message' => $parameter]);
        // return $alipaySubmit;
        //***********************************************************************
        if (!Cache::has(CacheKeyPrefix::AlipayLegacyExpress)) {
            return response(ResponseData::dataError('', '配置读取失败，请稍后重试'));
        }
        $cacheData = Cache::get(CacheKeyPrefix::AlipayLegacyExpress);

        try {
            // 设置配置文件
            config([
                'laravel-omnipay.gateways.Alipay_LegacyExpress.options.partner' => $cacheData->pid,
                'laravel-omnipay.gateways.Alipay_LegacyExpress.options.key' => Crypt::decrypt($cacheData->key),
                'laravel-omnipay.gateways.Alipay_LegacyExpress.options.sellerEmail' => $cacheData->seller_email,
                'laravel-omnipay.gateways.Alipay_LegacyExpress.options.returnUrl' => $cacheData->return_url,
                'laravel-omnipay.gateways.Alipay_LegacyExpress.options.notifyUrl' => $cacheData->notify_url
            ]);
            $gateway = \Omnipay::gateway('Alipay_LegacyExpress'); // 发起支付调用Ominipay的网关
            $response = $gateway->purchase($parameter)->send();

            return response(ResponseData::requestSuccess(['pay_url' => $response->getRedirectUrl()]));
        } catch (\Exception $e) {
            Log::error('支付宝即时到账-支付发起失败', ['message' => [
                'msg' => $e->getMessage(),
                'order_no' => $requestData['no']
            ]]);
            return response(ResponseData::requestFails($parameter, '支付发起失败'));
        }
    }

    /**
     * Alipay legacy express pay return
     * 支付宝即时到账-前端回调
     * 说明:由于Ominipay验签有问题，此处使用我封装过的支付宝的sdk进行验签
     * @param Request $request
     * @return bool|RedirectResponse|string
     */
    public function alipayLegacyExpressReturn(Request $request)
    {
        $requestData = $request->all();
        if (!Cache::has(CacheKeyPrefix::AlipayLegacyExpress)) {
            return response(ResponseData::dataError('', '配置读取失败，请稍后重试'));
        }
        $cacheData = Cache::get(CacheKeyPrefix::AlipayLegacyExpress);

        // 设置配置文件
        config([
            'pay.alipay_legacy_express.partner' => $cacheData->pid,
            'pay.alipay_legacy_express.key' => Crypt::decrypt($cacheData->key),
            'pay.alipay_legacy_express.sellerEmail' => $cacheData->seller_email,
            'pay.alipay_legacy_express.returnUrl' => $cacheData->return_url,
            'pay.alipay_legacy_express.notifyUrl' => $cacheData->notify_url
        ]);
        // 配置参数
        $config = config('pay.alipay_legacy_express');
        $alipayNotify = new AlipayLegacyExpress\AlipayNotify($config);
        $verifyResult = $alipayNotify->verifyReturn();
        // 验签
        if (!$verifyResult) {
            return response(ResponseData::paramError($requestData, '验签失败'));
        }
        try {
            if ($requestData['trade_status'] == AlipayCode::TRADE_SUCCESS || $requestData['trade_status'] == AlipayCode::TRADE_FINISHED) {
                return redirect()->route('my-account');
                //return '付款成功';
            } else {
                return redirect()->route('my-account');
                //return '付款失败';
            }
        } catch (\Exception $e) {
            Log::error('支付宝即时到账-前端回调失败', ['message' => [
                'msg' => $e->getMessage(),
                'order_no' => $requestData['out_trade_no']
            ]]);
            return response(ResponseData::requestFails($requestData, '前端回调失败'));
        }

    }

    /**
     * Alipay legacy express pay notify
     * 支付宝即时到账-服务端异步通知
     * @param Request $request
     * @return bool|string
     */
    public function alipayLegacyExpressNotify(Request $request)
    {
        $requestData = $request->all();
        if (!Cache::has(CacheKeyPrefix::AlipayLegacyExpress)) {
            return response(ResponseData::dataError('', '配置读取失败，请稍后重试'));
        }
        $cacheData = Cache::get(CacheKeyPrefix::AlipayLegacyExpress);

        // 设置配置文件
        config([
            'pay.alipay_legacy_express.partner' => $cacheData->pid,
            'pay.alipay_legacy_express.key' => Crypt::decrypt($cacheData->key),
            'pay.alipay_legacy_express.sellerEmail' => $cacheData->seller_email,
            'pay.alipay_legacy_express.returnUrl' => $cacheData->return_url,
            'pay.alipay_legacy_express.notifyUrl' => $cacheData->notify_url
        ]);
        // 配置参数
        $config = config('pay.alipay_legacy_express');
        $alipayNotify = new AlipayLegacyExpress\AlipayNotify($config);
        $verifyResult = $alipayNotify->verifyNotify();
        // 验签
        if (!$verifyResult) {
            return response(ResponseData::paramError($requestData, '验签失败'));
        }
        try {
            if ($requestData['trade_status'] == AlipayCode::TRADE_SUCCESS || $requestData['trade_status'] == AlipayCode::TRADE_FINISHED) {
                $requestData['status'] = AlipayCode::TRADE_SUCCESS;
                $requestData['order_no'] = $requestData['out_trade_no'];
                $this->orderService->changeStatus($requestData);

                Log::info('支付宝即时到账-支付成功', ['message' => [
                    'order_no' => $requestData['order_no'],
                    'msg' => $requestData,
                ]]);

                return 'success'; // 固定返回success
            } else {
                $requestData['status'] = AlipayCode::TRADE_CLOSED;
                $this->orderService->changeStatus($requestData);
                Log::info('支付宝即时到账-支付失败', ['message' => [
                    'msg' => '支付失败',
                    'order_no' => $requestData['out_trade_no']
                ]]);
            }
        } catch (\Exception $e) {
            Log::error('支付宝即时到账-异步通知失败', ['message' => [
                'msg' => $e->getMessage(),
                'order_no' => $requestData['out_trade_no']
            ]]);
            return response(ResponseData::requestFails($requestData, '异步通知失败'));
        }
    }

    /**
     * Unionpay bank gateway request
     * 银联网关支付-发起支付
     * @queryParam no required 订单号
     * @queryParam total_amount required 总金额
     * @queryParam payment_key required 支付key
     * @queryParam bank_code required 银行代码
     * @param PaymentRequest $request
     * @return Application|ResponseFactory|Response|\Psr\Http\Message\StreamInterface|string
     */
    public function payByUnionPayGateway(PaymentRequest $request)
    {
        $requestData = $request->all();
        if (!Cache::get(CacheKeyPrefix::UnionpayGateway)) {
            return response(ResponseData::dataError('', '配置读取失败，请稍后重试'));
        }
        $cacheData = Cache::get(CacheKeyPrefix::UnionpayGateway);
        try {
            $params['cpid'] = $cacheData->cpid;
            $params['cp_trade_no'] = $requestData['no'];
            $params['fee'] = $requestData['total_amount'] * 100;  // 传递的是以元为单位，需乘以100
            $params['jump_url'] = $cacheData->jump_url;
            $params['notify_url'] = $cacheData->notify_url;
            $params['pay_type'] = $cacheData->pay_type;
            $params['sign'] = UnionPayGateway::sign($params, config('pay.unionpay_gateway.key'));
            $params['bank_code'] = $requestData['bank_code'];
            return UnionPayGateway::get('http://api.wyaiya.com/pay/ap.php', $params);
        } catch (\Exception $e) {
            Log::info('银联网银网关-支付发起', ['message' => [
                'msg' => '银联网银网关-支付发起',
                'order_no' => $params['cp_trade_no']
            ]]);
            return response(ResponseData::requestFails($requestData, '银联网银网关-支付发起失败'));
        }

    }

    /**
     * Get union pay gateway bank code list
     * 获取银联网关支付-银行代码列表
     * @return array
     */
    public function unionPayGatewayBankCodeList()
    {
        return ResponseData::requestSuccess(UnionPayGatewayBankCode::toArray());
    }

    /**
     * Unionpay gateway return
     * 银联网关支付-前端回调
     * @param Request $request
     */
    public function unionPayGatewayReturn(Request $request)
    {
//        Log::info($request->all());
    }

    /**
     * Unionpay gateway notify
     * 银联网关支付-异步回调
     * @param PaymentRequest $request
     * @return Application|ResponseFactory|Response|string
     */
    public function unionPayGatewayNotify(PaymentRequest $request)
    {
        $requestData = $request->all();
        if (!Cache::get(CacheKeyPrefix::UnionpayGateway)) {
            return response(ResponseData::dataError('', '配置读取失败，请稍后重试'));
        }
        $cacheData = Cache::get(CacheKeyPrefix::UnionpayGateway);
        try {
            $params['cpid'] = $requestData['cpid'];
            $params['cp_trade_no'] = $requestData['cp_trade_no'];
            $params['fee'] = $requestData['fee'] / 100;  // 返回的是分为单位，需除以100
            $params['jump_url'] = $cacheData->jump_url;
            $params['notify_url'] = $cacheData->notify_url;
            $params['pay_type'] = $cacheData->pay_type;
            //$params['bank_code'] = $requestData['bank_code'];
            $params['sign'] = $requestData['sign'];

            if (!UnionPayGateway::verify($params, config('pay.unionpay_gateway.key'))) {
                return response(ResponseData::paramError($requestData, '验签失败'));
            }
            if ($requestData['result_code'] == 0) {
                $requestData['status'] = UnionPayGatewayResultCode::Success;
                $this->orderService->changeStatus($requestData);

                Log::info('银联网关-支付成功', ['message' => [
                    'order_no' => $requestData['cp_trade_no'],
                    'msg' => $requestData,
                ]]);
                // 固定返回
                return 'success';
            }
        } catch (\Exception $e) {
            Log::error('银联网关-异步通知失败', ['message' => [
                'msg' => $e->getMessage(),
                'order_no' => $requestData['cp_trade_no']
            ]]);
            return response(ResponseData::requestFails($requestData, '异步通知失败'));
        }
    }
}
