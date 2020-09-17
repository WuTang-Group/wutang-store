<?php


namespace App\Handlers;


use Illuminate\Support\Str;

class MemberCodeHandler
{
    /**
     * 生成会员码
     * @param int $length 长度
     * @return string 会员码
     */
    public static function generateCode($length = 8)
    {
        //return strtoupper(Str::random($length));
        $randomStr = str_split(strtoupper(Str::random($length)));
        for ($i = 0; $i < count($randomStr); $i++) {
            $randomStr[$i] = is_numeric($randomStr[$i]) ? chr(mt_rand(65, 90)) : $randomStr[$i]; // ASCII码65-90为大写英文字母
        }
        return implode('', $randomStr);
    }
}
