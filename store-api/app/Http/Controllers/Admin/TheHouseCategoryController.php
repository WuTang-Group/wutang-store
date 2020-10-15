<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Admin\TheHouseCategoryService;
use Illuminate\Http\Request;

/**
 * @group [ADMIN] TheHouse
 * Class TheHouseCategoryController
 * @package App\Http\Controllers\Admin
 */
class TheHouseCategoryController extends Controller
{
    private $service;
    public function __construct(TheHouseCategoryService $service)
    {
        $this->service = $service;
    }

    /**
     * Get The House Category List
     * 获取The House 分类列表
     * @queryParam page 页码
     * @queryParam page_limit 每页数量
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTheHouseCategoryList(Request $request)
    {
        $result = $this->service->getTheHouseCategoryList($request->all());
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * Get Category Detail By Slug
     * 通过slug获取The House分类详情
     * @urlParam slug required 分类slug Example:aspernatur-ex
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCategoryDetailBySlug($slug)
    {
        $result = $this->service->getCategoryDetailBySlug($slug);
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * Create The House Category
     * 创建The House Category
     * @bodyParam name required The house分类名称
     * @bodyParam banner required 分类banner图
     * @bodyParam title required banner处标题
     * @bodyParam sub_title required banner处副标题
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function categoryStore(Request $request)
    {
        $requestData = $request->only(['name', 'banner', 'title', 'sub_title']);
        $result = $this->service->CategoryStore($requestData);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::paramError($request->all()));
    }

    /** The House Category Update By Slug
     * 根据slug更新The House分类
     * @bodyParam name The house分类名称
     * @bodyParam banner 分类banner图
     * @bodyParam title banner处标题
     * @bodyParam sub_title banner处副标题
     * @urlParam slug required 分类slug Example:aspernatur-ex
     * @param $slug
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function CategoryUpdateBySlug($slug, Request $request)
    {
        $requestData = $request->only(['name', 'banner', 'title', 'sub_title']);
        $result = $this->service->categoryUpdateBySlug($slug, $requestData);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::paramError($request->all()));

    }

    /** The House Category delete by slug
     * 根据slug删除The House分类
     * @urlParam slug required 分类slug Example:aspernatur-ex
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function categoryDestroyBySlug($slug)
    {
        $result = $this->service->categoryDestroyBySlug($slug);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::paramError());

    }
}
