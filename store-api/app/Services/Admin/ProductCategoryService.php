<?php

namespace App\Services\Admin;

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
        $requestData = page_limit($queries->all());
        return $this->productCategory->paginate($requestData['page_limit']);
    }

    // 添加商品分类
    public function store($queries)
    {
        $requestData = $this->saveOss($queries);
        try {
            $productCategories = $this->productCategory->create($requestData);
        } catch (\Exception $e) {
            Log::error('添加商品分类失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $productCategories;
    }

    // 编辑产品分类
    public function edit($queries, $productCategoriesId)
    {

        $requestData = $this->saveOss($queries);

        try {
            $productCategories = $this->productCategory->find($productCategoriesId)->update($requestData);
        } catch (\Exception $e) {
            Log::error('编辑产品分类失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $productCategories;
    }

    public function destroy($productCategoriesId)
    {
        // 删除分类
        try {
            $productCategories = $this->productCategory->where('id', $productCategoriesId)->delete();
        } catch (\Exception $e) {
            Log::error('删除产品分类失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $productCategories;
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
                Log::error('OSS文件上传失败', ['message' => $e->getMessage()]);
                $array[$key] = null;
            }
        }
        return $array;
    }
}
