<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AssetImgsRequest;
use App\Services\Admin\AssetImgService;
use Illuminate\Http\Request;

/**
 * @group [ADMIN] Asset img
 * 静态图片管理
 * @authenticated
 * @package App\Http\Controllers\Admin
 */
class AssetImgController extends Controller
{
    private $assetImgService;
    public function __construct(AssetImgService $assetImgService)
    {
        $this->assetImgService = $assetImgService;
    }

    /**
     * Get assetImg list
     * 获取首页静态资源列表
     * @queryParam page 页码
     * @queryParam page_limit 每页数量
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function queryList(Request $request){
        $result = $this->assetImgService->queryList($request->all());
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * Save asset img
     * 保存首页静态资源
     * @bodyParam img required 图片地址
     * @bodyParam img_location required 图片位置
     * @bodyParam type required 类型
     * @bodyParam product_id 关联产品
     * @param AssetImgsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AssetImgsRequest $request)
    {
        $requestData = $request->only(['img', 'img_location', 'type', 'product_id']);
        $result = $this->assetImgService->store(array_filter($requestData));
        return $result? response()->json(ResponseData::requestSuccess($request)): response()->json(ResponseData::requestFails($request->all()));
    }

    /**
     * Delete img
     * 删除图片资源
     * @urlParam assetImgId required Example:1
     * @param $assetImgId
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($assetImgId)
    {
        $result = $this->assetImgService->destroy($assetImgId);
        return $result? response()->json(ResponseData::requestSuccess()): response()->json(ResponseData::paramError());
    }
}
