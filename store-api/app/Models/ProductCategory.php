<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategory extends Model
{
    protected $fillable = [
        'title',
        'title_en',
        'describe',
        'describe_en',
        'banner',
        'description',
        'description_en',
        'img',
        'parent_id'
    ];

    /**
     * 一对多关联产品分类故事模型
     * @return HasMany
     */
    public function productCategoryStories()
    {
        return $this->hasMany(ProductCategoryStory::class);
    }

}
