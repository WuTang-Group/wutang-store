<?php


namespace App\Helpers\Facades;


use Illuminate\Support\Facades\Facade;

class ResponseDataFacades extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'responseData';
    }
}
