<?php

namespace App\Http\Controllers\Api;

use App\Enums\ResponseStatusCode;
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
 * status说明:(1已付款,0待付款,-1付款失败,-2取消订单)
 * ship_status说明:(1已发货,-1未发货,0已签收)
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
     * @queryParam page 页码
     * @queryParam page_limit 分页条目
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function queryList(Request $request)
    {
        $results = $this->service->queryList($request);
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
     * @bodyParam remark string 订单备注
     * @param OrderRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function requestCreate(OrderRequest $request)
    {
        $results = $this->service->requestCreate($request);
        switch ($results['status']) {
            case ResponseStatusCode::RequestSuccess:
            {
                return response(ResponseData::requestSuccess($results['result']));
            }
            case ResponseStatusCode::ProductSoldOut:
            {
                return response(ResponseData::productSoldOut($results['result']));
            }
            default:
            {
                return response(ResponseData::requestFails());
            }
        }
        //return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails($request->all()));
    }

    /**
     * Cancel order
     * 取消订单
     * @queryParam no required 订单号
     * @param OrderRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function requestCancel(OrderRequest $request)
    {
        $requestData = $request->all();
        $results = $this->service->requestCancel($requestData);
        return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails($request->all()));
    }

    /**
     * Retry create order
     * 以原订单尝试重新下单
     * @bodyParam no integer required 原订单号
     * @param OrderRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function retryCreate(OrderRequest $request)
    {
        $results = $this->service->retryCreate($request);
        switch ($results['status']) {
            case ResponseStatusCode::RequestSuccess:
            {
                return response(ResponseData::requestSuccess($results['result']));
            }
            case ResponseStatusCode::ProductSoldOut:
            {
                return response(ResponseData::productSoldOut($results['result']));
            }
            default:
            {
                return response(ResponseData::requestFails());
            }
        }
        //return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails($request->all()));
    }
}
