<?php

namespace App\Enums\Payment;

use BenSampo\Enum\Enum;


final class AlipayCode extends Enum
{
    const WAIT_BUYER_PAY = 'WAIT_BUYER_PAY';  // 交易创建，等待买家付款
    const TRADE_CLOSED = 'TRADE_CLOSED';  // 在指定时间段内未支付时关闭的交易;在交易完成全额退款成功时关闭的交易
    const TRADE_SUCCESS = 'TRADE_SUCCESS';  // 交易成功，且可对该交易做操作，如：多级分润、退款等
    const TRADE_FINISHED = 'TRADE_FINISHED';  // 交易成功且结束，即不可再做任何操作
}
