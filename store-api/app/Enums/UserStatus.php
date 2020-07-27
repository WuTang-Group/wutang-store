<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * Class UserStatus
 * @package App\Enums
 */
final class UserStatus extends Enum
{
    const Enabled = 1;      // 启用
    const Disabled = -1;    // 禁用
    const NotActive = 0;    // 未激活(注销)
}
