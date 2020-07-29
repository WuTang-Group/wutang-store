<?php


namespace App\Handlers;


use App\Enums\ResponseStatusCode;

class ResponseData
{
    public static function paramError($data = null, $msg = null): array
    {
        return [
            'data' => $data,
            'code' => ResponseStatusCode::ParamError,
            'msg' => is_null($msg) ? '参数有误' : $msg
        ];
    }

    public static function dataError($data = null, $msg = null): array
    {
        return [
            'data' => $data,
            'code' => ResponseStatusCode::DataError,
            'msg' => is_null($msg) ? '数据有误' : $msg
        ];
    }

    public static function requestSuccess($data = null, $msg = null): array
    {
        return [
            'data' => $data,
            'code' => ResponseStatusCode::RequestSuccess,
            'msg' => is_null($msg) ? '操作成功' : $msg
        ];
    }

    public static function requestDeny($data = null, $msg = null): array
    {
        return [
            'data' => $data,
            'code' => ResponseStatusCode::RequestDeny,
            'msg' => is_null($msg) ? '禁止访问' : $msg
        ];
    }

    public static function requestWithoutAuth($data = null, $msg = null): array
    {
        return [
            'data' => $data,
            'code' => ResponseStatusCode::RequestWithoutAuth,
            'msg' => is_null($msg) ? '权限不足' : $msg
        ];
    }

    public static function requestFails($data = null, $msg = null): array
    {
        return [
            'data' => $data,
            'code' => ResponseStatusCode::RequestFails,
            'msg' => is_null($msg) ? '操作失败' : $msg
        ];
    }

    public static function queryVoid($data = null, $msg = null): array
    {
        return [
            'data' => $data,
            'code' => ResponseStatusCode::QueryVoid,
            'msg' => is_null($msg) ? '结果为空' : $msg
        ];
    }

    public static function tokenExpired($data = null, $msg = null): array
    {
        return [
            'data' => $data,
            'code' => ResponseStatusCode::TokenExpired,
            'msg' => is_null($msg) ? '授权过期' : $msg
        ];
    }
}
