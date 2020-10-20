<?php

namespace App\Observers;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

use App\Handlers\SlugTranslateHandler;
use App\Models\Product;

class ProductObserver
{
    public function saving(Product $product)
    {
        // XSS 过滤
        $product->short_description = clean($product->short_description, 'custom');

        if (!$product->slug) {
            $product->slug = app(SlugTranslateHandler::class)->translate($product->short_description);
        }
    }
}
