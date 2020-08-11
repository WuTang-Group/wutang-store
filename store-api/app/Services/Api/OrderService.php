<?php

namespace App\Services\Api;

use App\Handlers\OrderHandler;
use App\Models\Order;
use App\Models\Product;
use App\Models\UserAddress;
use App\Services\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderService extends Service
{
    private $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function queryList()
    {
//        return $this->order->query()->with(['items.product', 'items.productSku'])
//            ->whereUserId($this->user()->id)->orderBy('created_at', 'desc');
        return $this->order->load(['items.product'])->whereUserId($this->user()->id)->get();
    }

    public function getOrderDetail($queries)
    {
        return $this->order->query()->with(['items.product', 'address'])->whereNo($queries)->whereUserId($this->user()->id)->first();
        // return $this->order->load(['items.product'])->whereUserId($this->user()->id)->get();
    }

    public function requestStore($queries)
    {
        $user = $this->user();
        try {
            $orderRequest = DB::transaction(function () use ($user, $queries){
                $address = UserAddress::find($queries->address_id);
                // 更新此地址 最后使用时间
                $address->update(['last_used_at' => now()]);
                // 创建一个订单
                $order   = new Order([
                    'no' => OrderHandler::createOnlyId(),
                    'address_id'      => $queries->address_id,
                    'remark'       => $queries->remark,
                    'total_amount' => 0,
                ]);
                // 订单关联到当前用户
                $order->user()->associate($user);  // 同$order->user_id = $user->id;
                // 写入数据库
                $order->save();

                $totalAmount = 0;
                $items       = $queries->items;
                // 遍历用户提交的 商品/若为sku则改即可
                foreach ($items as $data) {
                    $product  = Product::find($data['product_id']);
                    // 创建一个 OrderItem 并直接与当前订单关联
                    $item = $order->items()->make([
                        'amount' => $data['amount'],
                        'price'  => $product->price,
                    ]);
                    $item->product()->associate($product->product_id);
                    // $item->productSku()->associate($sku);
                    $item->save();
                    $totalAmount += $product->price * $data['amount'];
                }

                // 更新订单总金额
                $order->update(['total_amount' => $totalAmount]);

                // 将下单的商品从购物车中移除
                $productIds = collect($items)->pluck('product_id');
                $user->shopCartItems()->whereIn('product_id', $productIds)->delete();

                return $order;
            });
        }catch (\Exception $e) {
            Log::error($e->getMessage());
            return false;
        }
        return $orderRequest;
    }
}
