<?php

namespace App\Models;

class MemberCode extends Model
{
    protected $fillable = [
        'code', 'user_id', 'parent_id', 'status', 'remark','level'
    ];

    /**
     * 一对多关联用户模型(一个会员码下有多个用户=>填写者)
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * 一对一从属关联一个用户(拥有者)
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    /**
     * 从属关联本身parent id
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent() {
        return $this->belongsTo(MemberCode::class, 'parent_id');
    }

    /**
     * 一对多关联本身parent id
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function child() {
        return $this->hasMany(MemberCode::class, 'parent_id');
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
