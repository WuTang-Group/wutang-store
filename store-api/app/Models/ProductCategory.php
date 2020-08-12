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

    // 产品分类父类
    public function parent() {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }

    // 产品分类子类
    public function children() {
        return $this->hasMany(ProductCategory::class, 'parent_id');
    }

    // 一对多关联产品表
    public function products()
    {
        return $this->hasMany(Product::class);
    }


}
