<?php

namespace App\Http\Controllers\Api;

use App\Enums\{AlipayCode, AlipayGatewayCode, LoggerCollection, UnionPayCode};
use App\Handlers\ResponseData;
use App\Payments\AlipayGateway;
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
    Routing\Redirector,
    Support\Facades\Log
};
use Omnipay;

/**
 * @group [API] Payment
 * 支付管理
 * @package App\Http\Controllers\Api
 */
class PaymentController extends Controller
{
    private $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
        config(['logging.channels.mongodb.collection' => LoggerCollection::PayLog]);
    }

    /**
     * Unionpay request payment
     * 银联支付发起请求
     * @queryParam no required 订单号
     * @queryParam total_amount required 总金额
     * @param PaymentRequest $request
     */
    public function payByUnionpay(PaymentRequest $request)
    {
        $gateway = Omnipay::gateway('unionpay');
        // 配置文件未生效，此处手动读取通知URL
        $gateway->setNotifyUrl(config('laravel-omnipay.gateways.unionpay.options.notifyUrl'));

        $requestData = $request->all();
        $order = [
            'orderId' => $requestData['no'],  // 商户生成订单号
            'txnTime' => date('YmdHis'),  // 商户发起交易时间,格式YmdHis
            'orderDesc' => $requestData['product_name'], // 商户订单名称
            'txnAmt' => $requestData['total_amount'], // 订单价格,单位为分
        ];

        $response = $gateway->purchase($order)->send();
        $response->redirect();
    }

    /**
     * Unionpay return payment results
     * 银联支付返回结果
     * @param Request $request
     * @return array|RedirectResponse
     */
    public function unionpayReturn(Request $request)
    {
        $gateway = Omnipay::gateway('unionpay');
        $response = $gateway->completePurchase(['request_params' => $_REQUEST])->send();
        if ($response->isPaid()) {
            // 重定向到结算页面并返回参数-参数将交由前端获取,该route name为临时测试用
            return redirect()->route('unionpay.test', $request->all());
        } else {
            Log::error($response);
            return ResponseData::requestFails($request->all(), '支付失败');
        }
    }

    /**
     * Unionpay notify payment results
     * 通知银联支付结果
     * @param Request $request
     * @return bool
     */
    public function unionpayNotify(Request $request)
    {
        // 支付成功
        if ($request['respCode'] == UnionPayCode::Success) {
            // 调用服务层更新该订单状态数据
            return $this->orderService->changeStatus($request);
        }
    }

    /**
     * Alipay request payment
     * 支付宝发起支付
     * @queryParam no required 订单号
     * @queryParam total_amount required 总金额
     * @param PaymentRequest $request
     * @return mixed
     */
    public function payByAlipay(PaymentRequest $request)
    {
        $requestData = $request->all();
        // 调用支付宝的网页支付
        return app('alipay')->web([
            'out_trade_no' => $requestData['no'], // 订单编号，需保证在商户端不重复
            'total_amount' => $requestData['total_amount'], // 订单金额，单位元，支持小数点后两位
            'subject' => $requestData['product_name'] ?? 'Queen Spades# '.$requestData['no'], // 订单标题
        ]);
    }

    /**
     * Alipay return payment results
     * 支付宝前端回调页面
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function alipayReturn(Request $request)
    {
        // 校验提交的参数是否合法
        try {
            app('alipay')->verify();
        } catch (Exception $e) {
            Log::error('支付宝支付失败',['message' => $e->getMessage()]);
            return response(ResponseData::requestFails($request->all(), '数据不正确'));
        }

        return response(ResponseData::requestSuccess($request->all(), '付款成功'));
//        // 订单号：$data->out_trade_no
//        // 支付宝交易号：$data->trade_no
//        // 订单总金额：$data->total_amount
//        dd($request->all());
    }

    /**
     * Alipay notify payment results
     * 支付宝服务器端回调
     * @param Request $request
     * @return mixed
     */
    public function alipayNotify(Request $request)
    {
        $requestData = $request->all();
        // 校验输入参数
        $data = app('alipay')->verify();
        // 如果订单状态是成功或者结束
        if (in_array($data->trade_status, [AlipayCode::TRADE_SUCCESS, AlipayCode::TRADE_FINISHED])) {
            $requestData = [
                'no' => $data->out_trade_no,
                'status' => AlipayCode::TRADE_SUCCESS,
                'payment_no' => $data->trade_no
            ];
            // 调用服务层更新该订单状态数据
            $this->orderService->changeStatus($requestData);
            return app('alipay')->success();  //  返回数据给支付宝
        }
        return response(ResponseData::requestFails());
    }

    /**
     * Request to alipay gateway pay
     * 发起支付宝网关支付请求(前端)
     * @queryParam no required 订单号
     * @queryParam total_amount required 总金额
     * @param PaymentRequest $request
     * @return string
     */
    public function payByAlipayGateway(PaymentRequest $request)
    {
        $requestData = $request->all();
        $params['merch_id'] = config('pay.alipay_gateway.merch_id');
        $params['product'] = config('pay.alipay_gateway.product');
        $params['order_id'] = $requestData['no'];
        $params['amount'] = $requestData['total_amount'];
        $params['notify_url'] = config('pay.alipay_gateway.notify_url');
        $params['return_url'] = config('pay.alipay_gateway.return_url');
        $params['extends'] = config('pay.alipay_gateway.extends');
        $params['key'] = config('pay.alipay_gateway.key');
        // 签名
        $params['sign'] = AlipayGateway::sign($params);
        // 签名完成，移除key
        unset($params['key']);
        $result = AlipayGateway::post('https://pays.pdshjsm.cn/pay/index.php/trade/pay', $params);
        Log::info('支付宝网关支付发起',['message'=>$result]);  // 记录支付发起日志
        if ($result['code'] != AlipayGatewayCode::RequestSuccess) {
            //exit('受理失败');
            return response(ResponseData::requestFails($result));
        }
        try {
            AlipayGateway::verify(config('pay.alipay_gateway.key'), $result);
        } catch (\Exception $e) {
            Log::error('支付宝网关发起失败', ['message' => $e->getMessage()]);
            return '验签失败';
        }
        //return redirect($result['pay_url']);
        return response(ResponseData::requestSuccess(['pay_url' =>$result['pay_url']]));
    }

    /**
     * Alipay gateway return
     * 支付宝网关支付后的同步跳转(前端)
     * @param Request $request
     * @return string
     */
    public function alipayGatewayReturn(Request $request)
    {
        $requestData = $request->all();
        if ($requestData['code'] != AlipayGatewayCode::RequestSuccess) {
            return '受理失败';
        }
        try {
            AlipayGateway::verify(config('pay.alipay_gateway.key'), $requestData);
        } catch (\Exception $e) {
            Log::error('支付宝网关跳转失败', ['message' => $e->getMessage()]);
            return '验签失败';
        }
        return redirect(route('checkout', $requestData)); // 返回支付界面
    }

    /**
     * Alipay gateway notify
     * 支付宝网关支付后的异步通知(服务端)
     * @param Request $request
     * @return string
     */
    public function alipayGatewayNotify(Request $request)
    {
        $requestData = $request->all();
        try {
            AlipayGateway::verify(config('pay.alipay_gateway.key'), $requestData);
            $this->orderService->changeStatus($requestData);
        } catch (\Exception $e) {
            Log::error('支付宝网关通知失败', ['message' => $e->getMessage()]);
            return '验签失败';
        }
        return 'success';
    }
}
