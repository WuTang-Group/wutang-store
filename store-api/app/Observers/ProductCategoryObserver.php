<?php

namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Models\ProductCategory;

class ProductCategoryObserver
{
    public function saving(ProductCategory $category)
    {
        // XSS 过滤
        $category->describe = clean($category->describe, 'product_short_description');

        if (!$category->slug) {
            $category->slug = app(SlugTranslateHandler::class)->translate($category->describe);
        }
    }
}
