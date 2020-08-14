<?php

namespace App\Services\Admin;

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
        $requestData = page_limit($queries);
        return $this->product->with(['productCategory' => function ($query) {
            $query->select('id', 'title');
        }])->paginate($requestData['page_limit']);
    }

    public function store($queries)
    {
        // 添加商品
        $requestData = $this->saveOss($queries);
        try {
            $products = $this->product->create($requestData);
        } catch (\Exception $e) {
            Log::error('添加商品失败', ['messsage' => $e->getMessage()]);
            return false;
        }
        return $products;
    }

    public function edit($queries, $productId)
    {
        // 编辑商品
        $requestData = $this->saveOss($queries);
        try {
            $products = $this->product->whereId($productId)->update($requestData);
        } catch (\Exception $e) {
            Log::error('编辑商品失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $products;
    }

    public function destroy($productId)
    {
        // 下架商品
        try {
            $products = $this->product->whereId($productId)->update(['status' => ProductStatusCode::StatusOff]);
        } catch (\Exception $e) {
            Log::error('下架商品失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $products;
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
