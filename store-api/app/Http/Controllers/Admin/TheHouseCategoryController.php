<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Admin\theHouseCategoryService;
use Illuminate\Http\Request;

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

}
