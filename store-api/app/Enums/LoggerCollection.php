<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class LoggerCollection extends Enum
{
    const SystemLog = 'system_logs';  // 系统日志
    const LoginLog = 'login_logs';  // 登录日志
    const PayLog = 'pay_logs';  // 支付日志
    const OrderLog = 'order_logs';  // 订单日志
    const AuthLog = 'auth_logs';  // 授权日志
    const OperationLog = 'operation_logs';  // 操作日志
    const OtherLog = 'other_logs'; // 其他日志

}
