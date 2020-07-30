<?php

namespace App\Http\Controllers\Api;

use App\Enums\UnionPayCode;
use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PaymentRequest;
use App\Services\Api\OrderService;
use Illuminate\Http\Request;
use Omnipay;

class PaymentController extends Controller
{
    private $service;

    public function __construct(OrderService $service)
    {
        $this->service = $service;
    }

    /**
     * Request the unionpay
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
     * Return unionpay results
     * 银联支付返回结果
     * @param Request $request
     * @return array|\Illuminate\Http\RedirectResponse
     */
    public function unionpayReturn(Request $request)
    {
        $gateway = Omnipay::gateway('unionpay');
        $response = $gateway->completePurchase(['request_params' => $_REQUEST])->send();
        if ($response->isPaid()) {
            // 重定向到结算页面并返回参数-参数将交由前端获取,该route name为临时测试用
            return redirect()->route('unionpay.test', $request->all());
        } else {
            return ResponseData::requestFails($request->all(), '支付失败');
        }
    }

    /**
     * Notify unionpay results
     * 通知银联支付结果
     * @param Request $request
     * @return bool
     */
    public function unionpayNotify(Request $request)
    {
        // 支付成功
        if ($request['respCode'] == UnionPayCode::Success) {
            return $this->service->changeStatus($request);
        }
    }
}
