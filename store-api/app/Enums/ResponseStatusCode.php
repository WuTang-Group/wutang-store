<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * Class ResponseStatusCode
 * @package App\Enums
 */
final class ResponseStatusCode extends Enum
{
    /**
     * 通用返回code
     */
    const ParamError =   10001;       //参数有误
    const DataExist = 10002;         // 数据已存在
    const DataError =   10003;        //数据有误
    const RequestSuccess = 20001;       //操作成功
    const RequestDeny = 40001;          //禁止访问
    const RequestWithoutAuth = 40003;   //权限不足
    const QueryVoid = 40004;          //查询为空
    const TokenExpired = 40005;       //请求过期
    const RequestFails = 50001;         //操作失败

    /**
     * 商品类返回code
     */
    const ProductShopCartExist = 'P1001';  // 产品存在购物车
    const ProductBought = 'P1002';  // 已购买过该商品
    const ProductNotExist = 'P4004';  // 产品不存在
    const ProductSoldOut = 'P4005';   // 产品售罄
}
