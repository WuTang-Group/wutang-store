<?php

Route::middleware('throttle:' . config('api.rate_limits.access'))->group(function () {
    /**
     * 登录后可访问
     */
    Route::group(['middleware' => ['auth:api', 'verified']], function () {
        /**
         * Web payment list
         */
        Route::get('payments/web', 'WebPaymentController@getList')->name('payments.web.getList');
    });
});
