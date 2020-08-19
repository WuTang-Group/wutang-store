<?php

namespace App\Services\Api;

use App\Enums\ProductStatusCode;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCategoryStory;
use App\Services\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductService extends Service
{
    private $product, $productCategory;

    public function __construct(Product $product, ProductCategory $productCategory)
    {
        $this->product = $product;
        $this->productCategory = $productCategory;
    }

    // 获取指定slug的产品详情
    public function index($queries)
    {
        return $this->product->with('productCategory')->whereSlug($queries)->first();
    }

    // 获取商品类别
    public function categoryQueryList()
    {
        return DB::table('product_categories as p1')
            ->leftJoin('product_categories as p2', 'p1.parent_id', '=', 'p2.id')
            ->select('p1.*', 'p2.title as parent_title')
            ->orderBy('id', 'asc')
            ->get();
    }

    // 所有商品列表
    public function productQueryList($queries)
    {
        $requestData = page_limit($queries->all());
        return $this->product->with(['productCategory'])->paginate($requestData['page_limit']);
    }

    // 获取对应类别下的产品
    public function getCategoryProduct($category_slug, $queries)
    {
        $requestData = page_limit($queries->all());
        //return $this->product->with('product_category')->paginate($requestData['page_limit']);
        return $this->productCategory->with('parent', 'children', 'products')->whereSlug($category_slug)->get();
    }

    // 获取新品
    public function newProduct($queries)
    {
        $requestData = page_limit($queries->all());
        return $this->product->with(['productCategory'])->whereStatus(ProductStatusCode::StatusNew)->paginate($requestData['page_limit']);
    }

    // 获取产品分类故事
    public function categoryStory($queries)
    {
        return ProductCategory::with('parent', 'productCategoryStories')->whereSlug($queries)->get();
    }

    // 根据商品ID列表获取商品详情列表
    public function productQuery($queries)
    {
        return $this->product->whereIn('id', $queries['id_list'])->get();
    }

    // 心愿单列表
    public function favorList($params)
    {
        return $params->user()->favoriteProducts()->get();
    }

    // 加入心愿单
    public function favor($productId,$params)
    {
        $user = $params->user();
        //attach将用户与商品关联
        // 判断用户若与商品并没关联则进行关联
        if ($user->favoriteProducts()->find($productId)) {
            return [];
        }

        $user->favoriteProducts()->attach($productId);

        return [];

    }

    // 移除心愿单
    public function disfavor($productId,$params)
    {
        $user = $params->user();
        $user->favoriteProducts()->detach($productId);  // detach取消多对多关联
        return [];
    }
}
