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
     * 获取产品分类概述(目前分为'套装系列'和'护肤系列'一级分类,只需取其下列二级分类的name,slug,thumbnail,title,title_en,sub_title)
     * @urlParam name required 分类名称
     * @param $name string 分类名称
     * @return Application|ResponseFactory|Response
     */
    public function getOverview($name)
    {
        $result = $this->service->getOverview($name);
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

    /**
     * Get explore product category list
     * 随机获取同分类下三条数据
     * @urlParam category_slug required 分类slug
     * @param $category_slug
     * @return Application|ResponseFactory|Response
     */
    public function getListByExplore($category_slug)
    {
        $results = $this->service->getListByExplore($category_slug);
        return response(ResponseData::requestSuccess($results));
    }

}
