<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class ProductStatusCode extends Enum
{
    const StatusNew = 1;  // 新品
    const StatusBestSeller = 2;  // 畅销
    const StatusPromotion = 3;  // 促销
    const StatusOff = -1;  // 下架
}
