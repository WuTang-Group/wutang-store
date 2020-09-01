<?php
/**
 * 支付相关路由
 */
Route::group(['namespace' => 'Payment'], function () {
    Route::middleware('throttle:' . config('api.rate_limits.access'))->group(function () {
        /**
         * 访客可访问
         */
        Route::group(['middleware' => 'guest'], function () {
            /**
             * 支付宝-银行网关支付(第三方转发)
             */
            Route::get('alipay/bank_gateway/pay', 'PaymentController@payByAlipayBankGateway')->name('alipay.bank_gateway.payByAlipayBankGateway');
            Route::get('alipay/bank_gateway/return', 'PaymentController@alipayBankGatewayReturn')->name('alipay.bank_gateway.alipayBankGatewayReturn');
            Route::post('alipay/bank_gateway/notify', 'PaymentController@alipayBankGatewayNotify')->name('alipay.bank_gateway.alipayBankGatewayNotify');
            /**
             * 支付宝-电脑网页支付
             */
            Route::get('alipay/aop_page/pay', 'PaymentController@payByAlipayAopPage')->name('alipay.aop_page.payByAlipayAopPage');
            Route::get('alipay/aop_page/return', 'PaymentController@alipayAopPageReturn')->name('alipay.aop_page.alipayAopPageReturn');
            Route::post('alipay/aop_page/notify', 'PaymentController@alipayAopPageNotify')->name('alipay.aop_page.alipayAopPageNotify');
            /**
             * 支付宝-即时到账支付
             */
            Route::get('alipay/legacy_express/pay', 'PaymentController@payByAlipayLegacyExpress')->name('alipay.legacy_express.payByAlipayLegacyExpress');
            Route::get('alipay/legacy_express/return', 'PaymentController@alipayLegacyExpressReturn')->name('alipay.legacy_express.alipayLegacyExpressReturn');
            Route::post('alipay/legacy_express/notify', 'PaymentController@alipayLegacyExpressNotify')->name('alipay.legacy_express.alipayLegacyExpressNotify');
            /**
             * 银联支付路由
             */
            // 发起支付
            Route::get('unionpay/pay', 'PaymentController@payByUnionpay')->name('unionpay.payByUnionpay');
            // 支付后回调url
            Route::post('unionpay/return', 'PaymentController@unionpayReturn')->name('unionpay.unionpayReturn');
            // 支付后通知url
            Route::post('unionpay/notify', 'PaymentController@unionpayNotify')->name('unionpay.unionpayNotify');
        });
    });
});

