<?php
namespace App\Services\Admin;

use App\Enums\AliyunOssDir;
use App\Handlers\OssHandler;
use App\Models\AssetImgs;
use App\Services\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AssetImgsService extends Service
{
    private $assetImgs;
    public function __construct(AssetImgs $assetImgs)
    {
        $this->assetImgs = $assetImgs;
    }

    public function queryList($queries)
    {
        $requestData = page_limit($queries);
        return $this->assetImgs->paginate($requestData['page_limit']);
    }

    public function store($queries)
    {
        $requestData = $this->saveOss($queries);
        try {
            $this->assetImgs->create($requestData);
        }catch (\Exception $e){
            Log::error('添加失败', ['messsage' => $e->getMessage()]);
            return false;
        }
        return $requestData;
    }

    public static function saveOss($array)
    {
        // 存储到OSS，本地保存OSS地址
        if (is_object($array['img'])) {
            try {
                $ossRes = OssHandler::save($array['img'], AliyunOssDir::Product);  // 图片存储到OSS
                $ossRes ? $array['img'] = $ossRes['data'] : null;
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                $array['img'] = null;
            }
        }
        return $array;
    }
}
