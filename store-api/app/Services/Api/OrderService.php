<?php
namespace App\Services\Api;

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
                    $this->order->whereNo($queries['orderId'])->update(['status' => OrderStatusCode::StatusPending]);
                }
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
        return $queries;
    }
}
