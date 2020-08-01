<?php

Route::get('/', function () { return view('home'); });

Route::group(['middleware' => ['guest']], function () use ($router) {
	Route::get('login', function () { return view('auth.login'); });
	Route::get('register', function () { return view('auth.register'); });
	Route::get('forgot-password', function () { return view('auth.forgot-password'); });
	Route::get('reset-password', function () { return view('auth.reset-password'); });
	Route::get('thank-you', function () { return view('auth.thank-you'); });
});

Route::group(['prefix' => 'my-account', 'middleware' => ['auth']], function () use ($router) {
	Route::get('/', function () { return view('my-account.index'); });
	Route::get('order/{order_number}', function () { return view('my-account.order-details'); });
	Route::get('tracking', function () { return view('my-account.tracking'); });
	Route::get('profile', function () { return view('my-account.profile'); });

	/*Route::get('/', 'AccountController@index');
	Route::get('order/{order_number}', 'AccountController@order');
	Route::get('profile', 'AccountController@profile');*/


	/*Route::get('checkout', 'CheckoutController@index');
	Route::get('checkout/thank-you', 'CheckoutController@checkout');*/
	Route::get('checkout', function () { return view('checkout'); });
});

Route::group(['middleware' => ['web']], function () use ($router) {
	/*Route::get('products', 'ProductController@index');
	Route::get('products/{slug}', 'ProductController@show');*/
	Route::get('products', function () { return view(''); });
	Route::get('product/{slug}', function () { return view(''); });

	/*Route::get('product-category/{slug}', 'ProductCategoryController@index');
	Route::get('product-category/{slug}/story', 'ProductCategoryController@show');*/
	Route::get('product-category/{slug}', function () { return view(''); });
	Route::get('product-category/{slug}/story', function () { return view(''); });

	/*Route::get('wishlist', 'ShoppingController@wishlist');
	Route::get('cart', 'ShoppingController@cart');*/
	Route::get('wishlist', function () { return view('wishlist'); });
	Route::get('cart', function () { return view('cart'); });
});

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
	Route::get('/', 'TheHouseController@index');
	Route::get('{slug}', 'TheHouseController@show');
});

Route::get('e-boutique-services', function () { return view('others.e-boutique-services'); });
Route::get('contact-us', function () { return view('others.contact-us'); });
Route::get('customer-services', function () { return view('others.customer-services'); });
Route::get('shipping', function () { return view('others.shipping'); });
Route::get('privacy-policy', function () { return view('others.privacy-policy'); });
Route::get('terms-and-conditions', function () { return view('others.terms-and-conditions'); });

Route::get('test',function(){
//    $data = ResponseData::paramError('123','456');
//    return $data;
    throw new \App\Exceptions\HttpResponseException(ResponseData::tokenExpired('123','456'));
});
