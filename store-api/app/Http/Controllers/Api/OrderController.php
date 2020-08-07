<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\OrderRequest;
use App\Services\Api\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $service;
    public function __construct(OrderService $service)
    {
        $this->service = $service;
    }

    // 订单列表
    public function queryList()
    {
        $results = $this->service->queryList();
        return response(ResponseData::requestSuccess($results));
    }

    // 订单详情
    public function getOrderDetail()
    {
        $results = $this->service->getOrderDetail();
        return response(ResponseData::requestSuccess($results));
    }

    // 订单创建发起
    public function requestStore(OrderRequest $request)
    {
        $results = $this->service->requestStore($request);
    }
}
