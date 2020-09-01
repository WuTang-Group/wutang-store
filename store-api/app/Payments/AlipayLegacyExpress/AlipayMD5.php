<?php


namespace App\Payments\AlipayLegacyExpress;


/* *
 * MD5
 * 详细：MD5加密
 * 版本：3.3
 * 日期：2012-07-19
 * 更改日期: 2020-08-31
 */

class AlipayMD5
{

    /**
     * 签名字符串
     * @param $prestr string 需要签名的字符串
     * @param $key string 私钥
     * @return string 签名结果
     */
    public static function md5Sign($prestr, $key)
    {
        $prestr = $prestr . $key;
        return md5($prestr);
    }

    /**
     * 验证签名
     * @param $prestr string 需要签名的字符串
     * @param $sign string 签名结果
     * @param $key string 私钥
     * @return bool 签名结果
     */
    public static function md5Verify($prestr, $sign, $key)
    {
        $prestr = $prestr . $key;
        $mysgin = md5($prestr);

        if ($mysgin == $sign) {
            return true;
        } else {
            return false;
        }
    }
}
