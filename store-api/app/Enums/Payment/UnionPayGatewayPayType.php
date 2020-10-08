<?php

namespace App\Enums\Payment;

use BenSampo\Enum\Enum;


final class UnionPayGatewayPayType extends Enum
{
    const BankGateway = 51;  // 网银支付
    const ExpressPayment = 52;  // 快捷支付
    const UnionQrCode = 53;  // 银联扫码
    const WechatQrCode = 11;  // 微信扫码
    const AlipayQrCode = 21;  // 支付宝扫码
}
