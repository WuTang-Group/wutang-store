<?php

/**
 * Index
 */
Route::get('home','HomeController@getList')->name('home.getList');
/**
 * Product
 */
// 所有产品列表
Route::get('products', 'ProductController@getList')->name('products.getList');
// 根据产品 slug查询对应类别下的产品详情
Route::get('product/{product_slug}', 'ProductController@getDetail')->name('product.getDetail');
// 根据分类slug获取对应分类下等产品列表
Route::get('products/category/{category_slug}', 'ProductController@getListByCategorySlug')->name('products.category.getListByCategorySlug');
// 根据产品状态获取对应的产品列表(如新品等)
Route::get('products/status/{status}', 'ProductController@getListByStatus')->name('products.status.getListByStatus');
// 创新产品推荐
Route::get('products/innovate','ProductController@getListByInnovate')->name('products.innovate.getListByInnovate');
/**
 * Product category
 */
Route::get('product_category', 'ProductCategoryController@getList')->name('product_category.getList');
Route::get('product_category/story/{category_slug}','ProductCategoryController@getStory')->name('product_category.story.getStory');
// 产品分类概述(按分类名称)
Route::get('product_category/overview/{categpory_slug}','ProductCategoryController@getOverview')->name('product_category.overview.getOverview');
// 探索推荐(属于分类推荐)
Route::get('product_category/explore/{category_slug}','ProductCategoryController@getListByExplore')->name('product_category.explore.getListByExplore');
/**
 * The House
 */
// 分类列表(即概述)
Route::get('the_house/category','TheHouseController@getCategoryList')->name('the_house.category.getCategoryList');
Route::get('the_house/category/{category_slug}','TheHouseController@getListByCategorySlug')->name('the_house.category.getListByCategorySlug');
Route::get('the_house/{the_house_slug}','TheHouseController@getDetailByTheHouseSlug')->name('the_house.getDetailByTheHouseSlug');
Route::get('the_house/other/{category_slug}','TheHouseController@getOtherCategoryList')->name('the_house.other.getOtherCategoryList');
/**
 * Navbar
 */
Route::get('navbar/product_categories','NavbarController@getProductCategoryTitleList')->name('navbar.product_categories.getProductCategoryTitleList');
