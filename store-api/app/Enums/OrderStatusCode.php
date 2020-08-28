<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class OrderStatusCode extends Enum
{
    const StatusPlaced = 1;  // 已付款
    const StatusDeliverd = 0;  // 待付款
    const StatusReceived = -1;  // 付款失败
    const StatusCanceled = -2; // 取消订单
}
