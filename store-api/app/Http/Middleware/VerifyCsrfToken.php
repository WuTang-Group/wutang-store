<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'alipay/bank_gateway/notify',
        'alipay/aop_page/notify',
        'alipay/legacy_express/notify',
        'unionpay/return',
        'unionpay/notify',
        'unionpay_gateway/notify'
    ];
}
