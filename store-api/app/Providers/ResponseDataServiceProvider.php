<?php

namespace App\Providers;

use App\Helpers\ResponseData;
use Illuminate\Support\ServiceProvider;

class ResponseDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 绑定类
        app()->bind('responseData',function(){
            return new ResponseData();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
