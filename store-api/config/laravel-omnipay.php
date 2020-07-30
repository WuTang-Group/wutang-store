<?php

return [

    // The default gateway to use
    'default' => 'paypal',

    // Add in each gateway here
    'gateways' => [
        'paypal' => [
            'driver' => 'PayPal_Express',
            'options' => [
                'solutionType' => '',
                'landingPage' => '',
                'headerImageUrl' => ''
            ]
        ],
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
        ]
    ]

];
