<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OssData extends Model
{
    protected $fillable = [
        'disk','path','status'
    ];
}
