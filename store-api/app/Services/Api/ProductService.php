<?php
namespace App\Services\Api;

use App\Enums\ProductStatusCode;
use App\Models\Product;
use App\Models\ProductCategory;
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

    // 获取商品类别
    public function categoryQueryList(){
        try{
            return DB::table('product_categories as p1')
                ->leftJoin('product_categories as p2', 'p1.parent_id', '=', 'p2.id')
                ->select('p1.*', 'p2.title as parent_title')
                ->orderBy('id', 'asc')
                ->get();
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }

    // 所有商品列表
    public function productQueryList($queries){
        try{
            return $this->product->paginate($queries['page_limit']);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }

    // 获取对应类别下的产品
    public function getCategoryProduct($categoryId, $queries)
    {
        try{
            return $this->product->where('product_category_id', $categoryId)->paginate($queries['page_limit']);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }

    // 获取新品
    public function newProduct($queries){
        try{
            Log:info($queries);
            return $this->product->where('status', ProductStatusCode::StatusNew)->paginate($queries['page_limit']);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }
}
