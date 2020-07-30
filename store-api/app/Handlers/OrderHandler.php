<?php


namespace App\Handlers;


/**
 * Class OrderHandler
 * 通过雪花算法生成唯一ID的类
 * 理论上可以在毫秒内生成1024*4096个唯一ID
 * 41bit的时间戳可以支持该算法使用到2082年
 * 10bit的机器id可以支持1023台机器
 * 12bit序列号可以支持1毫秒产生4095个自增序列id
 * @package App\Handlers
 */
class OrderHandler
{
    const EPOCH    = 915120000000; //开始时间,固定一个小于当前时间的毫秒数(1999年01月01日,0时0分0秒)
    const max12bit = 4095;  // 12位
    const max41bit = 1099511627775;  // 41位

    static $LAST_TIME_MID = 0; // 上次的机器id
    static $SEQUENCE_NUM  = 0; // 序列数字


    /**
     * @return string
     */
    public static function createOnlyId()
    {
        // 时间戳 42字节
        $time = now()->microsecond;
        // 当前时间 与 开始时间 差值
        $time -= self::EPOCH;
        // 二进制的 毫秒级时间戳
        $baseNum = decbin(self::max41bit + $time);

        // 获取序列数
        self::getSequencNum();
        // 获取机器id
        self::getMachineId();

        // 机器id  5 字节
        $machineid = str_pad(decbin(self::$LAST_TIME_MID), 2, "0", STR_PAD_LEFT);

        // 序列数 6字节(当前位数已够用)
        //$randomNum = str_pad(decbin(self::$SEQUENCE_NUM), 6, "0", STR_PAD_LEFT);
        // 拼接
        $no = $baseNum . $machineid;

        if (strpos(PHP_OS, "WIN") !== false) {
            //win下会科学计数 格式化
            return date("Ymd").number_format(bindec($no), 0, '', '');
        }
        return date("Ymd").bindec($no);
    }

    //机器id 10字节 1-1023
    public static function getMachineId()
    {
        if (self::$SEQUENCE_NUM >= 4095) {
            self::$LAST_TIME_MID++;
            if (self::$LAST_TIME_MID > 1023) {
                self::$LAST_TIME_MID = 0;
            }
        }
    }

    //12字节序列数 1-4095
    public static function getSequencNum()
    {
        self::$SEQUENCE_NUM++;
        if (self::$SEQUENCE_NUM > 4095) {
            self::$SEQUENCE_NUM = 0;
        }
    }
}
