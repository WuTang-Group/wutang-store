<?php
Route::group(['middleware' => 'api'], function () {
    Route::post('login', 'AuthController@login')->name('auth.login');
});
