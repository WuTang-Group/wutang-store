<?php

namespace App\Models;

use App\Enums\Roles;

class Role extends Model
{
    protected $fillable = [
        'name','guard_name'
    ];

    protected $appends = ['role_name'];

    public function getRoleNameAttribute()
    {
        switch ($this->attributes['name']) {
            case Roles::Admin:
            {
                return '超级管理员';
            }
            case Roles::Customer:
            {
                return '普通用户';
            }
            case Roles::Visitor:
            {
                return '访客用户';
            }
            case Roles::Editor:
            {
                return '维护人员';
            }
        }
    }
}
