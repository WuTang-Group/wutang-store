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

    /**
     * 从属关联本身parent id
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent() {
        return $this->belongsTo(Department::class, 'parent_id');
    }

    /**
     * 一对多关联本身parent id
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function child() {
        return $this->hasMany(Department::class, 'parent_id');
    }

    /**
     * 关联child无限级数据
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->child()->with(['children']);
    }
}
