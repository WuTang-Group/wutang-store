<?php

/**
 * Alipay legacy express
 */
Route::get('alipay/legacy_express','Payment\AlipayLegacyExpressController@index')->name('alipay.legacy_express.index');
Route::post('alipay/legacy_express','Payment\AlipayLegacyExpressController@store')->name('alipay.legacy_express.store');
Route::put('alipay/legacy_express/{id}','Payment\AlipayLegacyExpressController@update')->name('alipay.legacy_express.update');
Route::delete('alipay/legacy_express/{id}','Payment\AlipayLegacyExpressController@delete')->name('alipay.legacy_express.delete');
Route::put('alipay/legacy_express/status/{id}','Payment\AlipayLegacyExpressController@updateStatus')->name('alipay.legacy_express.status.updateStatus');
