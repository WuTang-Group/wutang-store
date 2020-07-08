<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('test',function(){
    $data = ResponseData::paramError('123','456');
    return $data;
});
