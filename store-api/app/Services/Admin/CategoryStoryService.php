<?php

namespace App\Services\Admin;

use App\Enums\AliyunOssDir;
use App\Handlers\OssHandler;
use App\Models\ProductCategoryStory;
use App\Services\Service;
use Illuminate\Support\Facades\Log;

class CategoryStoryService extends Service
{
    private $categoryStory;

    public function __construct(ProductCategoryStory $categoryStory)
    {
        $this->categoryStory = $categoryStory;
    }

    public function queryList($queries)
    {
        $requestData = page_limit($queries);
        // 查询分类故事列表
        return $this->categoryStory->with(['productCategory' => function($query){
            $query->select('id', 'title');
        }])->latest()->paginate($requestData['page_limit']);
    }

    public function store($queries)
    {
        // 新增分类故事列表
        $requestData = saveOss($queries, ['banner'], AliyunOssDir::ProductCategoryStory);
        try {
            $categoryStories = $this->categoryStory->create($requestData['params']);
        } catch (\Exception $e) {
            Log::error('分类故事新增失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $categoryStories;

    }

    public function edit($queries, $categoriesStoriesId)
    {
        // 编辑分类故事
        $requestData = saveOss($queries, ['banner'], AliyunOssDir::ProductCategoryStory);
        try {
            $categoryStory = $this->categoryStory->where('id', $categoriesStoriesId);
            // 获取更新资源字段的旧值，从Aliyun oss中删除
            foreach ($requestData['old_oss'] as $key) {
                OssHandler::delete($categoryStory->first()->$key);
            }
            $categoryStory->update($requestData['params']);
        } catch (\Exception $e) {
            Log::error('分类故事编辑失败',['message'=>$e->getMessage()]);
            return false;
        }
        return true;

    }

    public function destroy($categoriesStoriesId)
    {
        // 删除分类故事
        try {
            $categoryStories = $this->categoryStory->whereId( $categoriesStoriesId)->first();
            OssHandler::delete($categoryStories['banner']);
            $categoryStories->delete();
        } catch (\Exception $e) {
            Log::error('分类故事删除失败',['message'=>$e->getMessage()]);
            return false;
        }
        return $categoryStories;

    }

    public function storyDetail($categoriesStoriesId)
    {
        return $this->categoryStory->with(['productCategory' => function($query){
            $query->select('id', 'title');
        }])->where('id',$categoriesStoriesId)->first();
    }

}
