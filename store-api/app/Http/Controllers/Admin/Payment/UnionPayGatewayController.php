<?php

namespace App\Http\Controllers\Admin\Payment;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Payment\UnionGatewayRequest;
use App\Services\Admin\Payment\UnionPayGatewayService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


/**
 * @group [ADMIN-Payment] UnionPayGateway manage
 * 银联网关支付管理类
 * Class UnionPayGatewayController
 * @package App\Http\Controllers\Admin\Payment
 */
class UnionPayGatewayController extends Controller
{
    private $service;

    public function __construct(UnionPayGatewayService $service)
    {
        $this->service = $service;
    }

    /**
     * Request get Union pay gateway list
     * 获取银联网关支付-列表
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $result = $this->service->index($request->all());
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * Request store Union pay gateway data
     *请求写入银联网关支付数据
     * @bodyParam items array required 数组名称
     * @bodyParam items.*.cpid string required CP标识
     * @bodyParam items.*.pay_type string required 支付方式
     * @param UnionGatewayRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(UnionGatewayRequest $request) {
        $result = $this->service->store($request);
        return $result ? response(ResponseData::requestSuccess($result)) : response(ResponseData::requestFails($request->all()));

    }

    /**
     * Request update Union pay gateway data
     * 请求更新银联网关支付数据
     * @queryParam id required id值
     * @queryParam cpid string CP标识
     * @queryParam pay_type string 支付方式
     * @param $id
     * @param UnionGatewayRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function update($id, UnionGatewayRequest $request)
    {
        $requestData = $request->only(['cpid', 'pay_type', 'status']);
        $result = $this->service->update($id, $requestData);
        return $result ? response(ResponseData::requestSuccess($result)) : response(ResponseData::requestFails($request->all()));
    }

    /**
     * Request update Union pay gateway status
     * 请求更新银联网关 支付状态
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
     * Request delete Union pay gateway data
     * 请求删除银联网关支付数据
     * @param $id
     * @return Application|ResponseFactory|Response
     */
    public function delete($id)
    {
        $result = $this->service->delete($id);
        return $result ? response(ResponseData::requestSuccess($result)) : response(ResponseData::requestFails());
    }
}
