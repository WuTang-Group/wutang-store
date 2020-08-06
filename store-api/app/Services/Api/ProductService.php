<?php

namespace App\Services\Api;

use App\Enums\AliyunOssDir;
use App\Enums\ProductStatusCode;
use App\Handlers\OssHandler;
use App\Models\Product;
use App\Services\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

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
        try {
            return $this->product->paginate($queries['page_limit']);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
    }

    public function store($queries)
    {
        // 添加商品
        $queries = $this->saveOss($queries);
        try {
            return $this->product->create($queries);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
    }

    public function edit($queries, $productId)
    {
        // 编辑商品
        $queries = $this->saveOss($queries);
        try {
            return $this->product->where('id', $productId)->update($queries);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
    }

    public function destroy($productId)
    {
        // 下架商品
        try{
            $this->product->where('id', $productId)->update(['status'=>ProductStatusCode::StatusOff]);
            return true;
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }


    public static function saveOss($array)
    {
        // 保存文件到OSS中，返回url
        $filtered = Arr::where($array, function ($value, $key) {
            return Str::contains($key, ['thumbnail', 'main_image',
                    'main_image_2', 'benefit_image', 'product_video']) && $key;
        });
        foreach ($filtered as $key => $value) {
            // 图片存储到OSS，本地保存OSS地址
            try {
                $ossRes = OssHandler::save($array[$key], AliyunOssDir::Product);  // 图片存储到OSS
                $ossRes ? $array[$key] = $ossRes['data'] : null;
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                $array[$key] = null;
            }
        }
        return $array;
    }
}
