<?php

namespace App\Http\Middleware;

use App\Handlers\ResponseData;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('unauth.login');
        }
        // json() 方法第二个参数就是 Http 返回码
        return response()->json(ResponseData::tokenExpired());
    }
}
