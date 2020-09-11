<?php
namespace App\Services\Admin;

use App\Enums\AliyunOssDir;
use App\Handlers\OssHandler;
use App\Models\AssetImgs;
use App\Services\Service;
use Illuminate\Support\Facades\Log;

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
        return $this->assetImgs->latest()->paginate($requestData['page_limit']);
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

    public function destroy($assetImgId)
    {
        try{
            $assetImgObject = $this->assetImgs->whereId($assetImgId)->first();
            if ($assetImgObject){
                OssHandler::delete($assetImgObject['img']);   //删除oss地址
                $assetImgObject->delete();  // 删除表中记录
            }else {
                return false;
            }
        }catch (\Exception $e){
            Log::error('删除失败', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

    public static function saveOss($array)
    {
        // 存储到OSS，本地保存OSS地址
        if (is_object($array['img'])) {
            try {
                $ossRes = OssHandler::save($array['img'], AliyunOssDir::AssetImg);  // 图片存储到OSS
                $ossRes ? $array['img'] = $ossRes['data'] : null;
            } catch (\Exception $e) {
                Log::error('添加OSS失败', ['message' => $e->getMessage()]);
                $array['img'] = null;
            }
        }
        return $array;
    }
}
