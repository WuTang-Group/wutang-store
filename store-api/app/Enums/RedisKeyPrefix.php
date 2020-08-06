<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * Class RedisKeyPrefix
 * 命名规范:Redis key命名以key所代表的value类型结尾，以提高可读性
 * 示例=>user:basic.info:{userid}:string
 * 或=>hmset user:1 name tom age 19 favor football
 * @package App\Enums
 */
final class RedisKeyPrefix extends Enum
{
    const User = 'user:';
}
