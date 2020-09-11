<?php


namespace App\Handlers;


use Illuminate\Support\Str;

class MemberCodeHandler
{
    // 生成会员码
    public static function generateCode($length = 8)
    {
        return strtoupper(Str::random($length));
    }
}
