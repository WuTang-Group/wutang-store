<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordQuestion extends Model
{
    protected $fillable = [
        'question'
    ];

    protected $hidden = [
        'created_at','updated_at'
    ];
}
