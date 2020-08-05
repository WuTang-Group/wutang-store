<?php

namespace App\Models;

class Product extends Model
{
    protected $fillable = [
        'product_category_id',
        'product_name',
        'product_name_en',
        'thumbnail',
        'slug',
        'short_description',
        'short_description_en',
        'price',
        'sale_price',
        'stock',
        'seo_title',
        'seo_keyword',
        'seo_description',
        'benefit',
        'benefit_en',
        'tech_description',
        'tech_description_en',
        'description',
        'description_en',
        'usage',
        'usage_en',
        'main_image',
        'main_image_2',
        'benefit_image',
        'product_video',
        'status',
        'rating',
        'sold_count',
        'review_count'
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
