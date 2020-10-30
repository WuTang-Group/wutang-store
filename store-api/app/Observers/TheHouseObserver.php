<?php

namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Models\TheHouse;
use Illuminate\Support\Str;

class TheHouseObserver
{
    public function saving(TheHouse $theHouse)
    {
        // XSS 过滤
//        $theHouse->describe = clean($theHouse->describe, 'custom');
//
//        if (!$theHouse->slug) {
//            $theHouse->slug = app(SlugTranslateHandler::class)->translate($theHouse->describe);
//        }
        if (!$theHouse->slug) {
            $theHouse->slug = Str::random();
        }
    }
}
