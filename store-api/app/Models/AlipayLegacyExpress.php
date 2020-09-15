<?php

namespace App\Models;

class AlipayLegacyExpress extends Model
{
    protected $fillable = [
        'pid','key','seller_email','return_url','notify_url','status'
    ];
    // 对查询对key值进行加密
    public function getKeyAttribute()
    {
        return $this->attributes['key'] = encrypt($this->attributes['key']);
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
