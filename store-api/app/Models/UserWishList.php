<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserWishList extends Model
{
    protected $fillable = [
        'user_id','product_id'
    ];
}
