<?php

return [

	// The default gateway to use
	'default' => 'paypal',

	// Add in each gateway here
	'gateways' => [
		'paypal' => [
			'driver'  => 'PayPal_Express',
			'options' => [
				'solutionType'   => '',
				'landingPage'    => '',
				'headerImageUrl' => ''
			]
		],
        'unionpay' => [
            'driver' => 'UnionPay_Express',
            'options' => [
                'merId' => '777290058184121',
                'certPath' => '/Users/gabbymrh/DevelopTools/union-pay-cert/acp_test_sign.pfx',
                'certPassword' =>'000000',
                'certDir'=>'/Users/gabbymrh/DevelopTools/union-pay-cert',
                'returnUrl' => 'http://store.wutang.com/unionpay/return',
                'notifyUrl' => 'dsadadas'
            ]
        ]
	]

];
