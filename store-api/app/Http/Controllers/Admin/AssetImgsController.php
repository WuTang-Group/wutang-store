<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AssetImgsRequest;
use App\Services\Admin\AssetImgsService;
use Illuminate\Http\Request;

/**
 * @group [ADMIN] Asset img
 * 静态图片管理
 * @authenticated
 * @package App\Http\Controllers\Admin
 */
class AssetImgsController extends Controller
{
    private $assetImgsService;
    public function __construct(AssetImgsService $assetImgsService)
    {
        $this->assetImgsService = $assetImgsService;
    }

    /**
     * Get assetImgs list
     * 获取首页静态资源列表
     * @queryParam page 页码
     * @queryParam page_limit 每页数量
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function queryList(Request $request){
        $result = $this->assetImgsService->queryList($request->all());
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * save asset img
     * 保存首页静态资源
     * @queryParam img required 图片地址
     * @queryParam img_location required 图片位置
     * @param AssetImgsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AssetImgsRequest $request)
    {
        $result = $this->assetImgsService->store(array_filter($request->all()));
        return $result? response()->json(ResponseData::requestSuccess($request)): response()->json(ResponseData::requestFails($request->all()));
    }

    /**
     * Delete img
     * 删除图片资源
     * @param $assetImgId
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($assetImgId)
    {
        $result = $this->assetImgsService->destroy($assetImgId);
        return $result? response()->json(ResponseData::requestSuccess()): response()->json(ResponseData::paramError());
    }
}
