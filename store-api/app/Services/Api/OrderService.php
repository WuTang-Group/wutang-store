<?php
namespace App\Services\Api;

use App\Enums\AlipayCode;
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

    // 获取订单列表
    public function queryList($queries){
        try{
            return $this->order->paginate($queries['page_limit']);
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }

    // 搜索订单
    public function searchOrder($queries){
        $searchParam = Arr::only($queries, ['no', 'status']);
        // 根据用户名查询user_id
        if(isset($queries['username'])){
            try{
                $user_id = User::where('username', $queries['username'])->value('id');
                $searchParam['user_id'] = $user_id;
            }catch (\Exception $e){
                Log::error($e->getMessage());
                return false;
            }
        }
        // 根据搜索条件查询订单
        try{
            return $this->order->where($searchParam)->paginate($queries['page_limit']);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return false;
        }
    }
}
