<?php

namespace App\Http\Controllers\Admin;


use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Services\Admin\ProductService;
use Illuminate\Http\Request;

/**
 * @group [ADMIN] Product
 * 商品管理
 * @package App\Http\Controllers\Admin
 */
class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Get product list
     * 获取产品列表
     * @queryParam page 页码
     * @queryParam page_limit 每页数量
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function queryList(Request $request)
    {
        $result = $this->productService->queryList($request);
        return response()->json(ResponseData::requestSuccess($result));
    }

    /**
     * Create product
     * 新建商品
     * @queryParam product_category_id 所属产品分类id
     * @queryParam product_name required 商品名称
     * @queryParam product_name_en required 商品英文名称
     * @queryParam thumbnail 产品缩略图
     * @queryParam slug 导航名称:即url
     * @queryParam short_description 简短介绍
     * @queryParam short_description_en 英文简短介绍
     * @queryParam price required 价格
     * @queryParam sale_price required 优惠价
     * @queryParam stock required 库存量
     * @queryParam seo_title 网页title
     * @queryParam seo_keyword 网页关键字
     * @queryParam seo_description 网页描述
     * @queryParam benefit 产品功效
     * @queryParam benefit_en 英文产品功效
     * @queryParam tech_description 科技介绍
     * @queryParam tech_description_en 英文科技介绍
     * @queryParam description 产品细节
     * @queryParam description_en 英文产品细节
     * @queryParam usage 使用方法
     * @queryParam usage_en 英文使用方法
     * @queryParam main_image required 页面主图
     * @queryParam main_image_2 required 页面主图2:用于较低分辨率设备
     * @queryParam benefit_image 功效背景图
     * @queryParam product_video 产品相关视频
     * @queryParam status required 商品状态：1新品，2畅销，3促销，-1下架
     * @queryParam rating required 平均评分
     * @queryParam sold_count required 销量
     * @queryParam review_count required 评价数量
     * @param ProductRequest $productRequest
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ProductRequest $productRequest)
    {
        $result = $this->productService->store(array_filter($productRequest->all()));
        return $result ? response()->json(ResponseData::requestSuccess($result)) : response()->json(ResponseData::requestFails());

    }

    /**
     * Edit product
     * 编辑商品
     * @queryParam product_category_id 所属产品分类id
     * @queryParam product_name 商品名称
     * @queryParam product_name_en 商品英文名称
     * @queryParam thumbnail 产品缩略图
     * @queryParam slug 导航名称:即url
     * @queryParam short_description 简短介绍
     * @queryParam short_description_en 英文简短介绍
     * @queryParam price 价格
     * @queryParam sale_price 优惠价
     * @queryParam stock 库存量
     * @queryParam seo_title 网页title
     * @queryParam seo_keyword 网页关键字
     * @queryParam seo_description 网页描述
     * @queryParam benefit 产品功效
     * @queryParam benefit_en 英文产品功效
     * @queryParam tech_description 科技介绍
     * @queryParam tech_description_en 英文科技介绍
     * @queryParam description 产品细节
     * @queryParam description_en 英文产品细节
     * @queryParam usage 使用方法
     * @queryParam usage_en 英文使用方法
     * @queryParam main_image 页面主图
     * @queryParam main_image_2 页面主图2:用于较低分辨率设备
     * @queryParam benefit_image 功效背景图
     * @queryParam product_video 产品相关视频
     * @queryParam status required 商品状态：1新品，2畅销，3促销，-1下架
     * @queryParam rating required 平均评分
     * @queryParam sold_count 销量
     * @queryParam review_count 评价数量
     * @param $productId
     * @param ProductRequest $productRequest
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($productId, ProductRequest $productRequest)
    {
        $result = $this->productService->edit(array_filter($productRequest->all()), $productId);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails($productRequest->all()));
    }

    /**
     * Off the Product
     * 下架产品
     * @param $productId
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($productId)
    {
        $result = $this->productService->destroy($productId);
        return $result ? response()->json(ResponseData::requestSuccess()) : response()->json(ResponseData::requestFails());
    }
}
