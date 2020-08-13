<?php

namespace App\Models;


use App\Enums\OrderShipStatus;
use App\Enums\OrderStatusCode;

class Order extends Model
{

    protected $fillable = [
        'no',
        'address_id',
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

    // 一对多关联订单详情表
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function address()
    {
        return $this->belongsTo(UserAddress::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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
