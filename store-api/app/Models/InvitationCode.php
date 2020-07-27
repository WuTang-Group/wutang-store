<?php

namespace App\Models;


class InvitationCode extends Model
{
    protected $fillable = [
        'code','status','user_id','usage_limit','usage_times','valid_util'
    ];

    /**
     * 邀请码过期判断
     * @return bool
     */
    public function isExpired()
    {
        if(is_null($this->valid_until)){
            return false;
        }

        return now()->gt($this->valid_until);  // 当前时间是否大于until时间,大于则表示过期
    }

    /**
     * 邀请码状态判断
     * @return bool
     */
    public function isEnabled()
    {
        if ($this->status == 1) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * 取出过期验证码
     * @param $query
     * @return mixed
     */
    public function scopeExpiredCode($query)
    {
        return $query->where('valid_until','<',now());
    }

    /**
     * 使用次数达到预定配额的验证码
     * @param $query
     * @return mixed
     */
    public function scopeFull($query)
    {
        return $query->whereRaw('usage_times=usage_limit');
    }
}
