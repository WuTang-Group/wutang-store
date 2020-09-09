<?php

namespace App\Models;

class Department extends Model
{
    protected $fillable = [
        'company_id', 'name', 'code', 'leader', 'parent_id', 'level', 'status', 'remark'
    ];
}
