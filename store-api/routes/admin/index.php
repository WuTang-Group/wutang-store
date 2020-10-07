<?php

/**
 * Admin路由组
 */
Route::group(['namespace' => 'Admin'], function () {
    /**
     * 登录后的路由组
     */
    Route::middleware('auth:api')->group(function () {
        /*
         * Enums
         */
        Route::get('enums/{name}', 'EnumController@getEnumList')->name('enums.getEnumList');
        /**
         * User info
         */
        // 获取用户列表信息
        Route::get('user', 'UserController@queryList')->name('user.queryList');
        // 新增用户
        Route::post('user','UserController@store')->name('user.store');
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
        Route::get('category_stories/{CategoriesStoriesId}', 'CategoryStoryController@storyDetail')->name('category_stories.storyDetail');
        Route::post('category_stories', 'CategoryStoryController@store')->name('category_stories.store');
        Route::post('category_stories/{CategoriesStoriesId}', 'CategoryStoryController@edit')->name('category_stories.edit');
        Route::delete('category_stories/{CategoriesStoriesId}', 'CategoryStoryController@destroy')->name('category_stories.destroy');

        /**
         * product
         */
        Route::get('product', 'ProductController@queryList')->name('product.queryList');
        Route::get('product/basic_info_list', 'ProductController@basicInfoList')->name('product.basicInfoList');
        Route::get('product/{product_slug}', 'ProductController@productQuery')->name('product.productQuery');
        Route::get('products/parent', 'ProductController@parentProducts')->name('product.parent');
        Route::post('product', 'ProductController@store')->name('product.store');
        Route::post('product/{product_slug}', 'ProductController@edit')->name('product.edit');
        Route::delete('product/{product_slug}', 'ProductController@deleteProduct')->name('product.deleteProduct');
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
        Route::get('order/{orderNo}', 'OrderController@detail')->name('order.detail');
        Route::post('order', 'OrderController@searchOrder')->name('order.searchOrder');
        Route::post('order/{orderId}', 'OrderController@edit')->name('order.edit');
        /**
         * Logs
         */
        Route::get('logs/{collection}', 'LoggerController@queryList')->name('logs.queryList');
        Route::delete('logs/{collection}', 'LoggerController@destroy')->name('logs.destroy');
        Route::post('testUpload', 'InvitationController@test');
        /**
         * img resource
         */
        Route::get('asset_img', 'AssetImgController@queryList')->name('asset_img.queryList');
        Route::post('asset_img', 'AssetImgController@store')->name('asset_img.store');
        Route::post('asset_img/{assetImgId}', 'AssetImgController@update')->name('asset_img.update');
        Route::delete('asset_img/{assetImgId}', 'AssetImgController@destroy')->name('asset_img.destroy');
        /**
         * Member codes
         */
        Route::get('member_codes', 'MemberCodeController@index')->name('member_codes.index');
        Route::get('member_code/{member_code}','MemberCodeController@memberCodeDetail')->name('member_codes.detail');
        /**
         * Payment
         */
        require_once base_path('routes/admin/payment.php');
        /**
         * Permissions
         */
        require_once base_path('routes/admin/permission.php');
        /**
         * The House
         */
        Route::get('the_houses', 'TheHouseController@getTheHouseList')->name('the_house.list');
        Route::get('the_house/{slug}', 'TheHouseController@theHouseDetailBySlug')->name('the_house.detail');
        Route::post('the_house', 'TheHouseController@theHouseStore')->name('the_house.store');
        Route::post('the_house/{slug}', 'TheHouseController@theHouseUpdateBySlug')->name('the_house.update');
        Route::delete('the_house/{slug}', 'TheHouseController@theHouseDestroyBySlug')->name('the_house.destroy');
        /**
         * The House Category
         */
        Route::get('the_house/category/list', 'TheHouseCategoryController@getTheHouseCategoryList')->name('the_house_category.list');
        Route::get('the_house/category/{slug}', 'TheHouseCategoryController@getCategoryDetailBySlug')->name('the_house_category.detail');
        Route::post('the_house/category', 'TheHouseCategoryController@categoryStore')->name('the_house_category.store');
        Route::post('the_house/category/{slug}', 'TheHouseCategoryController@categoryUpdateBySlug')->name('the_house_category.update');
        Route::delete('the_house/category/{slug}', 'TheHouseCategoryController@categoryDestroyBySlug')->name('the_house_category.delete');
        /**
         * The House Content
         */
        Route::get('the_house_content/list', 'TheHouseContentController@getTheHouseContentList')->name('the_house_content.list');
        Route::get('the_house_content/{id}', 'TheHouseContentController@getContentDetailById')->name('the_house_content.detail');
        Route::post('the_house_content', 'TheHouseContentController@contentStore')->name('the_house_content.store');
        Route::post('the_house_content/{id}', 'TheHouseContentController@ContentUpdateById')->name('the_house_content.update');
        Route::delete('the_house_content/{id}', 'TheHouseContentController@contentDestroyById')->name('the_house_content.delete');
        /**
         * Companies
         */
        Route::get('companies','CompanyController@getList')->name('companies.getList');
        Route::get('company/departments/{company_name}','CompanyController@getDepartmentListByCompany')->name('company.departments.getDepartmentListByCompany');

    });
});
