<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Admin\theHouseContentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TheHouseContentController extends Controller
{
    private $service;
    public function __construct(TheHouseContentService $service)
    {
        $this->service = $service;
    }

    public function getTheHouseContentList(Request $request)
    {
        $result = $this->service->getTheHouseContentList($request->all());
        return response()->json(ResponseData::requestSuccess($result));
    }

    public function getContentDetailById($id)
    {
        $result = $this->service->getContentDetailById($id);
        return response()->json(ResponseData::requestSuccess($result));
    }

    public function contentStore(Request $request)
    {
        Log::info($request->all());
        $requestData = $request->only(['id', 'the_house_id', 'title', 'content', 'img', 'img_desc']);
        $result = $this->service->contentStore($requestData);
        return $result? response()->json(ResponseData::requestSuccess()): response()->json(ResponseData::paramError($request->all()));
    }

    public function ContentUpdateById($id, Request $request)
    {
        $requestData = $request->only(['id', 'the_house_id', 'title', 'content', 'img', 'img_desc']);
        $result = $this->service->ContentUpdateById($id, $requestData);
        return $result? response()->json(ResponseData::requestSuccess()):response()->json(ResponseData::paramError($request->all()));
    }

    public function contentDestroyById($id)
    {
        $result = $this->service->contentDestroyById($id);
        return $result? response()->json(ResponseData::requestSuccess()):response()->json(ResponseData::paramError());
    }
}
