<?php

namespace App\Models;

use App\Enums\ProductStatusCode;
use App\Exceptions\InternalException;

class Product extends Model
{
    protected $fillable = [
        'product_category_id',
        'product_name',
        'product_name_en',
        'thumbnail',
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
        'spec',
        'sold_count',
        'review_count',
        'parent_id',
        'level'
    ];
    protected $casts = [
        'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
    ];

    // 产品父级
    public function parent() {
        return $this->belongsTo(Product::class, 'parent_id');
    }

    // 产品子级
    public function child() {
        return $this->hasMany(Product::class, 'parent_id');
    }

    // 一对多关联ProductSku模型
    public function skus()
    {
        return $this->hasMany(ProductSku::class);
    }

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function decreaseStock($amount)
    {
        if ($amount < 0) {
            throw new InternalException('减库存不可小于0');
        }

        return $this->whereId($this->id)->where('stock', '>=', $amount)->decrement('stock', $amount);
    }

    public function addStock($amount)
    {
        if ($amount < 0) {
            throw new InternalException('加库存不可小于0');
        }
        $this->increment('stock', $amount);
    }

    public function scopeType($query,$productStatus)
    {
        return $query->whereStatus($productStatus);
    }
//    public function getStatusAttribute()
//    {
//         switch ($this->attributes['status'])
//   s      {
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
