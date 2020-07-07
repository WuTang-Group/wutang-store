<?php

/**
 * Admin路由组
 */
Route::group(['namespace' => 'Admin'], function () {
    require base_path('routes/admin/index.php');
});
