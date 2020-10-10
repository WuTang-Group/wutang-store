<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * Class CacheKeyPrefix
 * 命名规范(注意大写):Redis key命名以key所代表的value类型结尾，以提高可读性
 * 一般:
 *   1) 第一段放置项目名或缩写 如 project
 *   2) 第二段把表名转换为key前缀 如, user:
 *   3) 第三段放置用于区分区key的字段,对应mysql中的主键的列名,如userid
 *   4) 第四段放置主键值或关键数据值,如18,16
 * 结合起来=>:PRO:USER:UID:18
 * @package App\Enums
 */
final class CacheKeyPrefix extends Enum
{
    /**
     * 数据表缓存类
     */
    const UserCache = 'QS:USERS:';  // 用户数据
    const OrderCache = 'QS:ORDERS:';  // 订单数据
    const ProductCache = 'QS:PRODUCTS:';  // 商品数据
    /**
     * 其他缓存类
     */
    const CaptchaCache = 'QS:CAPTCHA:';  // 验证码
    /**
     * Payment merchant相关
     */
    const AlipayLegacyExpress = 'QS:ALIPAYLEGACYEXPRESSES:';  // alipay_legacy_expresses 表
    const AlipayLegacyExpressAll = self::AlipayLegacyExpress . 'ALL';  // alipay_legacy_expresses模型全部数据
    const AlipayBankGateway = 'QS:ALIPAYBANKGATEWAYS:';  // alipay_bank_gateways表
    const UnionpayGateway = 'QS:UNIONPAYGATEWAYS:';  // union_pay_gateways
}
