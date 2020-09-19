<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Admin\theHouseCategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TheHouseCategoryController extends Controller
{
    private $service;
    public function __construct(TheHouseCategoryService $service)
    {
        $this->service = $service;
    }

    public function getTheHouseCategoryList(Request $request)
    {
        $result = $this->service->getTheHouseCategoryList($request->all());
        return response()->json(ResponseData::requestSuccess($result));
    }

    public function getCategoryDetailBySlug($slug)
    {
        $result = $this->service->getCategoryDetailBySlug($slug);
        return response()->json(ResponseData::requestSuccess($result));
    }

    public function categoryStore(Request $request)
    {
        $requestData = $request->only(['name', 'banner', 'title', 'sub_title']);
        $result = $this->service->CategoryStore($requestData);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::paramError($request->all()));
    }

    public function categoryUpdateBySlug($slug, Request $request)
    {
        $requestData = $request->only(['name', 'banner', 'title', 'sub_title']);
        $result = $this->service->categoryUpdateBySlug($slug, $requestData);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::paramError($request->all()));

    }

    public function categoryDestroyBySlug($slug)
    {
        $result = $this->service->categoryDestroyBySlug($slug);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::paramError());

    }
}
