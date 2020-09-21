<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Admin\theHouseContentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * @group [ADMIN] TheHouse
 * Class TheHouseContentController
 * @package App\Http\Controllers\Admin
 */
class TheHouseContentController extends Controller
{
    private $service;
    public function __construct(TheHouseContentService $service)
    {
        $this->service = $service;
    }

    /**
     * Get The House Content List
     * 获取The House文案列表
     * @queryParam page 页码
     * @queryParam page_limit 每页显示数量
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTheHouseContentList(Request $request)
    {
        $result = $this->service->getTheHouseContentList($request->all());
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * Get The House Content detail by id
     * 根据Id获取The House文案详情
     * @urlParam id required The House文案Id Example:1
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getContentDetailById($id)
    {
        $result = $this->service->getContentDetailById($id);
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * Create The House Content
     * 新增The House文案
     * @bodyParam the_house_id required The House关联ID
     * @bodyParam title required 文案标题
     * @bodyParam content required 文案正文
     * @bodyParam img required 文案配套图片
     * @bodyParam img_desc required 配套图片简述
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function contentStore(Request $request)
    {
        $requestData = $request->only(['id', 'the_house_id', 'title', 'content', 'img', 'img_desc']);
        $result = $this->service->contentStore($requestData);
        return $result? response()->json(ResponseData::requestSuccess()): response()->json(ResponseData::paramError($request->all()));
    }

    /**
     * Update The House Content by id
     * 根据id更新The House文案
     * @bodyParam the_house_id The House关联ID
     * @bodyParam title 文案标题
     * @bodyParam content 文案正文
     * @bodyParam img 文案配套图片
     * @bodyParam img_desc 配套图片简述
     * @urlParam
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * Update The House Content by id
     * 根据id更新The House文案
     * @bodyParam the_house_id The House关联ID
     * @bodyParam title 文案标题
     * @bodyParam content 文案正文
     * @bodyParam img 文案配套图片
     * @bodyParam img_desc 配套图片简述
     * @urlParam id required The House文案ID Example: 1
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function ContentUpdateById($id, Request $request)
    {
        $requestData = $request->only(['id', 'the_house_id', 'title', 'content', 'img', 'img_desc']);
        $result = $this->service->ContentUpdateById($id, $requestData);
        return $result? response()->json(ResponseData::requestSuccess()):response()->json(ResponseData::paramError($request->all()));
    }

    /**
     * delete The House Content by id
     * 根据id删除The House文案
     * @urlParam id required The House文案ID Example: 1
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function contentDestroyById($id)
    {
        $result = $this->service->contentDestroyById($id);
        return $result? response()->json(ResponseData::requestSuccess()):response()->json(ResponseData::paramError());
    }
}
