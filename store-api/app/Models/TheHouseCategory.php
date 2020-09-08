<?php

namespace App\Models;

class TheHouseCategory extends Model
{
    protected $fillable = [
        'name', 'slug', 'banner', 'title', 'sub_title'
    ];

    public function theHouses()
    {
        return $this->hasMany(TheHouse::class);
    }
}
