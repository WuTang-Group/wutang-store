<?php

/**
 * 登录后的路由组
 */
Route::middleware('auth:api')->group(function () {
    /**
     * User info
     */
    // 获取用户列表信息
    Route::get('user', 'UserController@queryList')->name('user.queryList');
    // 更新用户信息
    Route::put('user/{username}', 'UserController@update')->name('user.update');
    // 删除用户
    Route::delete('user/{username}', 'UserController@destroy')->name('user.destroy');
    // 修改密码
    Route::put('user/reset_password/{username}', 'UserController@resetPassword')->name('user.resetPassword');
    // 获取单个用户信息
    Route::get('get_user', 'UserController@info')->name('user.info');
    /**
     * User address
     */
    Route::get('user_addresses', 'UserAddressController@queryList')->name('user_addresses.queryList');
    Route::post('user_addresses', 'UserAddressController@store')->name('user_addresses.store');
    Route::put('user_addresses/{address_id}', 'UserAddressController@update')->name('user_addresses.update');
    Route::delete('user_addresses/{address_id}', 'UserAddressController@destroy')->name('user_addresses.destroy');
    /**
     * User profile
     */
    Route::get('user_profiles', 'UserProfileController@queryList')->name('user_profiles.queryList');
    Route::put('user_profiles/{profile_id}', 'UserProfileController@update')->name('user_profiles.update');
    Route::delete('user_profiles/{profile}', 'UserProfileController@destroy')->name('user_profiles.destroy');
    /**
     * invitation Code
     */
    Route::get('invitation/code', 'InvitationController@genInvitation');
    Route::post('invitation/code', 'InvitationController@bindCode');
    Route::get('invitation/phone', 'InvitationController@get_user');
    /**
     * product categories
     */
    Route::get('product_categories', 'ProductCategoryController@queryList')->name('product_categories.queryList');
    Route::get('product_categories/{category_slug}', 'ProductCategoryController@categoryQuery')->name('category_stories.categoryQuery');
    Route::post('product_categories', 'ProductCategoryController@store')->name('product_categories.store');
    Route::post('product_categories/{category_slug}', 'ProductCategoryController@edit')->name('product_categories.edit');
    Route::delete('product_categories/{category_slug}', 'ProductCategoryController@destroy')->name('product_categories.destroy');

    /**
     * product categories story
     */
    Route::get('category_stories', 'CategoryStoryController@queryList')->name('category_stories.queryList');
    Route::post('category_stories', 'CategoryStoryController@store')->name('category_stories.store');
    Route::post('category_stories/{CategoriesStoriesId}', 'CategoryStoryController@edit')->name('category_stories.edit');
    Route::delete('category_stories/{CategoriesStoriesId}', 'CategoryStoryController@destroy')->name('category_stories.destroy');

    /**
     * product
     */
    Route::get('product', 'ProductController@queryList')->name('product.queryList');
    Route::get('product/{product_slug}', 'ProductController@productQuery')->name('product.productQuery');
    Route::post('product', 'ProductController@store')->name('product.store');
    Route::post('product/{productId}', 'ProductController@edit')->name('product.edit');
    Route::delete('product/{productId}', 'ProductController@destroy')->name('product.destroy');
    /**
     * product SKU
     */
    Route::get('product_sku', 'ProductSkuController@queryList')->name('product_sku.queryList');
    Route::post('product_sku', 'ProductSkuController@store')->name('product_sku.store');
    Route::post('product_sku/{productSkuId}', 'ProductSkuController@edit')->name('product_sku.edit');
    Route::delete('product_sku/{productSkuId}', 'ProductSkuController@destroy')->name('product_sku.destroy');

    /**
     * order
     */
    Route::get('order', 'OrderController@queryList')->name('order.queryList');
    Route::post('order', 'OrderController@searchOrder')->name('order.searchOrder');
    /**
     * Logs
     */
    Route::get('logs/{collection}','LoggerController@queryList')->name('logs.queryList');
    Route::delete('logs/{collection}','LoggerController@destroy')->name('logs.destroy');
    Route::post('testUpload','InvitationController@test');

});
