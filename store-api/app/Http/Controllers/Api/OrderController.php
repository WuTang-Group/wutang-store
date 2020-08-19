<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\OrderRequest;
use App\Services\Api\OrderService;
use Illuminate\Broadcasting\BroadcastManager;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group [API] Order
 * 订单管理
 * @authenticated
 * @package App\Http\Controllers\Api
 */
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
     * 获取订单详情
     * @queryParam no required 订单号
     * @param $no
     * @return Application|ResponseFactory|Response
     */
    public function getOrderDetail($no)
    {
        $results = $this->service->getOrderDetail($no);
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Request create order
     * 订单创建发起
     * @bodyParam address_id interger required 地址id
     * @bodyParam remark string optional 订单备注
     * @bodyParam items array required 商品项目
     * @bodyParam items.*.product_id integer required 商品id
     * @bodyParam items.*.amount integer required 购买数量
     * @param OrderRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function requestCreate(OrderRequest $request)
    {
        $results = $this->service->requestCreate($request);
        return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails($request->all()));
    }

    /**
     * Check the order status
     * 查询订单状态
     * @queryParam no required 订单号
     * @param OrderRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function payCheck(OrderRequest $request)
    {
//        $manager = app(BroadcastManager::class);
//        $driver = $manager->connection();
//        // 第一个参数是频道名，第二个参数是事件名，第三个参数是广播内容
//        $driver->broadcast(['channel_1', 'channel_2'], 'login', ['message' => 'hello world']);
        $results = $this->service->payCheck($request);
        return response(ResponseData::requestSuccess($results));
    }
}
