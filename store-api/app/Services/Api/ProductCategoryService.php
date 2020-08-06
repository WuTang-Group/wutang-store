<?php

namespace App\Services\Api;

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


    public function store($queries)
    {
        // 添加商品分类
        $filtered = Arr::where($queries, function ($value, $key) {
            return Str::contains($key, ['banner', 'img']) && $key;
        });

        foreach ($filtered as $key => $value) {
            // 图片存储到OSS，本地保存OSS地址
            try {
                $ossRes = OssHandler::save($queries[$key], 'ProductCategories');  // 图片存储到OSS
                $ossRes ? $queries[$key] = $ossRes['data'] : null;
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                $queries[$key] = null;
            }
        }

        try {
            return $this->productCategory->create($queries);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
    }

    public function edit($queries, $productCategoriesId)
    {
        // 编辑产品分类
        $filtered = Arr::where($queries, function ($value, $key) {
            return Str::contains($key, ['banner', 'img']) && $key;
        });

        foreach ($filtered as $key => $value) {
            // 图片存储到OSS，本地保存OSS地址
            try {
                $ossRes = OssHandler::save($queries[$key], 'ProductCategories');  // 图片存储到OSS
                $ossRes ? $queries[$key] = $ossRes['data'] : null;
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                $queries[$key] = null;
            }
        }

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
}
