<?php

/**
 * Alipay legacy express
 */
Route::get('alipay/legacy_express','Payment\AlipayLegacyExpressController@index')->name('alipay.legacy_express.index');
Route::post('alipay/legacy_express','Payment\AlipayLegacyExpressController@store')->name('alipay.legacy_express.store');
Route::put('alipay/legacy_express','Payment\AlipayLegacyExpressController@update')->name('alipay.legacy_express.update');
Route::delete('alipay/legacy_express','Payment\AlipayLegacyExpressController@delete')->name('alipay.legacy_express.delete');
