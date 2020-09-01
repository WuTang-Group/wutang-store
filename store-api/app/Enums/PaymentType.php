<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class PaymentType extends Enum
{
    const AlipayBankGateway = 'alipay_bank_gateway';  // 支付宝银行网关
    const AlipayLegacyExpress = 'alipay_legacy_express';  // 支付宝即时到账
    const AlipayAopPage = 'alipay_aop_page';  // 支付宝电脑网页
    const Unionpay = 'unionpay';  // 银联支付
}
