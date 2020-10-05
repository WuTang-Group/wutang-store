<?php

namespace App\Services\Api;

use App\Enums\NavbarCategoryType;
use App\Enums\ProductCategoryType;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Services\Service;

class NavbarService extends Service
{
    private $productCategory, $product;

    public function __construct(Product $product, ProductCategory $productCategory)
    {
        $this->productCategory = $productCategory;
        $this->product = $product;
    }

    // 获取导航产品分类标题
    public function getProductCategoryTitleList()
    {
        $products = [
            'name' => '产品系列',
            'type' => NavbarCategoryType::Product,
            'data' => $this->getProductList(0,1)  // 获取套盒系列
        ];
        $productCategories = [
            'name' => '护肤系列',
            'type' => NavbarCategoryType::ProductCategorySkinCare,
            'data' => $this->getProductCategoryList(ProductCategoryType::SkinCare)
        ];
        return [$products, $productCategories];
//        return $this->productCategory->whereParentId(0)->with(['children' => function($query){
//            $query->select('parent_id','name','slug');
//        }])->get()->makeHidden(['thumbnail','banner','title','title_en','sub_title','describe','describe_en','describe_img','created_at','updated_at']);
    }

    // 获取产品分类列表
    private function getProductCategoryList(int $type)
    {
        return $this->productCategory->whereType($type)->get(['id', 'name', 'slug', 'parent_id', 'level']);
    }

    // 获取产品列表
    private function getProductList(int $parentId,int $level)
    {
        return $this->product->whereParentId($parentId)->whereLevel($level)->get(['id', 'slug', 'product_name', 'parent_id', 'level']);
    }
}
