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
        return $this->productCategory->with(['parent'=> function($query){
            return $query->select('id', 'name');
        }])->latest()->paginate($requestData['page_limit']);
    }

    // 添加商品分类
    public function store($queries)
    {
        $requestData = saveOss($queries, ['thumbnail', 'banner', 'describe_img'], AliyunOssDir::ProductCategoryStory);
        if(Arr::has($queries, 'parent_id'))
        {
            if($this->productCategory->find($queries['parent_id'])->doesntExist())
            {
                return false;
            }
        }
        try {
            $productCategories = $this->productCategory->create($requestData['params']);
        } catch (\Exception $e) {
            Log::error('添加商品分类失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $productCategories;
    }

    // 编辑产品分类
    public function edit($queries, $category_slug)
    {
        $requestData = saveOss($queries, ['thumbnail', 'banner', 'describe_img'], AliyunOssDir::ProductCategory);
        if(Arr::has($queries, 'parent_id'))
        {
            if($this->productCategory->where(['parent_id' => $queries['parent_id']])->doesntExist())
            {
                return false;
            }
        }
        try {
            $productCategories = $this->productCategory->where('slug', $category_slug);
            // 获取更新资源字段的旧值，从Aliyun oss中删除
            foreach ($requestData['old_oss'] as $key) {
                OssHandler::delete($productCategories->first()->$key);
            }
            $productCategories->update($requestData['params']);
        } catch (\Exception $e) {
            Log::error('编辑产品分类失败', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

    public function destroy($category_slug)
    {
        // 删除分类
        $categories_imgs = ['thumbnail', 'banner', 'describe_img'];
        try {
            $productCategories = $this->productCategory->where('slug', $category_slug)->first();
            foreach ($categories_imgs as $value) {
                OssHandler::delete($productCategories[$value]);
            }
            $productCategories->delete;
        } catch (\Exception $e) {
            Log::error('删除产品分类失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $productCategories;
    }

    // 保存文件到OSS中，返回url
//    public static function saveOss($array)
//    {
//        $filtered = Arr::where($array, function ($value, $key) {
//            return Str::contains($key, ['thumbnail', 'banner', 'describe_img']) && $key;
//        });
//        foreach ($filtered as $key => $value) {
//            // 图片存储到OSS，本地保存OSS地址
//            if (is_object($array[$key])){
//                try {
//                    $ossRes = OssHandler::save($array[$key], AliyunOssDir::ProductCategory);  // 图片存储到OSS
//                    $ossRes ? $array[$key] = $ossRes['data'] : null;
//                } catch (\Exception $e) {
//                    Log::error('OSS文件上传失败', ['message' => $e->getMessage()]);
//                    $array[$key] = null;
//                }
//            }
//        }
//        return $array;
//    }

    public function categoryQuery($category_slug)
    {
        return $this->productCategory->with(['productCategoryStories', 'parent' => function($query){
            $query->select('id', 'name');
        }])->where('slug', $category_slug)->first();
    }
}
