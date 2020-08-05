<?php

namespace App\Models;


class PasswordQuestion extends Model
{
    protected $fillable = [
        'question'
    ];

    protected $hidden = [
        'created_at','updated_at'
    ];
}
