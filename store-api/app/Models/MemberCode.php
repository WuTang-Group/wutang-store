<?php

namespace App\Models;

class MemberCode extends Model
{
    /**
     * 一对多关联用户模型(一个会员码下有多个用户)
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
