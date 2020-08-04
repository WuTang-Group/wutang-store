<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'title',
        'title_en',
        'describe',
        'describe_en',
        'banner',
        'description',
        'description_en',
        'img',
        'parent_id'
    ];

}
