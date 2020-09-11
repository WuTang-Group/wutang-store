<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Api\TheHouseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TheHouseController extends Controller
{
    private $service;

    public function __construct(TheHouseService $service)
    {
        $this->service = $service;
    }

    /**
     * @group [API] The House
     * get the house category list
     * 获取the house 分类列表
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function theHouseCategoryList(Request $request)
    {
        $result = $this->service->theHouseCategoryList();
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * @group [API] The House
     * get all the houses
     * 获取所有的the house和对应的分类
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function theHouseAll(Request $request)
    {
        $requestData = page_limit($request->all());
        $result = $this->service->theHouseAll($requestData);
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * @group [API] The House
     * get the house by category
     * 按照分类得slug获取 the house
     * @queryQaram $category_slug 分类slug
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function theHouseList($category_slug, Request $request)
    {
        $result = $this->service->theHouseList($category_slug);
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * @group [API] The House
     * get the house detail
     * 获取get house详情
     * @queryParam $the_house_slug
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function theHouseDetail($the_house_slug, Request $request)
    {
        $result = $this->service->theHouseDetail($the_house_slug);
        return response()->json(ResponseData::requestSuccess($result));
    }
}
