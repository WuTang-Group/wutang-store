<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductSkuRequest;
use App\Services\Admin\ProductSkuService;
use Illuminate\Http\Request;

/**
 * @group [ADMIN] Product skus
 * 商品sku管理
 * @package App\Http\Controllers\Admin
 */
class ProductSkuController extends Controller
{
    private $productSkuService;
    public function __construct(ProductSkuService $productSkuService)
    {
        $this->productSkuService = $productSkuService;
    }

    /**
     * Get product sku list
     * 获取商品SKU列表
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function queryList(Request $request)
    {
        $result = $this->productSkuService->queryList($request);
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * Create product sku
     * 新增产品SKU
     * @queryParam title required sku名称
     * @queryParam description required sku描述
     * @queryParam price required 价格
     * @queryParam stock required 库存
     * @queryParam product_id required 所属商品id
     * @param ProductSkuRequest $productSkuRequest
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ProductSkuRequest $productSkuRequest){
        $result = $this->productSkuService->store(array_filter($productSkuRequest->all()));
        return $result ? response()->json(ResponseData::requestSuccess($result)) : response()->json(ResponseData::requestFails($productSkuRequest->all()));
    }

    /**
     * Edit product sku
     * 编辑产品SKU
     * @queryParam title sku名称
     * @queryParam description sku描述
     * @queryParam price 价格
     * @queryParam stock 库存
     * @queryParam product_id 所属商品id
     * @param ProductSkuRequest $productSkuRequest
     * @param $productSkuId
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($productSkuId, ProductSkuRequest $productSkuRequest){
        $result = $this->productSkuService->edit(array_filter($productSkuRequest->all()), $productSkuId);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails($productSkuRequest->all()));
    }

    /**
     * Delete product sku
     * 删除商品sku
     * @param $productSkuId
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($productSkuId){
        $result = $this->productSkuService->destory($productSkuId);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails());
    }
}
