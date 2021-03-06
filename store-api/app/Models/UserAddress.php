<?php

namespace App\Models;


class UserAddress extends Model
{
    const IsDefault = 1;

    protected $fillable = [
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at',
    ];
    protected $dates = ['last_used_at'];  // Carbon 是 Laravel 默认使用的时间日期处理类,当前表示是carbon时间对象

    /**
     * 从属关联user模型
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 格式化输出地址数据
    public function getFullAddressAttribute()
    {
        return "{$this->province}{$this->city}{$this->district}{$this->address}";
    }

    // 返回默认地址
    public function scopeDefaultAddress($query)
    {
        return $this->whereIsDefault(static::IsDefault);
    }
}
