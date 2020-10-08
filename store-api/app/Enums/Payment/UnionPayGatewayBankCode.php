<?php

namespace App\Enums\Payment;

use BenSampo\Enum\Enum;


final class UnionPayGatewayBankCode extends Enum
{
    /**
     * 银行code，注释表示未开通
     */
    const POST = '中国邮政储蓄银行';  // 中国邮政储蓄银行
    const ICBC = '中国工商银行';  // 中国工商银行
//    const CIB = '兴业银行';  // 兴业银行
    const CCB = '中国建设银行';  // 中国建设银行
    const BOC = '中国银行';  // 中国银行
    const ABC = '中国农业银行';  // 中国农业银行
//    const CEB = '中国光大银行';  // 中国光大银行
    const CGB = '广发银行';  // 广发银行
//    const HXB = '华夏银行';  // 华夏银行
//    const BOCO = '交通银行';  // 交通银行
//    const CMBCHINA = '招商银行';  // 招商银行
//    const CMBC = '中国民生银行';  // 中国民生银行
//    const PAB = '平安银行';  // 平安银行
//    const BCCB = '北京银行';  // 北京银行
//    const SPDB = '浦发银行';  // 浦发银行
    const SHB = '上海银行';   // 上海银行
    const ECITIC = '中信银行';  // 中信银行
}
