<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnionPayGateway extends Model
{
    protected $fillable = [
        'payment_id', 'cpid', 'pay_type', 'jump_url', 'notify_url','status'
    ];

    /**
     * 从属关联Payment模型
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function getJumpUrlAttribute()
    {
        return config('app.url').$this->attributes['jump_url'];
    }

    public function getNotifyUrlAttribute()
    {
        return config('app.url').$this->attributes['notify_url'];
    }
}
