<?php

namespace App\Models;

class PaymentMerchant extends Model
{
    protected $fillable = [
        'type', 'return_url', 'notify_url', 'status'
    ];

    // 一对多关联 AlipayBankGateway
    public function alipayGateways()
    {
        return $this->hasMany(AlipayBankGateway::class);
    }

    // 一对多关联 AlipayLegacyExpress
    public function alipayLegacyExpresses()
    {
        return $this->hasMany(AlipayLegacyExpress::class);
    }

    // 一对多管理 AlipayAopPage
    public function alipayAopPages()
    {
        return $this->hasMany(AlipayAopPage::class);
    }

    // 一对多关联 Unionpay
    public function unionpays()
    {
        return $this->hasMany(Unionpay::class);
    }
}
