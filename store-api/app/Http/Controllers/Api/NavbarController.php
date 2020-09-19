<?php

namespace App\Http\Controllers\Api;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Services\Api\NavbarService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group [API-Navbar] Navbar
 * 导航栏部分
 * @package App\Http\Controllers\Api
 */
class NavbarController extends Controller
{
    private $service;

    public function __construct(NavbarService $service)
    {
        $this->service = $service;
    }

    /**
     * Get navbar product category name&slug
     * 获取顶级分类名称和slug
     * @return Application|ResponseFactory|Response
     */
    public function getProductCategoryTitleList()
    {
        $productCategories = $this->service->getProductCategoryTitleList();
        return response(ResponseData::requestSuccess($productCategories));
    }

}
