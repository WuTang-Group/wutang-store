<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Api\ProductService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group [API] Product
 * 产品管理
 * status说明:(1新品,2畅销,3促销,-1下架)
 * @package App\Http\Controllers\Api
 */
class ProductController extends Controller
{
    private $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    /**
     * Get product list
     * 获取商品列表
     * @QueryParam page 页码
     * @QueryParam page_limit 每页显示的数量
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function getList(Request $request)
    {
        $results = $this->service->getList($request);
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Get the product detail
     * 获取商品详情信息
     * @urlParam slug required 商品slug
     * @param $product_slug
     * @return Application|ResponseFactory|Response
     */
    public function getDetail($product_slug)
    {
        $results = $this->service->getDetail($product_slug);
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Get product list by slug and type
     * 通过导航类别和slug获取对应类别下的产品列表
     * @urlParam navbar_category_type required 导航产品类型(可选值为:product或product_category_skin_care(参照Navbar接口返回数据)) Example:product_category_skin_care
     * @urlParam slug required Navbar返回的slug值
     * @param $navbar_category_type
     * @param $slug
     * @return Application|ResponseFactory|Response
     */
    public function getListBySlug($navbar_category_type,$slug)
    {
        $results = $this->service->getListBySlug($navbar_category_type,$slug);
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Get random innovate product list
     * 随机获取四条创新产品
     * @return Application|ResponseFactory|Response
     */
    public function getListByInnovate()
    {
        $result = $this->service->getListByInnovate();
        return response(ResponseData::requestSuccess($result));
    }


    /**
     * Get explore product list
     * 随机获取产品三条数据
     * @return Application|ResponseFactory|Response
     */
    public function getListByExplore()
    {
        $results = $this->service->getListByExplore();
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Get product list of status
     * 根据产品状态获取产品列表
     * @urlParam status required 商品状态(1新品,2畅销,3促销,-1下架)
     * @queryParam page 页码
     * @queryParam page_limit 每页数量
     * @param $status
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function getListByStatus($status, Request $request)
    {
        $results = $this->service->getListByStatus($status, $request);
        return response(ResponseData::requestSuccess($results));
    }

}
