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
}
