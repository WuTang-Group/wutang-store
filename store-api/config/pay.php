<?php

return [
    // 支付宝
    'alipay' => [
        'app_id' => env('ALIPAY_APP_ID'),
        'ali_public_key' => env('ALIPAY_PUBLIC_KEY'),
        'private_key' => env('ALIPAY_PRIVATE_KEY'),
        'return_url' => env('ALIPAY_RETURN_URL'),
        'notify_url' => env('ALIPAY_NOTIFY_URL'),
        'log' => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],
    // 微信
    'wechat' => [
        'app_id' => '',
        'mch_id' => '',
        'key' => '',
        'cert_client' => '',
        'cert_key' => '',
        'log' => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
    // 支付网关
    'alipay_gateway' => [
        'merch_id' => '100101',
        'product' => '802',
        'key' => 'RrEUIbQ0C3JZdy9XBgZQ09ZPW22U7dNQ',
        'bank_code' => '',
        'notify_url' => 'http://www.baidu.com',
        'return_url' => 'http://store.wutang.com/api/aligateway/return',
        'extends' => '',
    ]
];
