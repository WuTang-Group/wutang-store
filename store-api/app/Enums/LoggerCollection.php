<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class LoggerCollection extends Enum
{
    const SystemLog = 'system_logs';
    const LoginLog = 'login_logs';
    const PayLog = 'pay_logs';
    const OrderLog = 'order_logs';
    const AuthLog = 'auth_logs';
    const OperationLog = 'operation_logs';
}
