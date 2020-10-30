<?php

namespace App\Observers;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

use App\Models\Product;
use Illuminate\Support\Str;

class ProductObserver
{
    public function saving(Product $product)
    {
        // XSS 过滤
//        $product->short_description = clean($product->short_description, 'custom');
//
//        if (!$product->slug) {
//            $product->slug = app(SlugTranslateHandler::class)->translate($product->short_description);
//        }
        if (!$product->slug) {
            $product->slug = Str::random();
        }
    }
}
