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
}
