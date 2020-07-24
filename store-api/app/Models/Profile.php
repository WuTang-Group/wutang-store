<?php

namespace App\Models;


class Profile extends Model
{
    protected $fillable = [
        'user_id','real_name','sex','birthday','age'
    ];
}
