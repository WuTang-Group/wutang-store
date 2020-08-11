<?php

namespace App\Http\Controllers\Api;

use App\Enums\ {
    AlipayCode,UnionPayCode
};
use App\Handlers\ResponseData;
use App\Http\ {
    Controllers\Controller,Requests\Api\PaymentRequest
};
use App\Services\Api\OrderService;
use Exception;
use Illuminate\ {
    Contracts\Foundation\Application,Contracts\Routing\ResponseFactory,
    Http\RedirectResponse,Http\Request,Http\Response,Support\Facades\Log
};
use Omnipay;

class PaymentController extends Controller
{
    private $service;

    public function __construct(OrderService $service)
    {
        $this->service = $service;
    }

    /**
     * Unionpay request payment
     * 银联支付发起请求
     * @queryParam no required 订单号
     * @queryParam product_name required 商品名称
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
            return $this->service->changeStatus($request);
        }
    }

    /**
     * Alipay request payment
     * 支付宝发起支付
     * @queryParam out_trade_no required 订单号
     * @queryParam total_amount required 总金额
     * @queryParam subject required 订单标题
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
            'subject'      => $requestData['product_name'], // 订单标题
        ]);
    }

    /**
     * Alipay return payment results
     *  支付宝前端回调页面
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function alipayReturn(Request $request)
    {
        // 校验提交的参数是否合法
        try {
            app('alipay')->verify();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response(ResponseData::requestFails($request->all(),'数据不正确'));
        }

        return response(ResponseData::requestSuccess($request->all(),'付款成功'));
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
    public function alipayNotify()
    {
        // 校验输入参数
        $data = app('alipay')->verify();
        // 如果订单状态是成功或者结束
        if(in_array($data->trade_status, [AlipayCode::TRADE_SUCCESS, AlipayCode::TRADE_FINISHED])) {
            $requestData = [
                'no' => $data->out_trade_no,
                'status' => AlipayCode::TRADE_SUCCESS,
                'payment_no' =>$data->trade_no
            ];
            // 调用服务层更新该订单状态数据
            $this->service->changeStatus($requestData);
            return app('alipay')->success();  //  返回数据给支付宝
        }
        return response(ResponseData::requestFails());
    }
}
