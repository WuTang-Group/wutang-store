<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * Class Roles
 * @package App\Enums
 */
final class Roles extends Enum
{
    const Admin =   'admin';  // 管理员
    const Customer = 'customer'; // 普通用户
    const Visitor = 'visitor'; // 访客用户
    const Editor = 'editor';  // 维护人员-网站后台文案和图片维护
}
