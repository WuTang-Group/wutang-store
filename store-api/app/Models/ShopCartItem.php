<?php

namespace App\Models;


class ShopCartItem extends Model
{
    protected $fillable = ['amount', 'product_sku_id','product_id', 'user_id'];

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
