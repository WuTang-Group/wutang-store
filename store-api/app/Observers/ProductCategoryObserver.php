<?php

namespace App\Observers;

use App\Models\ProductCategory;
use Illuminate\Support\Str;

class ProductCategoryObserver
{
    public function saving(ProductCategory $category)
    {
        // XSS 过滤
//        $category->describe = clean($category->describe, 'custom');

        if (!$category->slug) {
            $category->slug = Str::random();
        }
    }
}
