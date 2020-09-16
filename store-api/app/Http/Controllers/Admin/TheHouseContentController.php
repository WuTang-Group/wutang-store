<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Admin\theHouseContentService;
use Illuminate\Http\Request;

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
}
