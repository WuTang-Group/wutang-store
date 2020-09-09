<?php

namespace App\Models;

class Department extends Model
{
    protected $fillable = [
        'company_id', 'name', 'code', 'leader', 'parent_id', 'level', 'status', 'remark'
    ];

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
