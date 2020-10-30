<?php

namespace App\Observers;

use App\Models\TheHouseCategory;
use Illuminate\Support\Str;

class TheHouseCategoryObserver
{
    public function saving(TheHouseCategory $theHouseCategory)
    {
//        $theHouseCategory->sub_title = clean($theHouseCategory->sub_title, 'custom');
//        if (!$theHouseCategory->slug) {
//            $theHouseCategory->slug = app(SlugTranslateHandler::class)->translate($theHouseCategory->sub_title);
//        }
        if (!$theHouseCategory->slug) {
            $theHouseCategory->slug = Str::random();
        }
    }
}
