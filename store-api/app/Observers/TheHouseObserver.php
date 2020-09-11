<?php

namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Models\TheHouse;

class TheHouseObserver
{
    public function saving(TheHouse $theHouse)
    {
        // XSS 过滤
        $theHouse->describe = clean($theHouse->describe, 'short_description');

        if (!$theHouse->slug) {
            $theHouse->slug = app(SlugTranslateHandler::class)->translate($theHouse->describe);
        }
    }
}
