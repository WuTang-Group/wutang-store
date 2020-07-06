<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * Class ResponseStatusCode
 * @package App\Enums
 */
final class ResponseStatusCode extends Enum
{
    const ParamError =   10001;       //参数有误
    const DataError =   10003;        //数据有误
    const QuerySuccess = 20001;       //操作成功
    const QueryDeny = 40001;          //禁止访问
    const QueryWithoutAuth = 40003;   //权限不足
    const QueryVoid = 40004;          //查询为空
    const QueryExpired = 40005;       //请求过期
    const QueryFails = 50001;         //操作失败
}
