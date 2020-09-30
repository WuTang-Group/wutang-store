<?php

namespace App\Services\Api;

use App\Models\ProductCategory;
use App\Services\Service;
use Illuminate\Support\Facades\Log;

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
        return $this->productCategory->whereSlug($categpory_slug)->with(['children' => function($query){
            $query->select('parent_id','name','slug','thumbnail','title','title_en');
        }])->first()->makeHidden(['thumbnail','banner','describe','describe_en','describe_img','created_at','updated_at']);
    }

    // 获取分类故事
    public function getStory(string $slug)
    {
        return $this->productCategory->with(['productCategoryStories'])->whereSlug($slug)->get();
    }

    // 随机获取同分类下3条数据
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
