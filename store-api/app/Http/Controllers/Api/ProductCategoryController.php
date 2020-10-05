<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Api\ProductCategoryService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

/**
 * @group [API] Product Category
 * 产品分类
 * @package App\Http\Controllers\Api
 */
class ProductCategoryController extends Controller
{
    private $service;

    public function __construct(ProductCategoryService $service)
    {
        $this->service = $service;
    }

    /**
     * Get product category list
     * 获取产品分类列表
     * @return Application|ResponseFactory|Response
     */
    public function getList()
    {
        $results = $this->service->getList();
        return response(ResponseData::requestSuccess($results));
    }

    /**
     * Get product category over view
     * 获取分类概述(目前主要分类为'护肤系列';产品类为'产品系列')
     * @urlParam navbar_category_type required 通过Navbar接口获取到的type值 Example:product
     * @param $navbar_category_type
     * @return Application|ResponseFactory|Response
     */
    public function getOverview($navbar_category_type)
    {
        $result = $this->service->getOverview($navbar_category_type);
        return response(ResponseData::requestSuccess($result));
    }

    /**
     * Get product category story
     * 获取产品分类故事
     * @urlParam category_slug required 分类slug
     * @param $category_slug
     * @return Application|ResponseFactory|Response
     */
    public function getStory($category_slug)
    {
        $results = $this->service->getStory($category_slug);
        return response(ResponseData::requestSuccess($results));
    }

}
