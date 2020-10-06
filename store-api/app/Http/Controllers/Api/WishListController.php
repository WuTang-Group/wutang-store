<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\WishListRequest;
use App\Services\Api\WishListService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group [API] User wish list
 * 用户心愿单
 * @authenticated
 * @package App\Http\Controllers\Api
 */
class WishListController extends Controller
{
    private $service;

    public function __construct(WishListService $service)
    {
        $this->service = $service;
    }

    /**
     * Get wish list
     * 获取心愿单商品列表
     * @queryParam page 页码
     * @queryParam page_limit 分页条目
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $results = $this->service->index($request);
        return response()->json(ResponseData::requestSuccess($results));
    }

    /**
     * Request Add product to wish list
     * 请求将商品加入心愿单
     * @bodyParam product_id integer required 商品id
     * @param WishListRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function store(WishListRequest $request)
    {
        $results = $this->service->store($request);
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Remove product from wish list
     * 移除心愿单商品
     * @urlParam product_id required 商品id
     * @param $product_id
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function delete($product_id,Request $request)
    {
        $results = $this->service->delete($product_id,$request);
        return response(ResponseData::requestSuccess($results));
    }
}
