<?php

/**
 * 无受限路由组
 */
// 状态码说明
Route::get('response_code', 'ResponseCodeController@index')->name('response_code.index');

/**
 * sign节流路由组
 */
Route::middleware('throttle:' . config('api.rate_limits.sign'))
    ->group(function () {
        // 图片验证码
        Route::post('captchas', 'CaptchaController@store')->name('captchas.store');
        // 用户注册
        Route::post('auth/register', 'AuthController@register')->name('auth.register');
        // 测试路由
        Route::get('test','UserController@test');
    });

/**
 * access节流路由组
 */
Route::middleware('throttle:' . config('api.rate_limits.access'))->group(function () {
    Route::group(['middleware' => 'api'], function () {

        // token无效或失效,针对处理该问题闭包路由
        Route::get('/unauthorized', function () {
            return response()->json(\App\Helpers\ResponseData::tokenExpired());
        })->name('login');

        /**
         * auth route
         */
        Route::post('auth/login', 'AuthController@login')->name('auth.login');
        Route::delete('auth/logout', 'AuthController@logout')->name('auth.logout');
        Route::put('auth/refresh', 'AuthController@refresh')->name('auth.refresh');
        Route::get('auth/me', 'AuthController@me')->name('auth.me');
    });
});
