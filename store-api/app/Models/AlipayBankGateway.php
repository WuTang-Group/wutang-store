<?php

namespace App\Models;

class AlipayBankGateway extends Model
{
    protected $fillable = [
        ''
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
