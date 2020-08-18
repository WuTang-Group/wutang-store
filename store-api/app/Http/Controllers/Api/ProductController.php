<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Api\ProductService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ProductController extends Controller
{
    private $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
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
        $results = $this->productService->index($product_slug);
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Get product category list
     * 获取商品分类列表
     * @return Application|ResponseFactory|Response
     */
    public function categoryQueryList(){
        $results = $this->productService->categoryQueryList();
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
    public function productQueryList(Request $request){
        $results = $this->productService->productQueryList($request);
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
    public function getCategoryProduct($category_slug, Request $request){
        $results = $this->productService->getCategoryProduct($category_slug, $request);
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
    public function newProduct(Request $request){
        $results = $this->productService->newProduct($request);
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Get product category story
     * 获取产品分类故事
     * @queryParam category_slug required 分类slug
     * @param $product_slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function categoryStory($product_slug)
    {
        $results = $this->productService->categoryStory($product_slug);
        return response()->json(ResponseData::requestSuccess($results));
    }

    /**
     * Get product detail by product id list
     * 根据商品ID列表获取商品详情列表
     * @queryParam id_list required 商品id列表（数组）
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function productQuery(Request $request)
    {
        $results = $this->productService->productQuery($request->all());
        return response()->json(ResponseData::requestSuccess($results));
    }
}
