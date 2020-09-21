<?php
namespace App\Services\Api;

use App\Models\ProductCategory;
use App\Services\Service;

class NavbarService extends Service
{
    private $productCategory;

    public function __construct(ProductCategory $productCategory)
    {
        $this->productCategory = $productCategory;
    }

    // 获取导航产品分类标题
    public function getProductCategoryTitleList()
    {
        return $this->productCategory->whereParentId(0)->get(['name','slug']);
    }
}
