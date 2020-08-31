<?php

return [

    // The default gateway to use
    'default' => 'paypal',

    // Add in each gateway here
    'gateways' => [
        // paypal
        'paypal' => [
            'driver' => 'PayPal_Express',
            'options' => [
                'solutionType' => '',
                'landingPage' => '',
                'headerImageUrl' => ''
            ]
        ],
        // 银联
        'unionpay' => [
            'driver' => 'UnionPay_Express',
            'options' => [
                'merId' => env('UNIONPAY_MERID'),
                'certPath' => env('UNIONPAY_CERT_PATH'),
                'certPassword' => env('UNIONPAY_CERT_PASSWORD'),
                'certDir' => env('UNIONPAY_CERT_DIR'),
                'returnUrl' => env('UNIONPAY_RETURN_URL'),
                'notifyUrl' => env('UNIONPAY_NOTIFY_URL'),
            ]
        ],
        // 支付宝-电脑网站
        'Alipay_AopPage' =>[
            'driver' => 'Alipay_AopPage',
            'options' => [
                'signType' => env('ALIPAY_SIGN_TYPE'),
                'appid' => env('ALIPAY_APP_ID'),
                'privateKey' => env('ALIPAY_PRIVATE_KEY'),
                'alipayPublicKey' => env('ALIPAY_PUBLIC_KEY'),
                'returnUrl' => env('ALIPAY_RETURN_URL'),
                'notifyUrl' => env('ALIPAY_NOTIFY_URL'),
            ]
        ],
        // 支付宝-即时到账
        'Alipay_LegacyExpress' => [
            'driver' => 'Alipay_LegacyExpress',
            'options' => [
                'partner' => env('ALI_EXPRESS_PID'),  // 合作伙伴pid
                'key' => env('ALI_EXPRESS_KEY'),  // md5密钥
                'sellerEmail' => env('ALI_EXPRESS_SELLER_EMAIL'),  // 商户邮箱
                'returnUrl' => env('ALI_EXPRESS_RETURN_URL'),  // 回调地址
                'notifyUrl' => env('ALI_EXPRESS_NOTIFY_URL'),  // 异步通知地址
                'cacert' => '/Users/gabbymrh/Desktop/cacert.pem' // cacert.pem文件位置
            ]
        ],
    ]

];
