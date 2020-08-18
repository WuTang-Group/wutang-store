<?php

namespace App\Traits;

use App\Enums\ResponseStatusCode;

trait HttpResponseTrait
{
    public static function response($type, $res)
    {
        if($type == 'auth') { //用于检测必须登录的页面
            self::code($res);
        } else if($type == 'global') { //用于检测数据
            self::data($res);
        }
    }

    protected static function code($code) 
    {
        switch ($code) {
            case ResponseStatusCode::ParamError:
            case ResponseStatusCode::DataError:
            case ResponseStatusCode::RequestFails:
            case ResponseStatusCode::QueryVoid:
                abort(404);
            case ResponseStatusCode::RequestDeny:
                abort(403);
            case ResponseStatusCode::RequestWithoutAuth:
                abort(401);
            case ResponseStatusCode::TokenExpired:
                setcookie('token', '');
                return redirect(route('login'))->send();
            default: // Do nothing
        }
    }
    protected static function data($data) 
    {
        if($data == null) {
            abort(404);
        }
    }
}
