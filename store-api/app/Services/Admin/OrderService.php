<?php

namespace App\Services\Admin;

use App\Enums\AlipayCode;
use App\Enums\LoggerCollection;
use App\Enums\OrderStatusCode;
use App\Enums\UnionPayCode;
use App\Handlers\OrderHandler;
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
        $queries = page_limit($queries);
        return $this->order->with(['user' => function ($query) {
            $query->select('id', 'username');
        }])->paginate($queries['page_limit']);
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
}
