<?php

namespace App\Services\Api;

use App\Enums\AliyunOssDir;
use App\Handlers\OssHandler;
use App\Models\ProductCategory;
use App\Services\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProductCategoryService extends Service
{
    private $productCategory;

    public function __construct(ProductCategory $productCategory)
    {
        $this->productCategory = $productCategory;
    }


    public function queryList($queries)
    {
        // 查询所有商品分类
        return $this->productCategory->paginate($queries['page_limit']);
    }

    // 添加商品分类
    public function store($queries)
    {
        $queries = $this->saveOss($queries);
        try {
            return $this->productCategory->create($queries);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
    }

    // 编辑产品分类
    public function edit($queries, $productCategoriesId)
    {

        $queries = $this->saveOss($queries);

        try {
            return $this->productCategory->find($productCategoriesId)->update($queries);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
    }

    public function destroy($productCategoriesId)
    {
        // 删除分类
        try {

            return $this->productCategory->where('id', $productCategoriesId)->delete();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
    }

    // 保存文件到OSS中，返回url
    public static function saveOss($array)
    {
        $filtered = Arr::where($array, function ($value, $key) {
            return Str::contains($key, ['banner', 'img']) && $key;
        });
        foreach ($filtered as $key => $value) {
            // 图片存储到OSS，本地保存OSS地址
            try {
                $ossRes = OssHandler::save($array[$key], AliyunOssDir::ProductCategory);  // 图片存储到OSS
                $ossRes ? $array[$key] = $ossRes['data'] : null;
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                $array[$key] = null;
            }
        }
        return $array;
    }
}
