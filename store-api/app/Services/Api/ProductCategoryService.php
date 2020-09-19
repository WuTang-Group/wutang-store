<?php

namespace App\Services\Api;

use App\Models\ProductCategory;
use App\Services\Service;

class ProductCategoryService extends Service
{
    private $productCategory;

    public function __construct(ProductCategory $productCategory)
    {
        $this->productCategory = $productCategory;
    }


    // 获取分类列表
    public function getList()
    {
        return $this->productCategory->has('children')->with(['children'])->get();
    }

    // 获取产品分类概述
    public function getOverview(string $categpory_slug)
    {
        return $this->productCategory->whereSlug($categpory_slug)->with('children')->first();
    }

    // 获取分类故事
    public function getStory(string $slug)
    {
        return $this->productCategory->with(['productCategoryStories'])->whereSlug($slug)->get();
    }

    // 随机获取同分类下3条数据
    public function getListByExplore(string $slug, int $length = 3)
    {
        $product_category = $this->productCategory->whereSlug($slug)->with(['children'])->first()->children;
        if (count($product_category) >= $length) {
            return $product_category->random($length);
        }
        return $product_category->random(count($product_category));
    }
}
