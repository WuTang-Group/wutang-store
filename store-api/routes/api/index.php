<?php
Route::group(['middleware' => 'api'], function () {
    // token无效或失效,针对处理该问题闭包路由
    Route::get('/unauthorized', function () {
        return response()->json(\App\Helpers\ResponseData::tokenExpired());
    })->name('login');
    // 状态码说明
    Route::get('response_code','ResponseCodeController@index')->name('response_code.index');
    /**
     * auth route
     */
    Route::post('auth/login', 'AuthController@login')->name('auth.login');
    Route::delete('auth/logout', 'AuthController@logout')->name('auth.logout');
    Route::put('auth/refresh', 'AuthController@refresh')->name('auth.refresh');
    Route::get('auth/me', 'AuthController@me')->name('auth.me');
});
