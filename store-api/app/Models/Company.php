<?php

namespace App\Models;

class Company extends Model
{
    /**
     * 一对多关联部门模型
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
