<?php

namespace App\Models;

class Payment extends Model
{
    protected $fillable = [
        'type', 'img', 'status','request_url'
    ];

//    public function getRequestUrlAttribute()
//    {
//        return config('app.url').$this->attributes['request_url'];
//    }

    /**
     * 一对多关联AlipayBankGateway模型
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alipayBankGateway()
    {
        return $this->hasMany(AlipayBankGateway::class);
    }

    /**
     * 一对多关联AlipayLegacyExpress模型
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alipayLegacyExpress()
    {
        return $this->hasMany(AlipayLegacyExpress::class);
    }

    /**
     * 一对多关联Unionpay模型
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unionpay()
    {
        return $this->hasMany(Unionpay::class);
    }

    /**
     * 一对多关联AlipayAopPage模型
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alipayAopPage()
    {
        return $this->hasMany(AlipayAopPage::class);
    }
}
