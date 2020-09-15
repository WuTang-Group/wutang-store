<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Api\TheHouseService;

/**
 * @group [API] The House
 * The house 类
 * @package App\Http\Controllers\Api
 */
class TheHouseController extends Controller
{
    private $service;

    public function __construct(TheHouseService $service)
    {
        $this->service = $service;
    }

    /**
     * Get the house category
     * 获取the house分类列表(一般总共为三条)
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCategoryList()
    {
        $result = $this->service->getCategoryList();
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * Get the house list by category slug
     * 通过category内的slug获取the house 列表
     * @urlParam category_slug required category内的slug Example:omnis-inventore
     * @param $category_slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function getListByCategorySlug($category_slug)
    {
        $result = $this->service->getListByCategorySlug($category_slug);
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * Get the house detail by slug
     * 通过slug获取the house 详情
     * @urlParam the_house_slug required the house内的slug Example:modi-rerum
     * @param $the_house_slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDetailByTheHouseSlug($the_house_slug)
    {
        $result = $this->service->getDetailByTheHouseSlug($the_house_slug);
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * Get other list by category slug
     * 通过分类slug获取其他推荐报道
     * @urlParam category_slug required category内的slug Example:omnis-inventore
     * @param $category_slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOtherCategoryList($category_slug)
    {
        $result = $this->service->getOtherCategoryList($category_slug);
        return response()->json(ResponseData::requestSuccess($result));
    }

}
