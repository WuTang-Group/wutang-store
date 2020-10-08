<?php

namespace App\Enums\Payment;

use BenSampo\Enum\Enum;


final class UnionPayGatewayResultCode extends Enum
{
    const Success = 0;  // 请求成功
    const ParamEmpty = 7001;  // 请求参数为空(发起支付要求为GET)
    const AmountEmpty = 7002;  // 金额为空或小于等于0
    const RequiredParamEmpty = 7003;  // 必填参数 cpid或pay_type为空
    const SuspiciousAttack = 7011;  // 可疑攻击行为
    const FrequentRequest = 7103; // 同IP短时间内请求频繁
    const FrequentRequestByOrder = 7104;  // 同订单号短时间内请求频繁
    const CooperationClosed = 8101;  // 合作状态关闭
    const SignError = 8102;  // 签名错误
    const ExceedingDailyLimit = 8108;  // 超过日限额
    const NoBusinessAvailable = 8109;  // 无可用业务

}
