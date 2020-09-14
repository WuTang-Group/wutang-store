<?php

namespace App\Models;

class Payment extends Model
{
    protected $fillable = [
        'type', 'img', 'status'
    ];

    /**
     * 一对一关联AlipayBankGateway模型
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alipayBankGateway()
    {
        return $this->hasOne(AlipayBankGateway::class);
    }

    /**
     * 一对一关联AlipayLegacyExpress模型
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alipayLegacyExpress()
    {
        return $this->hasOne(AlipayLegacyExpress::class);
    }

    /**
     * 一对一关联Unionpay模型
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unionpay()
    {
        return $this->hasOne(Unionpay::class);
    }

    /**
     * 一对一关联AlipayAopPage模型
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alipayAopPage()
    {
        return $this->hasOne(AlipayAopPage::class);
    }
}
