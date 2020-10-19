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
        if (is_object($queries['banner'])) {
            try {
                $ossRes = OssHandler::save($queries['banner'], AliyunOssDir::ProductCategoryStory);  // 图片存储到OSS
                $ossRes ? $queries['banner'] = $ossRes['data'] : null;
            } catch (\Exception $e) {
                Log::error('分类故事banner操作失败', ['message' => $e->getMessage()]);
                return false;
            }
        }
        try {
            $categoryStories = $this->categoryStory->create($queries);
        } catch (\Exception $e) {
            Log::error('分类故事新增失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $categoryStories;

    }

    public function edit($queries, $categoriesStoriesId)
    {
        // 编辑分类故事
        if (is_object($queries['banner'])) {
            try {
                $ossRes = OssHandler::save($queries['banner'], AliyunOssDir::ProductCategoryStory);  // 图片存储到OSS
                $ossRes ? $queries['banner'] = $ossRes['data'] : null;
            } catch (\Exception $e) {
                Log::error('分类故事banner操作失败',['message'=>$e->getMessage()]);
                return false;
            }
        }
        try {
            $res = $this->categoryStory->where('id', $categoriesStoriesId)->update($queries);
        } catch (\Exception $e) {
            Log::error('分类故事编辑失败',['message'=>$e->getMessage()]);
            return false;
        }
        return $res;

    }

    public function destroy($categoriesStoriesId)
    {
        // 删除分类故事
        try {
            $categoryStories = $this->categoryStory->whereId( $categoriesStoriesId)->delete();
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
