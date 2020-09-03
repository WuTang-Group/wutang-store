<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\api\AssetImgService;
use Illuminate\Http\Request;

class AssetImgController extends Controller
{
    private $assetImgService;
    public function __construct(AssetImgService $assetImgService)
    {
        $this->assetImgService = $assetImgService;
    }

    /**
     * get img resource list
     * 获取静态图片资源列表
     * queryParam page 页数
     * queryParam page_limit 每页数量
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function list(Request $request)
    {
        $requestData = page_limit($request->all());
        $result = $this->assetImgService->list($requestData);
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * get img resource
     * 获取图片资源
     * queryParam img_location 图片位置
     * @param $img_location
     * @return \Illuminate\Http\JsonResponse
     */
    public function getImg($img_location)
    {
        $result = $this->assetImgService->getImg($img_location);
        return response()->json(ResponseData::requestSuccess($result));
    }
}
