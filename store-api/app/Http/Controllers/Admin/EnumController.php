<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

/**
 * @group [ADMIN] Enum
 * 枚举类管理
 * @authenticated
 * @package App\Http\Controllers\Admin
 */
class EnumController extends Controller
{
    /**
     * Get enum list by name
     * 根据枚举类名获取枚举类内定义的数据
     * @urlParam name required 枚举类名称 Example:AssetImgType
     * @param $name
     * @return Application|ResponseFactory|Response
     */
    public function getEnumList($name)
    {
        $enum = "\\App\\Enums\\".$name;
        $result = [
            'keys' => $enum::getKeys(),
            'values' => $enum::getValues()
        ];
        return response(ResponseData::requestSuccess($result));
    }
}
