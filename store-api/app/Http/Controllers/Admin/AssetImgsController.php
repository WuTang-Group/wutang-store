<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AssetImgsRequest;
use App\Services\Admin\AssetImgsService;
use Illuminate\Http\Request;

class AssetImgsController extends Controller
{
    private $assetImgsService;
    public function __construct(AssetImgsService $assetImgsService)
    {
        $this->assetImgsService = $assetImgsService;
    }

    public function queryList(Request $request){
        $result = $this->assetImgsService->queryList($request->all());
        return response()->json(ResponseData::requestSuccess($result));
    }

    public function store(AssetImgsRequest $request)
    {
        $result = $this->assetImgsService->store(array_filter($request->all()));
        return $result? response()->json(ResponseData::requestSuccess($request)): response()->json(ResponseData::requestSuccess($request->all()));
    }
}
