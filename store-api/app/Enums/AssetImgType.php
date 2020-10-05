<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * Class AssetImgType
 * 图片类型
 * @package App\Enums
 */
final class AssetImgType extends Enum
{
    const Banner = 'banner';  // banner
    const Discover = 'discover'; // discover
    const ThisMonthRecommannd = 'this_month_recommand'; // 当月推荐
}
