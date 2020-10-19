<?php

namespace App\Services\Admin;

use App\Enums\Payment\AlipayCode;
use App\Enums\LoggerCollection;
use App\Enums\OrderStatusCode;
use App\Enums\Payment\UnionPayCode;
use App\Models\Order;
use App\Models\User;
use App\Services\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class OrderService extends Service
{
    private $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
        config(['logging.channels.mongodb.collection' => LoggerCollection::OrderLog]);
    }

    // 改变订单状态
    public function changeStatus($queries)
    {
        try {
            switch ($queries['status']) {
                case UnionPayCode::Success:
                    {
                        $this->order->whereNo($queries['orderId'])->update([
                            'status' => OrderStatusCode::StatusPending,
                            'payment_method' => 'unionpay',
                            'payment_no' => $queries['queryId'],
                            'paid_at' => now()->toDateTimeString()
                        ]);
                    }
                    break;
                case AlipayCode::TRADE_SUCCESS:
                    {
                        $this->order->whereNo($queries['no'])->update([
                            'status' => OrderStatusCode::StatusPending,
                            'payment_method' => 'alipay',
                            'payment_no' => $queries['payment_no'],
                            'paid_at' => now()->toDateTimeString()
                        ]);
                    }
                    break;
            }
        } catch (\Exception $e) {
            Log::error('订单状态改变失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $queries;
    }

    // 获取订单列表
    public function queryList($queries)
    {
        Log:;info($queries);
        $requestData = page_limit($queries);
        return Order::when($requestData['username'] ?? NULL, function ($query, $username) {
            // 使用username查询user的记录
            Log::info($username);
            return $query->whereHas('user', function ($query) use ($username) {
                $query->whereUsername($username);
            });
        })->when($requestData['contact_name'] ?? NULL, function ($query, $contact_name) {
            // 使用contact_name查询address的记录
            return $query->whereHas('address', function ($query) use ($contact_name) {
                $query->where('contact_name', $contact_name);
            });
        })->when($requestData['contact_phone'] ?? NULL, function ($query, $contact_phone) {
            // 使用contact_phone查询address的记录
            return $query->whereHas('address', function ($query) use ($contact_phone) {
                $query->where('contact_phone', $contact_phone);
            });
        })->when($requestData['created_at'] ?? NULL, function ($query, $created_at) {
            return $query->whereBetween('created_at', $created_at);
        })->where(Arr::only(array_filter($requestData), ['no', 'payment_no']))
            ->with(['user', 'address'])
            ->latest()
            ->paginate($requestData['page_limit']);
    }

    // 搜索订单
    public function searchOrder($queries)
    {
        $searchParam = Arr::only($queries, ['no', 'status']);
        // 根据用户名查询user_id
        if (isset($queries['username'])) {
            $user_id = User::whereUserName($queries['username'])->value('id');
            $searchParam['user_id'] = $user_id;
        }
        // 根据搜索条件查询订单
        return $this->order->where($searchParam)->paginate($queries['page_limit']);
    }

    public function edit($orderId, $query)
    {
        try {
            $this->order->whereId($orderId)->update($query);
        } catch (\Exception $e) {
            Log::error('订单更新失败', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

    // 根据订单号获取订单详情
    public function detail($orderNo)
    {
        return $this->order->with('items.product', 'address')->where('no', $orderNo)->first();
    }
}
