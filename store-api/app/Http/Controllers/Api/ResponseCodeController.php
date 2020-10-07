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
     * @queryParam P1001 产品存在购物车
     * @queryParam P1002 已购买过该商品
     * @queryParam P4004 商品不存在
     * @queryParam P4005 商品售罄
     */
    public function index(){}
}
