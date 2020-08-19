<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProductRequest;
use App\Services\Api\ProductService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group [API] Product
 * 商品管理
 * @authenticated
 * @package App\Http\Controllers\Api
 */
class ProductController extends Controller
{
    private $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    /**
     * Query the product detail
     * 获取商品详情信息
     * @queryParam slug required 商品slug
     * @param $product_slug
     * @return Application|ResponseFactory|Response
     */
    public function index($product_slug)
    {
        $results = $this->service->index($product_slug);
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Get product category list
     * 获取商品分类列表
     * @return Application|ResponseFactory|Response
     */
    public function categoryQueryList()
    {
        $results = $this->service->categoryQueryList();
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Get product list
     * 获取商品列表
     * @QueryParam page 页码
     * @QueryParam page_limit 每页显示的数量
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function productQueryList(Request $request)
    {
        $results = $this->service->productQueryList($request);
        return response(ResponseData::requestSuccess($results));
    }


    /**
     * get product of product category
     * 获取对应类别下的产品
     * @queryParam category_slug required 分类slug
     * @param $category_slug
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function getCategoryProduct($category_slug, Request $request)
    {
        $results = $this->service->getCategoryProduct($category_slug, $request);
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Get new product
     * 获取新品
     * @queryParam page 页码
     * @queryParam page_limit 每页数量
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function newProduct(Request $request)
    {
        $results = $this->service->newProduct($request);
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Get product category story
     * 获取产品分类故事
     * @queryParam category_slug required 分类slug
     * @param $product_slug
     * @return JsonResponse
     */
    public function categoryStory($product_slug)
    {
        $results = $this->service->categoryStory($product_slug);
        return response()->json(ResponseData::requestSuccess($results));
    }

    /**
     * Get product detail by product id list
     * 根据ID列表查询商品
     * @queryParam id_list required 商品id列表（数组）
     * @param ProductRequest $request
     * @return JsonResponse
     */
    public function productQuery(ProductRequest $request)
    {
        $results = $this->service->productQuery($request->all());
        return response()->json(ResponseData::requestSuccess($results));
    }

    /**
     * Get wish list
     * 获取心愿单商品列表
     * @param Request $request
     * @return JsonResponse
     */
    public function favorList(Request $request)
    {
        $results = $this->service->favorList($request);
        return response()->json(ResponseData::requestSuccess($results));
    }

    /**
     * Request Add product to wish list
     * 请求将商品加入心愿单
     * @queryParam product_id integer required 商品id
     * @param $product_id
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function favor($product_id,Request $request)
    {
        $results = $this->service->favor($product_id,$request);
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Remove product from wish list
     * 移除心愿单商品
     * @queryParam product_id required 商品id
     * @param $product_id
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function disfavor($product_id,Request $request)
    {
        $results = $this->service->disfavor($product_id,$request);
        return response(ResponseData::requestSuccess($results));
    }
}
