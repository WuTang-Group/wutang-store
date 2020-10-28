<?php

namespace App\Models;


use App\Enums\OrderShipStatus;
use App\Enums\OrderStatusCode;

class Order extends Model
{

    protected $fillable = [
        'no',
        'user_address_id',
        'total_amount',
        'remark',
        'paid_at',
        'payment_method',
        'payment_no',
        'refund_status',
        'refund_no',
        'closed',
        'reviewed',
        'ship_status',
        'ship_data',
        'extra'
    ];

    protected $casts = [
        'closed' => 'boolean',
        'reviewed' => 'boolean',
        'address' => 'json',
        'ship_data' => 'json',
        'extra' => 'json',
    ];

    protected $dates = [
        'paid_at',
    ];

    // 自定义增添返回数据对象
//    protected $appends = ['extra'];

    // 一对多关联订单详情表
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * 从属关联地址模型
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function address()
    {
        return $this->belongsTo(UserAddress::class, 'user_address_id');
    }

    /**
     * 从属关联用户模型
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 已付款
    public function scopePaid($query)
    {
        return $query->whereStatus(OrderStatusCode::StatusPlaced);
    }

    // 未付款
    public function scopeUnPaid($query)
    {
        return $query->whereStatus(OrderStatusCode::StatusDeliverd);
    }

    /**
     * 返回额外数据
     * @return \Illuminate\Support\Collection
     */
    public function getExtraAttribute()
    {
        $user = User::find($this->attributes['user_id']);
        $department = $user->department['name'];
        $company = Company::find($user->department['id'])['name'];
        $memberCode = MemberCode::find($user->memberCode['id']);
        $name = Profile::whereUserId($memberCode['user_id'])->first()['real_name'];

        //$user->department()->name;
        return collect(['company' => $company, 'department' => $department, 'member_code' => $memberCode['code'],'real_name' =>$name]);
    }

//    public function getStatusAttribute()
//    {
//        switch ($this->attributes['status'])
//        {
//            case OrderStatusCode::StatusPlaced:
//            {
//                return '已下单';
//            }
//            case OrderStatusCode::StatusPending:
//            {
//                return '已付款';
//            }
//            case OrderStatusCode::StatusReceived:
//            {
//                return '付款失败';
//            }
//            case OrderStatusCode::StatusDeliverd:
//            {
//                return '未付款';
//            }
//        }
//    }

//    public function getShipStatusAttribute()
//    {
//        switch ($this->attributes['ship_status'])
//        {
//            case OrderShipStatus::Delivered:
//            {
//                return '已发货';
//            }
//            case OrderShipStatus::Pending:
//            {
//                return '未发货';
//            }
//            case OrderShipStatus::Recevied:
//            {
//                return '已签收';
//            }
//        }
//    }


}
