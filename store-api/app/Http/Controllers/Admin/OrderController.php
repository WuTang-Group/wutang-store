<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OrderRequest;
use App\Services\Admin\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * @group [ADMIN] Order
 * 订单管理
 * @package App\Http\Controllers\Admin
 */
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
        $result =  $this->orderService->queryList($request->all());
        return response()->json(ResponseData::requestSuccess($result));
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
        $result = $this->orderService->searchOrder($queries);
        return $result?response()->json(ResponseData::requestSuccess($result)):response()->json(ResponseData::requestFails($request->all()));
    }

    /**
     * Edit order
     * 编辑订单
     * @bodyParam  refund_status string 退款状态
     * @bodyParam  ship_status string 物流状态
     * @bodyParam  status string 订单状态
     * @param $orderId
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($orderId, Request $request)
    {
        $requestData = $request->only('refund_status', 'ship_status', 'status');
        $result = $this->orderService->edit($orderId, $requestData);
        return $result? response()->json(ResponseData::requestSuccess()): response()->json(ResponseData::paramError());
    }

    /**
     * Get order detail
     * 获取订单详情信息
     * @param $orderNo
     * @return \Illuminate\Http\JsonResponse
     */
    public function detail($orderNo)
    {
        $result = $this->orderService->detail($orderNo);
        return response()->json(ResponseData::requestSuccess($result));
    }
}


