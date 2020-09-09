<?php

namespace App\Models;

class Company extends Model
{
    protected $fillable = [
        'name', 'code', 'type', 'address', 'tel_number', 'contact_person', 'parent_id',
        'level', 'status', 'remark'
    ];

    /**
     * 一对多关联部门模型
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
