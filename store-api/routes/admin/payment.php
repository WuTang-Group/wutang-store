<?php

/**
 * Alipay legacy express
 */
Route::get('alipay/legacy_express','Payment\AlipayLegacyExpressController@index')->name('alipay.legacy_express.index');
Route::post('alipay/legacy_express','Payment\AlipayLegacyExpressController@store')->name('alipay.legacy_express.store');
Route::put('alipay/legacy_express/{id}','Payment\AlipayLegacyExpressController@update')->name('alipay.legacy_express.update');
Route::delete('alipay/legacy_express/{id}','Payment\AlipayLegacyExpressController@delete')->name('alipay.legacy_express.delete');
Route::put('alipay/legacy_express/status/{id}','Payment\AlipayLegacyExpressController@updateStatus')->name('alipay.legacy_express.status.updateStatus');
/**
 * payment
 */
Route::get('payment', 'Payment\paymentController@getPayments')->name('payment');
Route::post('payment/{id}', 'Payment\paymentController@paymentImgStoreById')->name('payment');
/**
 * Alipay Bank Gateway
 */
Route::get('alipay/bank_gateway', 'Payment\AlipayBankGatewayController@index')->name('alipay.bank_gateway.index');
Route::post('alipay/bank_gateway', 'Payment\AlipayBankGatewayController@store')->name('alipay.bank_gateway.store');
Route::put('alipay/bank_gateway/{id}', 'Payment\AlipayBankGatewayController@update')->name('alipay.bank_gateway.update');
Route::put('alipay/bank_gateway/status/{id}', 'Payment\AlipayBankGatewayController@updateStatus')->name('alipay.bank_gateway.updateStatus');
Route::delete('alipay/bank_gateway/{id}', 'Payment\AlipayBankGatewayController@delete')->name('alipay.bank_gateway.delete');
/**
 * Union Pay Gateway
 */
Route::get('union_pay/gateway', 'Payment\UnionPayGatewayController@index')->name('union.pay.gateway.index');
Route::post('union_pay/gateway', 'Payment\UnionPayGatewayController@store')->name('union.pay.gateway.store');
Route::put('union_pay/gateway/{id}', 'Payment\UnionPayGatewayController@update')->name('union.pay.gateway.update');
Route::put('union_pay/gateway/status/{id}', 'Payment\UnionPayGatewayController@updateStatus')->name('union.pay.gateway.updateStatus');
Route::delete('union_pay/gateway/{id}', 'Payment\UnionPayGatewayController@delete')->name('union.pay.gateway.delete');

