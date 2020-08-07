<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class OrderStatusCode extends Enum
{
    const StatusPlaced = 1;  // 已下单
    const StatusPending = 2;  // 已付款
    const StatusDeliverd = 0;  // 未付款
    const StatusReceived = -1;  // 付款失败
}
