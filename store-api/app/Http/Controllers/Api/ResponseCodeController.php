<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ResponseCodeController extends Controller
{
    /**
     * ResponseCode explain
     * 本方法仅作返回code通用说明(无其他作用)
     * @queryParam 10001 参数有误
     * @queryParam 10003 数据有误
     * @queryParam 20001 操作成功
     * @queryParam 40001 禁止访问
     * @queryParam 40003 权限不足
     * @queryParam 40004 查询为空
     * @queryParam 40005 请求过期
     * @queryParam 50001 操作失败
     */
    public function index(){}
}
