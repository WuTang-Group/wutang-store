<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class SkinCareStepStatus extends Enum
{
    const Recommend = 1; // 官方推荐
    const Optional = 0;  // 用户自选
}
