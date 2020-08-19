<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class ShopCartItemType extends Enum
{
    const AddItem = 'add';  // 点击+号递增时
    const ReduceItem = 'reduce';  // 点击-号递减时
    const FixedItem = 'fixed';  // 传递固定数量时
}
