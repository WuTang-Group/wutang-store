<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Admin\TheHouseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use function GuzzleHttp\Promise\all;

class TheHouseController extends Controller
{
    private $service;
    public function __construct(TheHouseService $service)
    {
        $this->service = $service;
    }

    public function getTheHouseList(Request $request)
    {
        $result = $this->service->getTheHouseList($request->all());
        return response()->json(ResponseData::requestSuccess($result));
    }

    public function theHouseDetailBySlug($slug)
    {
        $result = $this->service->theHouseDetailBySlug($slug);
        return response()->json(ResponseData::requestSuccess($result));
    }

    public function theHouseStore(Request $request)
    {
        $requestData = $request->only(['title', 'sub_title', 'the_house_category_id', 'describe', 'banner']);
        $result = $this->service->theHouseStore($requestData);
        return $result? response()->json(ResponseData::requestSuccess()): response()->json(ResponseData::paramError($request->all()));
    }

    public function theHouseUpdateBySlug($slug, Request $request)
    {
        $requestData = $request->only(['title', 'sub_title', 'the_house_category_id', 'describe', 'banner']);
        $result = $this->service->theHouseUpdateBySlug($slug, $requestData);
        return $result? response()->json(ResponseData::requestSuccess()):response()->json(ResponseData::paramError($request->all()));
    }

    public function theHouseDestroyBySlug($slug)
    {
        $result = $this->service->theHouseDestroyBySlug($slug);
        return $result? response()->json(ResponseData::requestSuccess()):response()->json(ResponseData::paramError());
    }
}
