<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Admin\TheHouseService;
use Illuminate\Http\Request;

/**
 * @group [ADMIN] TheHouse
 * Class TheHouseController
 * @package App\Http\Controllers\Admin
 */
class TheHouseController extends Controller
{
    private $service;
    public function __construct(TheHouseService $service)
    {
        $this->service = $service;
    }

    /**
     * Get The House list
     * 获取Get House列表
     * @queryParam page 页码
     * @queryParam page_limit 每页数量
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTheHouseList(Request $request)
    {
        $result = $this->service->getTheHouseList($request->all());
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * Get The House detail by slug
     * 根据slug获取The House详情
     * @urlParam slug required The House的slug  Example: et-pariatur
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function theHouseDetailBySlug($slug)
    {
        $result = $this->service->theHouseDetailBySlug($slug);
        return response()->json(ResponseData::requestSuccess($result));
    }

    /** Create The House
     * 新增The House
     * @bodyParam title required 文档大标题
     * @bodyParam sub_title required 文档副标题
     * @bodyParam the_house_category_id required The House Category表的id
     * @bodyParam describe required 简要描述
     * @bodyParam banner required Banner图
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function theHouseStore(Request $request)
    {
        $requestData = $request->only(['title', 'sub_title', 'the_house_category_id', 'describe', 'banner']);
        $result = $this->service->theHouseStore($requestData);
        return $result? response()->json(ResponseData::requestSuccess()): response()->json(ResponseData::paramError($request->all()));
    }

    /**
     * Update The House by Slug
     * 根据slug更新The House
     * @bodyParam title required 文档大标题
     * @bodyParam sub_title required 文档副标题
     * @bodyParam the_house_category_id required The House Category表的id
     * @bodyParam describe required 简要描述
     * @bodyParam banner required Banner图
     * @urlParam slug required The House的slug Example: et-pariatur
     * @param $slug
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function theHouseUpdateBySlug($slug, Request $request)
    {
        $requestData = $request->only(['title', 'sub_title', 'the_house_category_id', 'describe', 'banner']);
        $result = $this->service->theHouseUpdateBySlug($slug, $requestData);
        return $result? response()->json(ResponseData::requestSuccess()):response()->json(ResponseData::paramError($request->all()));
    }

    /**
     * Delete The House by slug
     * 根据slug删除 The House
     * @urlParam slug required The House的slug Example: et-pariatur
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function theHouseDestroyBySlug($slug)
    {
        $result = $this->service->theHouseDestroyBySlug($slug);
        return $result? response()->json(ResponseData::requestSuccess()):response()->json(ResponseData::paramError());
    }
}
