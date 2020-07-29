<?php


namespace App\Handlers;


use App\Models\OssData;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class OssHandler
{
    /**
     * 存储OSS数据并同步备份路径到数据库
     * @param string $file 文件
     * @param string $ossFolder 存储至OSS目录名
     * @param string $disk 盘名
     * @return bool|string[]
     */
    public static function save($file, $ossFolder, $disk = 'aliyun')
    {
        try {
            $storage = Storage::disk($disk);
            $ossdata = $storage->put($ossFolder,$file);
            $data = str_replace($ossFolder,'',$ossdata);
            // 写入数据库
            OssData::create([
                'disk' => $disk,
                'path' => $storage->getUrl($ossFolder).$data
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
        return [
            'data' => $storage->getUrl($ossFolder).$data,  // oss上的cdn域名 + 文件存储位置
            'msg' => 'success'
        ];
    }

    /**
     * 删除OSS数据并同步删除数据库内备份数据
     * @param string $fileUrl 文件路径
     * @param string $disk  盘名
     * @return array|bool
     */
    public static function delete($fileUrl, $disk = 'aliyun')
    {
        try {
            $storage = Storage::disk($disk);
            // 截取'.com/'前所有字符串
            $strData = strstr($fileUrl,'.com/',true);
            // 拼装组合成标准URL
            $filterURL = $strData.'.com/';
            $file = str_replace($filterURL,'',$fileUrl);
            $storage->delete($file);
            // 删除本地数据
            OssData::wherePath($fileUrl)->delete();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
        return [
            'data'=>$fileUrl,
            'msg'=>'success'
        ];
    }
}
