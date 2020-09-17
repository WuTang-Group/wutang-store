<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * Class SocketMode
 * Socket服务端通知标准(json格式)
 * {"mode":"枚举内类型","data":{"xx":"xxxxx","yy":"yyyy"}}
 * Socket服务端通知标准(数组格式)
 * ['mode' => '枚举内类型','data'=>'具体数据']
 * @package App\Enums
 */
final class SocketMode extends Enum
{
    /**
     * service
     */
    const ServerHeartCheck = 'server_heart_check';  // 心跳检测
    const ServerOrderNotify = 'server_order_notify';  // 服务端订单通知
    const ServerCommonMessage = 'server_common_message';  // 普通消息

    /**
     * client
     */
}
