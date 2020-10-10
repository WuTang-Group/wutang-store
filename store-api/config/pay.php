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
    // 支付宝网关
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
        'cacert' => resource_path('pay/alipay/cacert.pem')  // cacert.pem文件位置
    ],
    // 银联网关
    'unionpay_gateway' => [
        'cpid' => '1289',  // CP标识
        'cp_trade_no' => '',  // 订单号
        'fee' => '',  // 支付金额(以分为单位)
        'jump_url' => 'http://120.79.173.163:9100/unionpay_gateway/return',  // 前端回调地址
        'notify_url' => 'http://120.79.173.163:9100/unionpay_gateway/notify', // 异步通知地址
        'sign' => '',  // 签名
        'key' => 'elo5glm8jiu15x', // 支付密钥
        'pay_type' => 51,  // 支付方式 默认网银，参考UnionPayGatewayPayType
        'bank_code' => 'POST'  //  银行，代码参考UnionPayGatewayBankCode枚举类
    ],
];
