<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('test',function(){
//    $data = ResponseData::paramError('123','456');
//    return $data;
    throw new \App\Exceptions\HttpResponseException(ResponseData::tokenExpired('123','456'));
});
