<?php

namespace App\Models;

class AlipayBankGateway extends Model
{
    protected $fillable = [
        'payment_id','merch_id','product','key','return_url','notify_url','status'
    ];

    /**
     * 从属关联Payment模型
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

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
}
