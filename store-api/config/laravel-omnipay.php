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
        // 支付宝
        'alipay' =>[
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
    ]

];
