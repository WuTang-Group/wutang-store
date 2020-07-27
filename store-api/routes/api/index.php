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
        // token无效或失效,针对处理该问题闭包路由
        Route::get('/unauthorized', function () {
            return response()->json(\App\Helpers\ResponseData::tokenExpired());
        })->name('login');
        // 用户登录
        Route::post('auth/login', 'AuthController@login')->name('auth.login');
        // 测试路由
        Route::get('test', 'UserController@test');
    });

/**
 * access节流路由组
 */
Route::middleware('throttle:' . config('api.rate_limits.access'))->group(function () {
    /**
     * 登录后的路由组
     */
    Route::middleware('auth:api')->group(function () {

        /**
         * auth route
         */
        // 退出登录
        Route::delete('auth/logout', 'AuthController@logout')->name('auth.logout');
        // 刷新token
        Route::put('auth/refresh', 'AuthController@refresh')->name('auth.refresh');
        // 获取登录用户信息
        Route::get('auth/me', 'AuthController@me')->name('auth.me');
        /**
         * User info
         */
        // 获取用户信息
        Route::get('user_info', 'UserController@list')->name('user_info.list');
        // 更新用户信息
        Route::put('user_info/{username}', 'UserController@update')->name('user_info.update');
        // 删除用户
        Route::delete('user_info/{username}', 'UserController@destroy')->name('user_info.destroy');
        // 修改密码
        Route::put('user/password/{username}', 'UserController@password')->name('user.password');
        // 获取单个用户信息
        Route::get('get_user', 'UserController@info')->name('user.info');
        /**
         * User address
         */
        Route::get('user_addresses', 'UserAddressController@list')->name('user_addresses.list');
        Route::post('user_addresses', 'UserAddressController@store')->name('user_addresses.store');
        Route::put('user_addresses/{address_id}', 'UserAddressController@update')->name('user_addresses.update');
        Route::delete('user_addresses/{address_id}', 'UserAddressController@destroy')->name('user_addresses.destroy');
        /**
         * User profile
         */
        Route::get('user_profiles', 'UserProfileController@list')->name('user_profiles.list');
        Route::put('user_profiles/{profile_id}', 'UserProfileController@update')->name('user_profiles.update');
        Route::delete('user_profiles/{profile}', 'UserProfileController@destroy')->name('user_profiles.destroy');
    });
});
