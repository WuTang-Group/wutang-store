<?php

namespace App\Models;

class OrderItem extends Model
{
    protected $fillable = ['amount', 'price', 'rating', 'review', 'reviewed_at'];
    protected $dates = ['reviewed_at'];

    // 从属关联商品模型
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // 从属关联商品sku模型
    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }

    // 从属关联订单模型
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
