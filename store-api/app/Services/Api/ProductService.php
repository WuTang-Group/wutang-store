<?php

namespace App\Services\Api;

use App\Enums\NavbarCategoryType;
use App\Enums\ProductCategoryType;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Services\Service;

class ProductService extends Service
{
    private $product, $productCategory;

    public function __construct(Product $product, ProductCategory $productCategory)
    {
        $this->product = $product;
        $this->productCategory = $productCategory;
    }

    // 获取指定slug的产品详情
    public function getDetail(string $param)
    {
        return $this->product->with('productCategory')->whereSlug($param)->first();
    }

    // 所有商品列表
    public function getList(object $params)
    {
        $requestData = page_limit($params->all());
        return $this->product->with(['productCategory'])->paginate($requestData['page_limit']);
    }

    // 获取对应类别下的产品
    public function getListBySlug(string $navbar_category_type, string $slug)
    {
        switch ($navbar_category_type) {
            case NavbarCategoryType::Product:
            {
                return $this->product->whereParentId(0)->whereLevel(1)->whereSlug($slug)->with(['children' => function ($query) {
                    $query->select('parent_id', 'slug', 'product_name', 'product_name_en', 'thumbnail', 'short_description', 'price', 'sale_price', 'benefit', 'benefit_image', 'level', 'product_video', 'main_image');
                }])->get()->makeHidden([
                    'short_description_en', 'seo_title', 'seo_keyword', 'seo_description', 'benefit_en', 'tech_description',
                    'tech_description_en', 'description', 'description_en', 'usage', 'usage_en', 'main_image_2',
                    'status', 'rating', 'sold_count', 'review_count', 'created_at', 'updated_at'
                ]);
            }
            case NavbarCategoryType::ProductCategorySkinCare:
            {
                return $this->productCategory->whereSlug($slug)->with(['products' => function ($query) {
                    $query->select('product_category_id', 'slug', 'product_name', 'product_name_en', 'thumbnail', 'short_description', 'price', 'sale_price');
                }])->get()->makeHidden(['thumbnail', 'describe_en', 'describe_img', 'parent_id', 'type', 'created_at', 'updated_at']);
            }
        }
        //return $this->product->with('product_category')->paginate($requestData['page_limit']);
//        return $this->productCategory->with(['products' =>function($query){
//            $query->select('product_category_id','product_name','product_name_en','thumbnail','slug','short_description','price','sale_price');
//        }])->whereSlug($category_slug)->get()->makeHidden(['thumbnail','describe','describe_en','describe_img','created_at','updated_at']);
    }

    // 随机获取不同状态的产品
    public function getListByStatus(int $status, object $params)
    {
        $requestData = page_limit($params->all());
        // 根据不同状态获取不同状态下的产品随机输出
        return $this->product->with(['productCategory'])->type($status)->inRandomOrder()->paginate($requestData['page_limit']);
    }

    // 随机获取4条创新产品
    public function getListByInnovate()
    {
        return $this->product->whereStatus(1)->whereLevel(2)->inRandomOrder()->take(4)->get([
            'product_category_id', 'product_name', 'product_name_en', 'thumbnail', 'slug', 'short_description', 'price', 'sale_price'
        ]);
    }

    // 随机获取三条继续探索产品
    public function getListByExplore()
    {
        return $this->product->whereLevel(2)->inRandomOrder()->take(3)->get(['id', 'thumbnail', 'slug', 'product_name', 'product_name_en']);
    }

    // 根据商品ID列表获取商品详情列表
//    public function productQuery($queries)
//    {
//        return $this->product->whereIn('id', $queries['id_list'])->get();
//    }
}
