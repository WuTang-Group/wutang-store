<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Api\ShopCartService;
use Illuminate\ {
    Contracts\Foundation\Application,Contracts\Routing\ResponseFactory,
    Http\Request,Http\Response
};

class ShopCartController extends Controller
{
    private $service;

    public function __construct(ShopCartService $service)
    {
        $this->service = $service;
    }

    /**
     * Request shop cart items
     * 请求购物车数据
     * @queryParam product_id 商品id
     * @queryParam amount 数量
     * 原理：若有参数传递则进行数据写入并返回最新购物车数据;
     * 若无参数传递则直接输出购物车表内数据
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function queryList(Request $request)
    {
        $request = $request->except('user_id');
        if (!$request) {
            $results = $this->service->queryList();
            return response(ResponseData::requestSuccess($results));
        }
        return $this->store($request);
    }

    /**
     * Request store cart items
     * 保存购物车数据
     * @bodyParam product_id required 商品id
     * @bodyParam amount required 数量
     * @param $queries
     * @return Application|ResponseFactory|Response
     */
    public function store($queries)
    {
        if(!isset($queries['amount']) && !isset($queries['product_id'])){
            return response(ResponseData::requestFails($queries));
        }
        $results = $this->service->store($queries);
        return $results ? response(ResponseData::requestSuccess($results)) : response(ResponseData::requestFails($queries));
    }

}
