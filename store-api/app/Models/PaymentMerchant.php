<?php

namespace App\Models;

class PaymentMerchant extends Model
{
    protected $fillable = [
        'type', 'return_url', 'notify_url', 'status'
    ];

    // 一对多关联 AlipayBankGateway
    public function alipayGatewaies()
    {
        return $this->hasMany(AlipayGateway::class);
    }

    // 一对多关联 AlipayLegacyExpress
    public function alipayLegacyExpresses()
    {
        return $this->hasMany(AlipayLegacyExpress::class);
    }

    // 一对多关联 Unionpay
    public function unionpaies()
    {
        return $this->hasMany(Unionpay::class);
    }
}
