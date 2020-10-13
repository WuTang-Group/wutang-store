<?php

namespace App\Services\Api;

use App\Enums\NavbarCategoryType;
use App\Enums\ProductCategoryType;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Services\Service;
use Illuminate\Support\Facades\Log;

class ProductCategoryService extends Service
{
    private $productCategory,$product;

    public function __construct(Product $product,ProductCategory $productCategory)
    {
        $this->productCategory = $productCategory;
        $this->product = $product;
    }


    // 获取分类列表
    public function getList()
    {
        return $this->productCategory->has('children')->with(['children'])->get();
    }

    // 获取导航产品分类概述
    public function getOverview(string $navbar_category_type)
    {
        switch ($navbar_category_type)
        {
            case NavbarCategoryType::Product:
            {
                return $this->product->whereParentId(0)->whereLevel(1)->get(['id','slug','thumbnail','product_name','product_name_en']);
            }
            case NavbarCategoryType::ProductCategorySkinCare:
            {
                return $this->productCategory->whereType(ProductCategoryType::SkinCare)->get(['id', 'slug','name','thumbnail','title','sub_title','title_en']);
            }
        }
//        return $this->productCategory->whereSlug($category_type)->with(['children' => function($query){
//            $query->select('parent_id','name','slug','thumbnail','title','title_en');
//        }])->first()->makeHidden(['thumbnail','banner','describe','describe_en','describe_img','created_at','updated_at']);
    }

    // 获取分类故事
    public function getStory(string $slug)
    {
        return $this->productCategory->with(['productCategoryStories'])->whereSlug($slug)->get();
    }

    // 随机获取同分类下3条数据(继续探索)
    public function getListByExplore(string $slug, int $length = 3)
    {
        try {
            $product_category = $this->productCategory->whereSlug($slug)->firstOrFail();
            // 级别为1时,获取子分类下数据
            if ($product_category->level == 1) {
                $levelProductCategory  = $this->productCategory->whereSlug($product_category->slug)->whereLevel(1)->with(['children' => function($query){
                    $query->select('parent_id','name','slug','thumbnail','title','title_en','sub_title');
                }])->first()->children;
            }
            // 级别为2时(无子分类)
            if ($product_category->level == 2) {
                $levelProductCategory = $product_category->whereLevel(2)->whereParentId($product_category->parent_id)->get(['id','name','slug','thumbnail','title','title_en','sub_title']);
            }
            if (count($levelProductCategory) >= $length) {
                return $levelProductCategory->random($length);
            }
            return $levelProductCategory->random(count($levelProductCategory));
        } catch (\Exception $e) {
            return [];
        }
    }
}
