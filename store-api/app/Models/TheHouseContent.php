<?php

namespace App\Models;

class TheHouseContent extends Model
{
    protected $fillable = [
        'the_house_id', 'title', 'content', 'img', 'img_desc'
    ];

    public function theHouse()
    {
        return $this->belongsTo(TheHouse::class);
    }

    public function theHouseCategory()
    {
        return $this->hasMany(TheHouseCategory::class);
    }
}
