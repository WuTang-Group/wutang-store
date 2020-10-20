<?php

namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Http\Controllers\Admin\TheHouseCategoryController;
use App\Models\TheHouseCategory;

class TheHouseCategoryObserver
{
    public function saving(TheHouseCategory $theHouseCategory)
    {
        $theHouseCategory->sub_title = clean($theHouseCategory->sub_title, 'custom');
        if (!$theHouseCategory->slug) {
            $theHouseCategory->slug = app(SlugTranslateHandler::class)->translate($theHouseCategory->sub_title);
        }
    }
}
