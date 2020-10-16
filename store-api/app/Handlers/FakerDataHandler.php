<?php


namespace App\Handlers;


use Illuminate\Support\Arr;

class FakerDataHandler
{
    /**
     * 获取随机图片地址
     * @return array|mixed 随机图片地址
     */
    public function getImageUrl()
    {
        $data = file_get_contents('assets/json/landscape.json');  // 图片地址库
        $arr_data = json_decode($data, true);
        return Arr::random($arr_data['landscape']);
    }
}
