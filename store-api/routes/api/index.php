<?php

/**
 * 无受限路由组
 */
// 状态码说明
Route::get('response_code', 'ResponseCodeController@index')->name('response_code.index');
/**
 * Web页面路由组
 */
require_once base_path('routes/api/web.php');

/**
 * loose(较宽松)节流路由组
 */
Route::middleware('throttle:' . config('api.rate_limits.loose'))->group(function () {
    // 图片验证码
    Route::post('captchas', 'CaptchaController@store')->name('captchas.store');
    // 用户注册
    Route::post('auth/register', 'AuthController@register')->name('auth.register');
    // 密保问题列表(注册时)
    Route::get('question_list', 'AuthController@getQuestionList')->name('question_list.getQuestionList');
    // 获取用户的密保问题(找回密码时)
    Route::get('user_question', 'AuthController@getUserQuestion')->name('questions.getUserQuestion');
});

/**
 * sign节流路由组
 */
Route::middleware('throttle:' . config('api.rate_limits.sign'))
    ->group(function () {
//        // token无效或失效,针对处理该问题闭包路由
//        Route::get('/unauthorized', function () {
//            return response()->json(\App\Handlers\ResponseData::tokenExpired());
//        })->name('unauth.login');
        // 用户登录
        Route::post('auth/login', 'AuthController@login')->name('auth.login');
        // 重置密码
        Route::put('password_reset', 'AuthController@resetPassword')->name('password_reset.resetPassword');
    });

/**
 * access节流路由组
 */
Route::middleware('throttle:' . config('api.rate_limits.access'))->group(function () {

    /**
     * 需登录的路由组
     */
    Route::group(['middleware' => ['auth:api']], function () {
        /**
         * auth route
         */
        // 获取登录用户信息
        Route::get('auth/me', 'AuthController@me')->name('auth.me');
        // 退出登录
        Route::delete('auth/logout', 'AuthController@logout')->name('auth.logout');
        // 刷新token
        Route::put('auth/refresh', 'AuthController@refresh')->name('auth.refresh');
        // 更改密码
        Route::post('auth/password_change', 'AuthController@changePassword')->name('auth.changePassword');
        /**
         * User profile
         */
        Route::get('user_profile', 'UserProfileController@index')->name('user_profile.index');
        Route::put('user_profile', 'UserProfileController@update')->name('user_profile.update');
        /**
         * User address
         */
        Route::get('user_addresses', 'UserAddressController@index')->name('user_addresses.queryList');
        Route::post('user_addresses', 'UserAddressController@store')->name('user_addresses.store');
        Route::put('user_addresses/{address_id}', 'UserAddressController@edit')->name('user_addresses.edit');
        Route::delete('user_addresses/{address_id}', 'UserAddressController@destroy')->name('user_addresses.destroy');
        Route::put('user_addresses/set_default/{address_id}', 'UserAddressController@setDefault')->name('user_addresses.set_default.setDefault');
        /**
         * 购物车
         */
        Route::get('shop_carts', 'ShopCartController@queryList')->name('shop_carts.queryList');
        Route::post('shop_carts', 'ShopCartController@store')->name('shop_carts.store');
        Route::put('shop_carts/{type}', 'ShopCartController@updateItemNumber')->name('shop_carts.updateItemNumber');
        Route::delete('shop_carts/{product_id}', 'ShopCartController@delete')->name('shop_carts.delete');
        /**
         * 订单
         */
        Route::get('orders', 'OrderController@queryList')->name('orders.queryList');
        Route::get('order_details/{no}', 'OrderController@getOrderDetail')->name('order_details.getOrderDetail');
        Route::post('orders', 'OrderController@requestCreate')->name('orders.requestCreate');
        Route::post('orders/retry','OrderController@retryCreate')->name('orders.retry.retryCreate');
        Route::put('orders/cancel','OrderController@requestCancel')->name('orders.cancel.requestCancel');
        /**
         * 心愿单
         */
        Route::get('wish_list','WishListController@index')->name('wish_list.index');
        Route::post('wish_list', 'WishListController@store')->name('wish_list.store');
        Route::delete('wish_list/{product_id}', 'WishListController@delete')->name('wish_list.delete');
        /**
         * img resource
         */
        Route::get('assetImg', 'AssetImgController@list')->name('assetImg.list');
        Route::get('assetImg/{img_location}', 'AssetImgController@getImg')->name('assetImg.getImg');
        /**
         * Member code
         */
        Route::post('member_code/bind_parent','UserProfileController@bindParentMemberCode')->name('member_code.bind_parent.bindParentMemberCode');
        Route::get('member_code/check','MemberCodeController@checkCodeParent')->name('member_code.check.checkCodeParent');
        /**
         * Contact us
         */
        Route::get('contact_us/types','ContactUsController@getTypeList')->name('contact_us.types.getTypeList');
        Route::post('contact_us','ContactUsController@store')->name('contact_us.store');
    });

});
