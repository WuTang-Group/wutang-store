<?php

namespace App\Models;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'image', 'on_sale',
        'rating', 'sold_count', 'review_count', 'price'
    ];
    protected $casts = [
        'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
    ];
    // 一对多关联ProductSku模型
    public function skus()
    {
        return $this->hasMany(ProductSku::class);
    }
}
