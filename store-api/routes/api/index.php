<?php

/**
 * 无受限路由组
 */
// 状态码说明
Route::get('response_code', 'ResponseCodeController@index')->name('response_code.index');

Route::get('aligateway/pay', 'PaymentController@payByAlipayGateway')->name('aligateway.payByAlipayGateway');
Route::get('aligateway/return', 'PaymentController@alipayGatewayReturn')->name('aligateway.alipayGatewayReturn');
Route::post('aligateway/notify', 'PaymentController@alipayGatewayNotify')->name('aligateway.alipayGatewayNotify');

/**
 * loose(较宽松)节流路由组
 */
Route::middleware('throttle:' . config('api.rate_limits.loose'))->group(function () {
    // 图片验证码
    Route::post('captchas', 'CaptchaController@store')->name('captchas.store');
    // 用户注册
    Route::post('auth/register', 'AuthController@register')->name('auth.register');
    // 密保问题列表
    Route::get('question_list', 'AuthController@questionList')->name('question_list.questionList');
    // 获取用户的密保问题
    Route::get('questions', 'AuthController@getQuestion')->name('questions.getQuestion');
});

/**
 * sign节流路由组
 */
Route::middleware('throttle:' . config('api.rate_limits.sign'))
    ->group(function () {
        // token无效或失效,针对处理该问题闭包路由
        Route::get('/unauthorized', function () {
            return response()->json(\App\Handlers\ResponseData::tokenExpired());
        })->name('login');
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
     * 无需登录路由组
     */
    Route::group(['middleware' => 'guest'], function () {
        /**
         * Product
         */
        // 获取产品类别
        Route::get('product_category', 'ProductController@categoryQueryList')->name('product_category.categoryQueryList');
        // 产品列表
        Route::get('product', 'ProductController@productQueryList')->name('product.productQueryList');
        // 获取对应类别下的产品->传递slug去查询对应分类下到产品
        Route::get('product_category/{category_slug}', 'ProductController@getCategoryProduct')->name('product.getCategoryProduct');
        // 获取产品详情->传递slug去查询对应的产品
        Route::get('product/{product_slug}', 'ProductController@index')->name('product.index');
        // 获取分类故事
        Route::get('category_story/{category_slug}', 'ProductController@categoryStory')->name('product.newProduct');
        // 新品
        Route::get('product_new', 'ProductController@newProduct')->name('product.newProduct');
    });
    /**
     * 需登录的路由组
     */
    Route::middleware('auth:api')->group(function () {
        /**
         * Auth 类
         */
        Route::post('auth/password_change', 'AuthController@changePassword')->name('auth.changePassword');
        /**
         * 支付支付路由组
         */
        Route::get('alipay/pay', 'PaymentController@payByAlipay')->name('alipay.payByAlipay');
        Route::get('alipay/return', 'PaymentController@alipayReturn')->name('alipay.alipayReturn');
        Route::post('alipay/notify', 'PaymentController@alipayNotify')->name('alipay.alipayNotify');

        /**
         * 银联支付路由
         */
        // 发起支付
        Route::get('unionpay/pay', 'PaymentController@payByUnionpay')->name('unionpay.payByUnionpay');
        // 支付后回调url
        Route::post('unionpay/return', 'PaymentController@unionpayReturn')->name('unionpay.unionpayReturn');
        // 支付后通知url
        Route::post('unionpay/notify', 'PaymentController@unionpayNotify')->name('unionpay.unionpayNotify');

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
         * User profile
         */
        Route::get('user_profiles', 'UserProfileController@index')->name('user_profiles.index');
        Route::put('user_profiles', 'UserProfileController@update')->name('user_profiles.update');
        /**
         * User address
         */
        Route::get('user_addresses', 'UserAddressController@index')->name('user_addresses.queryList');
        Route::post('user_addresses', 'UserAddressController@store')->name('user_addresses.store');
        Route::put('user_addresses/{address_id}', 'UserAddressController@edit')->name('user_addresses.edit');
        Route::delete('user_addresses/{address_id}', 'UserAddressController@destroy')->name('user_addresses.destroy');
        /**
         * 购物车
         */
        Route::get('shop_carts', 'ShopCartController@queryList')->name('shop_carts.queryList');
        Route::post('shop_carts', 'ShopCartController@store')->name('shop_carts.store');
        Route::delete('shop_carts/{product_id}', 'ShopCartController@delete')->name('shop_carts.delete');
        /**
         * 订单
         */
        Route::get('orders', 'OrderController@queryList')->name('orders.queryList');
        Route::get('order_details/{no}', 'OrderController@getOrderDetail')->name('order_details.getOrderDetail');
        Route::post('orders', 'OrderController@requestCreate')->name('orders.requestCreate');
        Route::get('orders/pay_check', 'OrderController@payCheck')->name('orders.payCheck');

    });

});
