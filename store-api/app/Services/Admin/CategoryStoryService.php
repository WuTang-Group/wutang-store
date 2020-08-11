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

    public function queryList($queries){
        $queries = page_limit($queries);
        // 查询分类故事列表
        return $this->categoryStory->paginate($queries['page_limit']);
    }

    public function store($queries){
        // 新增分类故事列表
        if(isset($queries['banner'])){
            try {
                $ossRes = OssHandler::save($queries['banner'], AliyunOssDir::ProductCategoryStory);  // 图片存储到OSS
                $ossRes ? $queries['banner'] = $ossRes['data'] : null;
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                $queries['banner'] = null;
            }
        }
        try{
            return $this->categoryStory->create($queries);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return false;
        }

    }

    public function edit($queries, $categoryStoriesRequest){
        // 编辑分类故事
        if(isset($queries['banner'])){
            try {
                $ossRes = OssHandler::save($queries['banner'], AliyunOssDir::ProductCategoryStory);  // 图片存储到OSS
                $ossRes ? $queries['banner'] = $ossRes['data'] : null;
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                $queries['banner'] = null;
            }
        }
        try{
            $res = $this->categoryStory->where('id', $categoryStoriesRequest)->update($queries);
            Log::info($res);
            return $res;
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return false;
        }

    }

    public function destroy($categoriesStoriesId){
        // 删除分类故事
        try{
            return $this->categoryStory->where('id', $categoriesStoriesId)->delete();
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return false;
        }

    }
}
