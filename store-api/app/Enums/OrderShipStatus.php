<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class OrderShipStatus extends Enum
{
    const Delivered  = 1;  // 已发货
    const Pending = -1;  // 未发货
    const Recevied = 0;  // 已签收
}
