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
        'merch_id' => env('ALI_GATEWAY_MECH_ID'),
        'product' => env('ALI_GATEWAY_PRODUCT'),
        'key' => env('ALI_GATEWAY_KEY'),
        'bank_code' => '',
        'notify_url' => env('ALI_GATEWAY_NOTIFY_URL'),
        'return_url' => env('ALI_GATEWAY_RETURN_URL'),
        'extends' => '',
    ],
    // 支付宝即时到账
    'alipay_legacy_express' => [
        'service' => 'create_direct_pay_by_user', // 产品类型
        'partner' => env('ALI_EXPRESS_PID'),  // 合作伙伴pid
        'key' => env('ALI_EXPRESS_KEY'),  // md5密钥
        'sign_type' => strtoupper('MD5'),
        'seller_email' => env('ALI_EXPRESS_SELLER_EMAIL'),  // 商户邮箱
        'payment_type' => '1',
        'return_url' => env('ALI_EXPRESS_RETURN_URL'),  // 回调地址
        'notify_url' => env('ALI_EXPRESS_NOTIFY_URL'),  // 异步通知地址
        'anti_phishing_key' => '', // 防钓鱼时间戳
        'exter_invoke_ip' => '', //客户端ip地址
        'input_charset' => strtolower('utf-8'),
        'transport' => 'http',
        'cacert' => getcwd().'\\cacert.pem'  // cacert.pem文件位置,目前为当前文件夹位置
    ],
];
