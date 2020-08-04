<?php
namespace App\Services\Api;

use App\Enums\AlipayCode;
use App\Enums\OrderStatusCode;
use App\Enums\UnionPayCode;
use App\Models\Order;
use App\Services\Service;
use Illuminate\Support\Facades\Log;

class OrderService extends Service
{
    private $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
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
                case AlipayCode::TRADE_SUCCESS:
                {
                    $this->order->whereNo($queries['no'])->update([
                        'status' => OrderStatusCode::StatusPending,
                        'payment_method' => 'alipay',
                        'payment_no' => $queries['payment_no'],
                        'paid_at' => now()->toDateTimeString()
                    ]);
                }
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
        return $queries;
    }
}
