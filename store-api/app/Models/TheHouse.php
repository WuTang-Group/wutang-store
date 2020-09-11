<?php

namespace App\Models;

class TheHouse extends Model
{
    protected $fillable = [
        'the_house_category_id', 'banner', 'title', 'sub_title', 'describe','slug'
    ];

    public function theHouseContents()
    {
        return $this->hasMany(TheHouseContent::class);
    }

    public function theHouseCategory()
    {
        return $this->belongsTo(TheHouseCategory::class);
    }
}
