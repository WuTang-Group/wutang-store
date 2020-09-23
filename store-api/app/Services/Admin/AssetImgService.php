<?php
namespace App\Services\Admin;

use App\Enums\AliyunOssDir;
use App\Handlers\OssHandler;
use App\Models\AssetImg;
use App\Services\Service;
use Illuminate\Support\Facades\Log;

class AssetImgService extends Service
{
    private $assetImg;
    public function __construct(AssetImg $assetImg)
    {
        $this->assetImg = $assetImg;
    }

    public function queryList($queries)
    {
        $requestData = page_limit($queries);
        return $this->assetImg->with('product')->latest()->paginate($requestData['page_limit']);
    }

    public function store($queries)
    {
        $requestData = $this->saveOss($queries);
        try {
            $this->assetImg->create($requestData);
        }catch (\Exception $e){
            Log::error('添加失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $requestData;
    }

    public function update($assetImgId, $param)
    {
        $requestData = saveOss($param, ['img']);
        try {
            $this->assetImg->find($assetImgId)->update($requestData);
        } catch(\Exception $e) {
            Log::error('更新失败', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

    public function destroy($assetImgId)
    {
        try{
            $assetImgObject = $this->assetImg->whereId($assetImgId)->first();
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
