<?php

namespace App\Http\Controllers\Payment;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Payment\WebPaymentService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group [API-Payment] Web payment list
 * 页面支付方式列表(alipay_bank_gateway=>支付宝银行网关,alipay_legacy_express=>支付宝即时到账,alipay_aop_page=>支付宝电脑网页,unionpay=>银联支付)
 * @authenticated
 * @package App\Http\Controllers\Payment
 */
class WebPaymentController extends Controller
{
    private $service;

    public function __construct(WebPaymentService $service)
    {
        $this->service = $service;
    }

    /**
     * Get payment list
     * 获取支付方式列表
     * @return Application|ResponseFactory|Response
     */
    public function getList()
    {
        $result = $this->service->getList();
        return response(ResponseData::requestSuccess($result));
    }
}
