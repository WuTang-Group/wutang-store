<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ShopCartRequest;
use App\Services\Api\ShopCartService;
use Illuminate\Http\Request;

class ShopCartController extends Controller
{
    private $shopCartService;

    public function __construct(ShopCartService $shopCartService)
    {
        $this->shopCartService = $shopCartService;
    }

    public function queryList($user_id,Request $request)
    {
        $result =$this->shopCartService->queryList($request->all(), $user_id);
        return $result ? response()->json(ResponseData::requestSuccess($result)) : response()->json(ResponseData::requestFails());
    }

    public function store(ShopCartRequest $shopCartRequest)
    {
        $result = $this->shopCartService->store($shopCartRequest->all());
        return $result ? response()->json(ResponseData::requestSuccess($result)) : response()->json(ResponseData::requestFails($shopCartRequest->all()));
    }


}
