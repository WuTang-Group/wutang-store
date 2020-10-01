<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class ContactUsType extends Enum
{
    const Order = 1;  // 订单相关
    const Common = 2;  // 普通咨询
    const Propose = 3;  // 支持建议
}
