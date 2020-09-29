<?php

namespace App\Services\Api;

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
    public function getListByCategorySlug(string $category_slug)
    {
        //return $this->product->with('product_category')->paginate($requestData['page_limit']);
        return $this->productCategory->with(['products' =>function($query){
            $query->select('product_category_id','product_name','product_name_en','thumbnail','slug','short_description','price','sale_price');
        }])->whereSlug($category_slug)->get()->makeHidden(['thumbnail','describe','describe_en','describe_img','created_at','updated_at']);
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
        return $this->product->whereStatus(1)->inRandomOrder()->take(4)->get([
            'product_category_id','product_name','product_name_en','thumbnail','slug','short_description','price','sale_price'
        ]);
    }

    // 根据商品ID列表获取商品详情列表
//    public function productQuery($queries)
//    {
//        return $this->product->whereIn('id', $queries['id_list'])->get();
//    }
}
