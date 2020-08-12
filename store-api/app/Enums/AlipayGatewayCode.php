<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class AlipayGatewayCode extends Enum
{
    // 平台受理
    const RequestSuccess = 'success';  // 受理成功
    const RequestFaild = 'failure';  // 受理失败
    // 支付相关
    const PaySuccess = 'succ';  // 支付成功
    const PayFaild = 'fail';  // 支付失败
    const PayPending = 'handling';  // 处理中

}
