<?php

namespace App\Http\Controllers\Admin\Payment;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Payment\AlipayBankGatewayRequest;
use App\Services\Admin\Payment\AlipayBankGatewayService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


/**
 * @group [ADMIN-Payment] AlipayBankGateway manage
 * 支付宝网关管理类
 * Class AlipayBankGatewayController
 * @package App\Http\Controllers\Admin\Payment
 */
class AlipayBankGatewayController extends Controller
{
    private $service;

    public function __construct(AlipayBankGatewayService $service)
    {
        $this->service = $service;
    }

    /**
     * Request get Alipay bank gateway list
     * 获取支付宝网关-列表
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $result = $this->service->index($request->all());
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * Request store alipay bank gateway data
     *请求写入支付宝网关支付数据
     * @bodyParam items array required 数组名称
     * @bodyParam items.*.merch_id string required 商户编号
     * @bodyParam items.*.key string required 商户密钥
     * @bodyParam items.*.product string required 产品编号
     * @param AlipayBankGatewayRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(AlipayBankGatewayRequest $request) {
        $result = $this->service->store($request);
        return $result ? response(ResponseData::requestSuccess($result)) : response(ResponseData::requestFails($request->all()));

    }

    /**
     * Request update alipay bank gateway data
     * 请求更新支付宝网关支付数据
     * @queryParam id required id值
     * @queryParam merch_id string 商户编号
     * @queryParam key string 商户密钥
     * @queryParam product string 产品编号
     * @param $id
     * @param AlipayBankGatewayRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function update($id, AlipayBankGatewayRequest $request)
    {
        $requestData = $request->only(['merch_id', 'key', 'product', 'status']);
        $result = $this->service->update($id, $requestData);
        return $result ? response(ResponseData::requestSuccess($result)) : response(ResponseData::requestFails($request->all()));
    }

    /**
     * Request update alipay bank gateway status
     * 请求更新支付宝网关 支付状态
     * @queryParam id required id值
     * @queryParam status required id值
     * @param $id
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function updateStatus($id, Request $request)
    {
        $result = $this->service->updateStatus($id, $request);
        return $result ? response(ResponseData::requestSuccess($result)) : response(ResponseData::requestFails($request->all()));
    }

    /**
     * Request delete alipay bank gateway data
     * 请求删除支付宝网关支付数据
     * @param $id
     * @return Application|ResponseFactory|Response
     */
    public function delete($id)
    {
        $result = $this->service->delete($id);
        return $result ? response(ResponseData::requestSuccess($result)) : response(ResponseData::requestFails());
    }
}
