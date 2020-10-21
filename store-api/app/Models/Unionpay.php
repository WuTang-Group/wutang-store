<?php

namespace App\Models;

class Unionpay extends Model
{
    /**
     * 从属关联Payment模型
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment()
    {
        return $this->belongsTo(Payment::class);
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
