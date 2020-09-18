<?php
namespace App\Services\Admin;

use App\Enums\AliyunOssDir;
use App\Handlers\OssHandler;
use App\Models\TheHouse;
use App\Models\TheHouseContent;
use App\Services\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TheHouseContentService extends Service
{
    private $theHouseContent;
    public function __construct(TheHouseContent $theHouseContent)
    {
        $this->theHouseContent = $theHouseContent;
    }

    public function getTheHouseContentList(array $param)
    {
        $requestData = page_limit($param);
        return $this->theHouseContent->with('theHouse')->latest()->paginate($requestData['page_limit']);
    }

    public function getContentDetailById(int $id)
    {
        return $this->theHouseContent->with('theHouse')->find($id);
    }

    public function contentStore(array $param)
    {
        $requestData = $this->saveOss($param);
        try {
            $this->theHouseContent->create($requestData);
        } catch (\Exception $e) {
            Log::error('添加The House Content失败', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

    public function ContentUpdateById(int $id, array $param)
    {
        $requestData = saveOss($param, ['img']);
        try{
            $this->theHouseContent->find($id)->update($requestData);
        } catch (\Exception $e) {
            Log::error('更新The House Content失败', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

    public function contentDestroyById(int $id)
    {
        try{
            $this->theHouseContent->find($id)->delete();
        } catch(\Exception $e) {
            Log::error('删除失败！', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

    public static function saveOss(array $array)
    {
        // 保存文件到OSS中，返回url
        $filtered = Arr::where($array, function ($value, $key) {
            return Str::contains($key, ['img']) && $key;
        });
        foreach ($filtered as $key => $value) {
            // 图片存储到OSS，本地保存OSS地址
            if (is_object($array[$key])) {
                try {
                    $ossRes = OssHandler::save($array[$key], AliyunOssDir::Product);  // 图片存储到OSS
                    $ossRes ? $array[$key] = $ossRes['data'] : null;
                } catch (\Exception $e) {
                    Log::error($e->getMessage());
                    $array[$key] = null;
                }
            }
        }
        return $array;
    }
}
