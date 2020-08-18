<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class ShopCartItemType extends Enum
{
    const AddItem = 'add';
    const ReduceItem = 'reduce';
    const FixedItem = 'fixed';
}
