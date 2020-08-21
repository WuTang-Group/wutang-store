<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCategoryRequest;
use App\Services\Admin\ProductCategoryService;
use Illuminate\Http\Request;

/**
 * @group [ADMIN] Product category
 * 商品分类管理
 * @package App\Http\Controllers\Admin
 */
class ProductCategoryController extends Controller
{
    private $categoriesService;

    public function __construct(ProductCategoryService $categoriesService)
    {
        $this->categoriesService = $categoriesService;
    }

    /**
     * Get product category list
     * 获取产品分类列表
     * @queryParam page 页码
     * @queryParam page_limit 每页数量
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function queryList(Request $request)
    {
        $result = $this->categoriesService->queryList($request);
        return response()->json(ResponseData::requestSuccess($result));
    }


    /**
     * Create product category
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
     * Edit product category
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
     * Delete product category
     * 删除产品分类
     * @param $productCategoriesId
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($productCategoriesId)
    {
        $result = $this->categoriesService->destroy($productCategoriesId);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails());
    }

    /**
     * Get category detail by category_slug
     * 根据类目slug查询类目详情
     * @param $category_slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function categoryQuery($category_slug)
    {
        $result = $this->categoriesService->categoryQuery($category_slug);
        return response()->json(ResponseData::requestSuccess($result));
    }
}
