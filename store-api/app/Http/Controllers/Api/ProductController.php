<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Api\ProductService;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    private $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Get product category (Api)
     * 获取商品类别
     * @return \Illuminate\Http\JsonResponse
     */
    public function categoryQueryList(){
        $result = $this->productService->categoryQueryList();
        return $result?response()->json(ResponseData::requestSuccess($result)):response()->json(ResponseData::requestFails());
    }

    public function productQueryList(Request $request){
        $queries = page_limit($request);
        $result = $this->productService->productQueryList($queries->all());
        return $result?response()->json(ResponseData::requestSuccess($result)):response()->json(ResponseData::requestFails());
    }


    /**
     * get product of product category
     * 获取对应类别下的产品
     * @queryParam page 页码
     * @queryParam page_limit 每页数量
     * @param $categoryId
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCategoryProduct($categoryId, Request $request){
        $queries = page_limit($request);
        $result = $this->productService->getCategoryProduct($categoryId, $queries->all());
        return $result?response()->json(ResponseData::requestSuccess($result)):response()->json(ResponseData::requestFails());
    }

    /**
     * Get new product
     * 获取新品
     * @queryParam page 页码
     * @queryParam page_limit 每页数量
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function newProduct(Request $request){
        $queries = page_limit($request);
        $result = $this->productService->newProduct($queries->all());
        return $result?response()->json(ResponseData::requestSuccess($result)):response()->json(ResponseData::requestFails());
    }
}
