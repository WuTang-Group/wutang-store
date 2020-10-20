<?php

namespace App\Services\Admin;

use App\Enums\AliyunOssDir;
use App\Enums\ProductStatusCode;
use App\Handlers\OssHandler;
use App\Models\Product;
use App\Services\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class ProductService extends Service
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function queryList($queries)
    {
        // 商品列表
        $requestData = page_limit($queries);
        return $this->product->when($requestData['product_category'] ?? NULL, function ($query, $product_category) {
            return $query->whereHas('productCategory', function ($query) use ($product_category) {
                $query->whereName($product_category);
            });
        })->
        when($requestData['parent_product'] ?? NULL, function ($query, $parent_product) {
            return $query->whereHas('parent', function ($query) use ($parent_product) {
                $query->where('product_name', $parent_product);
            });
        })->
        when($requestData['created_at'] ?? NULL, function ($query, $created_at) {
            return $query->whereBetween('created_at', $created_at);
        })->
        where(Arr::only(array_filter($requestData), ['product_name', 'product_name_en']))->
        with(['productCategory' => function ($query) {
            $query->select('id', 'name');
        }])->
        with(['parent' => function ($query) {
            $query->select('id', 'product_name');
        }])->
        latest()->paginate($requestData['page_limit']);
    }

    // 获取产品简要信息
    public function basicInfoList()
    {
        return $this->product->select('id', 'product_name')->get();
    }

    public function store($queries)
    {
        // 添加商品
        $requestData = saveOss($queries, ['thumbnail', 'main_image',
            'main_image_2', 'benefit_image', 'product_video'], AliyunOssDir::Product);
        try {
            $products = $this->product->create($requestData['params']);
        } catch (\Exception $e) {
            Log::error('添加商品失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $products;
    }

    public function edit($queries, $product_slug)
    {
        $requestData = saveOss($queries, ['thumbnail', 'main_image',
            'main_image_2', 'benefit_image', 'product_video'], AliyunOssDir::Product);
        try {
            $products = $this->product->whereSlug($product_slug);
            // 获取更新资源字段的旧值，从Aliyun oss中删除
            foreach ($requestData['old_oss'] as $key) {
                OssHandler::delete($products->first()->$key);
            }
            $products->update($requestData['params']);
        } catch (\Exception $e) {
            Log::error('编辑商品失败', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

    public function destroy($product_slug)
    {
        // 下架商品
        try {
            $products = $this->product->whereSlug($product_slug)->update(['status' => ProductStatusCode::StatusOff]);
        } catch (\Exception $e) {
            Log::error('下架商品失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $products;
    }

    public function deleteProduct($product_slug)
    {
        $products_imgs = ['thumbnail', 'main_image',
            'main_image_2', 'benefit_image', 'product_video'];
        // 删除商品
        try {
            $products = $this->product->whereSlug($product_slug)->first();
            foreach ($products_imgs as $value) {
                OssHandler::delete($products[$value]);
            }
            $products->delete();
        } catch (\Exception $e) {
            Log::error('删除商品失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $products;
    }


//    public static function saveOss($array)
//    {
//        // 保存文件到OSS中，返回url
//        $filtered = Arr::where($array, function ($value, $key) {
//            return Str::contains($key, ['thumbnail', 'main_image',
//                    'main_image_2', 'benefit_image', 'product_video']) && $key;
//        });
//        foreach ($filtered as $key => $value) {
//            // 图片存储到OSS，本地保存OSS地址
//            if (is_object($array[$key])) {
//                try {
//                    $ossRes = OssHandler::save($array[$key], AliyunOssDir::Product);  // 图片存储到OSS
//                    $ossRes ? $array[$key] = $ossRes['data'] : null;
//                } catch (\Exception $e) {
//                    Log::error($e->getMessage());
//                    $array[$key] = null;
//                }
//            }
//        }
//        return $array;
//    }

    public function productQuery($product_slug)
    {
        return $this->product->with('productCategory')->
        with(['parent' => function ($query) {
            $query->select('id', 'product_name');
        }])->where('slug', $product_slug)->first();
    }

    public function parentProducts()
    {
        return $this->product->where(['parent_id' => 0, 'level' => 1])->select('id', 'product_name')->get();
    }
}
