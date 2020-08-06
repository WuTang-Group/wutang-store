<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\OrderRequest;
use App\Services\Api\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    /**
     * Get order list
     * 获取订单列表
     * @queryParam page 页码
     * @queryParam page_limit 每页数量
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function queryList(Request $request){
        $queries = page_limit($request);
        $result = $this->orderService->queryList($queries);
        return $result?response()->json(ResponseData::requestSuccess($result)):response()->json(ResponseData::requestFails());
    }

    /**
     * Search order
     * 搜索订单
     * @queryParam page 页码
     * @queryParam page_limit 每页数量
     * @queryParam username 用户名
     * @queryParam order_no 订单号
     * @queryParam order_status 订单状态
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function searchOrder(Request $request)
    {
        $queries = page_limit($request);
        $result = $this->orderService->searchOrder($queries->all());

        return $result?response()->json(ResponseData::requestSuccess($result)):response()->json(ResponseData::requestFails($request->all()));
    }
}


