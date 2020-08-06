<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProductSkuRequest;
use App\Services\Api\ProductSkuService;
use Illuminate\Http\Request;

class ProductSkuController extends Controller
{
    private $productSkuService;
    public function __construct(ProductSkuService $productSkuService)
    {
        $this->productSkuService = $productSkuService;
    }

    public function queryList(Request $request){
        $queries = page_limit($request);
        $result = $this->productSkuService->queryList($queries);
        return $result ? response()->json(ResponseData::requestSuccess($result)) : response()->json(ResponseData::requestFails());
    }

    public function store(ProductSkuRequest $productSkuRequest){
        $result = $this->productSkuService->store(array_filter($productSkuRequest->all()));
        return $result ? response()->json(ResponseData::requestSuccess($result)) : response()->json(ResponseData::requestFails($productSkuRequest->all()));
    }

    public function edit($productSkuId, ProductSkuRequest $productSkuRequest){
        $result = $this->productSkuService->edit(array_filter($productSkuRequest->all()), $productSkuId);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails($productSkuRequest->all()));
    }

    public function destroy($productSkuId){
        $result = $this->productSkuService->destory($productSkuId);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails());
    }
}
