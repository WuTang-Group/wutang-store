<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProductCategoryRequest;
use App\Services\Api\ProductCategoryService;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    private $categoriesService;

    public function __construct(ProductCategoryService $categoriesService)
    {
        $this->categoriesService = $categoriesService;
    }

    /**
     * get product category list
     * 获取产品分类列表
     * @queryParam page 页码
     * @queryParam page_limit 每页数量
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function queryList(Request $request)
    {
        $queries = page_limit($request->all());
        $result = $this->categoriesService->queryList($queries);
        return $result ? response()->json(ResponseData::requestSuccess($result)) : response()->json(ResponseData::requestFails());
    }


    /**
     * create product category
     * 新建产品分类
     * @queryParam title required 分类名称
     * @queryParam title_en 分类英文名称
     * @queryParam describe 分类描述
     * @queryParam describe_en 英文分类描述
     * @queryParam banner 分类banner图
     * @queryParam description 分类简介
     * @queryParam description_en 分类英文简介
     * @queryParam img 分类简介图
     * @queryParam parent_id 上级分类ID
     * @param ProductCategoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ProductCategoryRequest $request)
    {
        $queries = $request->only(['title', 'title_en', 'describe', 'describe_en', 'banner', 'description', 'description_en', 'img', 'parent_id']);

        $result = $this->categoriesService->store(array_filter($queries));
        return $result ? response()->json(ResponseData::requestSuccess($result)) : response()->json(ResponseData::requestFails());
    }

    /**
     * edit product category
     * 编辑产品分类
     * @queryParam title 分类名称
     * @queryParam title_en 分类英文名称
     * @queryParam describe 分类描述
     * @queryParam describe_en 英文分类描述
     * @queryParam banner 分类banner图
     * @queryParam description 分类简介
     * @queryParam description_en 分类英文简介
     * @queryParam img 分类简介图
     * @queryParam parent_id 上级分类ID
     * @param ProductCategoryRequest $request
     * @param $productCategoriesId
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(ProductCategoryRequest $request, $productCategoriesId)
    {
        $queries = $request->only(['title', 'title_en', 'describe', 'describe_en', 'banner', 'description', 'description_en', 'img', 'parent_id']);
        $result = $this->categoriesService->edit($queries, $productCategoriesId);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails());
    }

    /**
     * delete product category
     * 删除产品分类
     * @param $productCategoriesId
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($productCategoriesId)
    {
        $result = $this->categoriesService->destroy($productCategoriesId);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails());
    }
}
