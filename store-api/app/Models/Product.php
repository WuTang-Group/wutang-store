<?php

namespace App\Models;

use App\Enums\ProductStatusCode;

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

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

//    public function getStatusAttribute()
//    {
//         switch ($this->attributes['status'])
//         {
//             case ProductStatusCode::StatusNew:
//             {
//                 return '新品';
//             }
//             case ProductStatusCode::StatusBestSeller:
//             {
//                 return '畅销';
//             }
//             case ProductStatusCode::StatusPromotion:
//             {
//                 return '促销';
//             }
//             case ProductStatusCode::StatusOff;
//             {
//                 return '下架';
//             }
//         }
//    }
}
