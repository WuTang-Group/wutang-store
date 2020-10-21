<?php

namespace App\Models;

class AlipayLegacyExpress extends Model
{
    protected $fillable = [
        'pid','key','seller_email','return_url','notify_url','status','payment_id'
    ];
    // 对查询对key值进行加密
    public function getKeyAttribute()
    {
        return $this->attributes['key'] = encrypt($this->attributes['key']);
    }

    public function getReturnUrlAttribute()
    {
        return config('app.url').$this->attributes['return_url'];
    }

    public function getNotifyUrlAttribute()
    {
        return config('app.url').$this->attributes['notify_url'];
    }

    /**
     * 从属关联Payment模型
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
