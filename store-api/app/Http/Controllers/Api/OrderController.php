<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\OrderRequest;
use App\Services\Api\OrderService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    private $service;
    public function __construct(OrderService $service)
    {
        $this->service = $service;
    }

    /**
     * Get order list
     * 获取订单列表
     * @return Application|ResponseFactory|Response
     */
    public function queryList()
    {
        $results = $this->service->queryList();
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Get order detail
     *  获取订单详情
     * @queryParam no required 订单号
     * @return Application|ResponseFactory|Response
     */
    public function getOrderDetail($no)
    {
        $results = $this->service->getOrderDetail($no);
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Request create order(NO USE NOW)
     *  订单创建发起(当前未启用)
     * @param OrderRequest $request
     */
    public function requestStore(OrderRequest $request)
    {
        $results = $this->service->requestStore($request);
    }
}
