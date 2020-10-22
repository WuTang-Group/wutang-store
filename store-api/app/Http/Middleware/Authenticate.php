<?php

namespace App\Http\Middleware;

use App\Enums\LoggerCollection;
use App\Exceptions\HttpResponseException;
use App\Handlers\ResponseData;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
//    protected function redirectTo($request)
//    {
//        if (! $request->expectsJson()) {
//            return route('unauth.login');
//        }
//        // json() 方法第二个参数就是 Http 返回码
//        return response()->json(ResponseData::tokenExpired());
//    }

//    /**
//     * 重写未授权后的返回信息
//     * @param \Illuminate\Http\Request $request
//     * @param array $guards
//     * @throws HttpResponseException
//     */
//    protected function unauthenticated($request, array $guards)
//    {
//        throw new HttpResponseException(ResponseData::tokenExpired());
//    }

    /**
     * 重写未授权后的返回信息
     * @param \Illuminate\Http\Request $request
     * @param array $guards
     * @throws HttpResponseException
     */
    protected function unauthenticated($request, array $guards)
    {
        config(['logging.channels.mongodb.collection' => LoggerCollection::OtherLog]);  // 该处由于必定会抛出错误,暂时采用其他日志记录，不作处理
        throw new HttpResponseException(ResponseData::tokenExpired());
    }
}
