<?php

Route::group(['middleware' => ['web']], function () use ($router) {
	Route::get('/', 'Web\HomeController@index');

	Route::group(['middleware' => ['guest.mode']], function () use ($router) {
		Route::get('login', function () { return view('auth.login'); })->name('login');
		Route::get('register', 'Web\AuthController@register');
		Route::get('forgot-password', 'Web\AuthController@forgot');
		//Route::get('reset-password', function () { return view('auth.reset-password'); });
		//Route::get('thank-you', function () { return view('auth.thank-you'); });
	});

	Route::group(['middleware' => ['auth.mode']], function () use ($router) {
		Route::group(['prefix' => 'my-account'], function () use ($router) {
			Route::get('/', 'Web\AccountController@index')->name('my-account');
			Route::get('order/{order_no}', 'Web\AccountController@show');
			Route::get('tracking', function () { return view('my-account.tracking'); });
			Route::get('profile', 'Web\AccountController@profile');
		});

		/*Route::get('checkout', 'CheckoutController@index');
		Route::get('checkout/thank-you', 'CheckoutController@checkout');*/
		//Route::get('checkout', function () { return view('checkout'); })->name('checkout');
		Route::get('checkout', 'Web\CheckoutController@index')->name('checkout');
	});

	Route::get('products', 'Web\ProductController@index');
	Route::get('product/{slug}', 'Web\ProductController@show');

	Route::get('product-category', 'Web\ProductCategoryController@index');
	Route::get('product-category/{slug}', 'Web\ProductCategoryController@show')->name('category');
	Route::get('product-category/{slug}/story', 'Web\ProductCategoryController@story')->name('category.story');

	Route::get('wishlist', 'Web\ShoppingController@wishlist');
	Route::get('cart', 'Web\ShoppingController@cart')->name('cart');
	Route::get('refresh_cart', 'Web\ShoppingController@refresh_cart');

	Route::group(['prefix' => 'the-brand'], function () use ($router) {
		Route::get('/', function () { return view('the-brand.index'); });
		Route::get('story', function () { return view('the-brand.story'); });
		Route::get('queen-spades-and-you', function () { return view('the-brand.queen-spades-and-you'); });
		Route::get('start-from-your-inner-skin', function () { return view('the-brand.start-from-your-inner-skin'); });
	});

	Route::group(['prefix' => 'product-idea'], function () use ($router) {
		Route::get('/', function () { return view('product-idea.index'); });
		Route::get('lithotherapy-technology', function () { return view('product-idea.lithotherapy-technology'); });
		Route::get('queen-spades-and-you', function () { return view('product-idea.queen-spades-and-you'); });
		Route::get('arts', function () { return view('product-idea.arts'); });
	});

	Route::group(['prefix' => 'the-house'], function () use ($router) {
		Route::get('/', 'Web\TheHouseController@index');
		Route::get('{slug}', 'Web\TheHouseController@show');
	});

	Route::get('e-boutique-services', function () { return view('others.e-boutique-services'); });
	Route::get('contact-us', function () { return view('others.contact-us'); });
	Route::get('customer-services', function () { return view('others.customer-services'); });
	Route::get('shipping', function () { return view('others.shipping'); });
	Route::get('privacy-policy', function () { return view('others.privacy-policy'); });
	Route::get('terms-and-conditions', function () { return view('others.terms-and-conditions'); });
});