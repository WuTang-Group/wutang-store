<?php
/**
 * 自定义助手函数库
 */

use App\Enums\AliyunOssDir;
use App\Handlers\OssHandler;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

/**
 * 分页助手
 * @param null $queries
 * @return array
 */
function page_limit($queries = null)
{
    $requestData = $queries;
    // 对请求参数默认分页参数进行过滤赋值
    $requestData['page'] = isset($queries['page']) ? (integer)$queries['page'] : 1;
    $requestData['page_limit'] = isset($queries['page_limit']) ? (integer)$queries['page_limit'] : 20;
    return $requestData;
}

/**
 * php7.2开始废弃了each()函数，这里自己封装一个助手函数
 * @param $array array 传递的数组
 * @return array|bool 返回拼接数据
 */
function custom_each(&$array)
{
    $res = array();
    $key = key($array);
    if ($key !== null) {
        next($array);
        $res[1] = $res['value'] = $array[$key];
        $res[0] = $res['key'] = $key;
    } else {
        $res = false;
    }
    return $res;
}

// demodifie
function demodifier(string $param)
{
    $data = str_split(str_replace(config('app.key_salt.base'),'',$param));
    array_splice($data, 7, 27, '');
    $result = base64_decode(implode($data));
    return $result;
}

// 保存静态资源到aliyun OSS
function saveOss(array $params, array $saveField)
{
    // 保存文件到OSS中，返回url
    $filtered = Arr::where($params, function ($value, $key) use ($saveField) {
        return Str::contains($key, $saveField) && $key;
    });
    foreach ($filtered as $key => $value) {
        // 图片存储到OSS，本地保存OSS地址
        if (is_object($params[$key])) {
            try {
                $ossRes = OssHandler::save($params[$key], AliyunOssDir::Product);  // 图片存储到OSS
                Log::info($ossRes);
                $ossRes ? $params[$key] = $ossRes['data'] : null;
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                $params[$key] = null;
            }
        }
    }
    return $params;
}
