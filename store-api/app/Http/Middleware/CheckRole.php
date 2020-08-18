<?php

namespace App\Http\Middleware;

use App\Handlers\ResponseData;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::guest()) {
            // throw UnauthorizedException::notLoggedIn();
            return response(ResponseData::tokenExpired('用户未登录'));
        }

        $roles = is_array($role)
            ? $role
            : explode('|', $role);

        if (! Auth::user()->hasAnyRole($roles)) {
            // throw UnauthorizedException::forRoles($roles);
            // 改写默认返回类型
            return response(ResponseData::tokenExpired('权限不足'));
        }

        return $next($request);
    }
}
