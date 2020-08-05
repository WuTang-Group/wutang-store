<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductCategoryStory extends Model
{
    protected $fillable = [
        'title','title_en','description','description_en',
        'banner','product_category_id'
    ];

    /**
     * 从属关联产品分类模型
     * @return BelongsTo
     */
    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
