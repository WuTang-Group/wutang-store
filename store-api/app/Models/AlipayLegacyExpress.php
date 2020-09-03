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
}
