<?php

namespace App\Models;


class Profile extends Model
{
    protected $fillable = [
        'user_id', 'real_name', 'sex', 'birthday', 'age'
    ];

    // 从属关联User模型
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // 格式化性别输出
//    public function getSexAttribute()
//    {
//        return $this->attributes['sex'] === 1 ? '男' : '女';
//    }
}
