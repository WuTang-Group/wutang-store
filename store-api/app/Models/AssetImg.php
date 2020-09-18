<?php

namespace App\Models;

class AssetImg extends Model
{
    protected $fillable = [
        'img',
        'img_location',
        'type',
        'product_id',
    ];

    /**
     * 从属关联产品模型
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
