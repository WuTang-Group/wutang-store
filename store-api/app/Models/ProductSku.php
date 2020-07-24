<?php

namespace App\Models;

class ProductSku extends Model
{
    protected $fillable = ['title', 'description', 'price', 'stock'];

    // 从属关联Product模型
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
