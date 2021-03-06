<?php

namespace App\Services\Admin;

use App\Enums\AliyunOssDir;
use App\Handlers\OssHandler;
use App\Models\TheHouse;
use App\Models\TheHouseCategory;
use App\Models\TheHouseContent;
use App\Services\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TheHouseService extends Service
{
    private $theHouse, $theHouseCategory;

    public function __construct(TheHouse $theHouse, TheHouseCategory $theHouseCategory)
    {
        $this->theHouse = $theHouse;
        $this->theHouseCategory = $theHouseCategory;
    }

    public function getTheHouseList(array $param)
    {
        $requestData = page_limit($param);
        return $this->theHouse->with('theHouseCategory')->latest()->paginate($requestData['page_limit']);
    }

    public function theHouseDetailBySlug(string $slug)
    {
        return $this->theHouse->with('theHouseCategory', 'theHouseContents')->where('slug', $slug)->first();
    }

    public function theHouseStore(array $param)
    {
        $requestData = saveOss($param, ['banner', 'thumbnail'], AliyunOssDir::TheHouse);
        try {
            $this->theHouse->create($requestData['params']);
        } catch (\Exception $e) {
            Log::error('添加The House失败', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

    public function theHouseUpdateBySlug(string $slug, array $param)
    {
        $requestData = saveOss($param, ['banner', 'thumbnail'], AliyunOssDir::TheHouse);
        try{
            $theHouse = $this->theHouse->where('slug', $slug);
            // 获取更新资源字段的旧值，从Aliyun oss中删除
            foreach ($requestData['old_oss'] as $key) {
                OssHandler::delete($theHouse->first()->$key);
            }
            $theHouse->update($requestData['params']);
        } catch (\Exception $e) {
            Log::error('更新The House失败', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

    public function theHouseDestroyBySlug(string $slug)
    {
        $theHouse_imgs = ['banner', 'thumbnail'];
        try{
            $theHouse = $this->theHouse->whereSlug($slug)->first();
            foreach ($theHouse_imgs as $value) {
                OssHandler::delete($theHouse[$value]);
            }
            $theHouse->delete();
        } catch(\Exception $e) {
            Log::error('删除失败！', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

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
