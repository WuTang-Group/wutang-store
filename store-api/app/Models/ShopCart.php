<?php

namespace App\Models;


class ShopCart extends Model
{
    protected $fillable = ['amount', 'product_id', 'user_id'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
