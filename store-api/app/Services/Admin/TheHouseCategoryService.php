<?php
namespace App\Services\Admin;

use App\Models\TheHouseCategory;
use App\Services\Service;
use Illuminate\Support\Facades\Log;

class TheHouseCategoryService extends Service
{
    private $theHouseCategory;
    public function __construct(TheHouseCategory $theHouseCategory)
    {
        $this->theHouseCategory = $theHouseCategory;
    }

    // 获取分类列表
    public function getTheHouseCategoryList(array $param)
    {
        $requestData = page_limit($param);
        return $this->theHouseCategory->latest()->paginate($requestData['page_limit']);
    }

     // 获取详情
    public function getCategoryDetailBySlug(string $slug)
    {
        return $this->theHouseCategory->whereSlug($slug)->first();
    }

    // 创建
    public function categoryStore(array $params)
    {
        $requestData = saveOss($params, ['banner']);
        try{
            $this->theHouseCategory->create($requestData);
        } catch(\Exception $e){
            Log::error( '创建失败', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

    // 更新
    public function categoryUpdateBySlug(string $slug, array $params)
    {
        $requestData = saveOss($params, ['banner']);
        try{
            $this->theHouseCategory->whereSlug($slug)->update($requestData);
        } catch(\Exception $e) {
            Log::error( '更新失败', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

    // 删除
    public function categoryDestroyBySlug(string $slug)
    {
        try{
            $this->theHouseCategory->whereSlug($slug)->delete();
        } catch(\Exception $e) {
            Log::error( '删除失败', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

    // 保存静态资源到aliyun OSS
//    public static function saveOss(array $array)
//    {
//        // 保存文件到OSS中，返回url
//        $filtered = Arr::where($array, function ($value, $key) {
//            return Str::contains($key, ['banner']) && $key;
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
}
