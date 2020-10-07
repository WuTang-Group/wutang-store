<?php

namespace App\Services\Api;

use App\Enums\AlipayCode;
use App\Enums\AlipayBankGatewayCode;
use App\Enums\CacheKeyPrefix;
use App\Enums\LoggerCollection;
use App\Enums\OrderStatusCode;
use App\Enums\UnionPayCode;
use App\Events\OrderStatusUpdated;
use App\Exceptions\InvalidRequestException;
use App\Handlers\OrderHandler;
use App\Http\Controllers\Api\CacheController;
use App\Models\Order;
use App\Models\Product;
use App\Models\UserAddress;
use App\Services\Service;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderService extends Service
{
    private $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
        config(['logging.channels.mongodb.collection' => LoggerCollection::OrderLog]);
    }

    // 获取订单列表
    public function queryList(object $params)
    {
        $requestData = page_limit($params->all());
//        return $this->order->query()->with(['items.product', 'items.productSku'])
//            ->whereUserId($this->user()->id)->orderBy('created_at', 'desc');
        return $this->order->load(['items.product'])->whereUserId($this->user()->id)->paginate($requestData['page_limit']);
    }

    // 获取订单详情
    public function getOrderDetail(string $queries)
    {
        return $this->order->query()->with(['items.product', 'address'])->whereNo($queries)->whereUserId($this->user()->id)->first();
        // return $this->order->load(['items.product'])->whereUserId($this->user()->id)->get();
    }

    // 创建订单
    public function requestCreate(object $queries)
    {
        $user = $this->user();
        try {
            // 通过事务机制创建订单
            $orderRequest = DB::transaction(function () use ($user, $queries) {
                $address = UserAddress::find($queries->address_id);
                // 更新此地址 最后使用时间
                $address->update(['last_used_at' => now()]);
                // 创建一个订单
                $order = new Order([
                    'no' => OrderHandler::createOnlyId(),
                    'user_address_id' => $queries->address_id,
                    'remark' => $queries->remark ?? NULL,
                    'total_amount' => 0,
                ]);
                // 订单关联到当前用户
                // $order->user()->associate($user);  // 同$order->user_id = $user->id;
                $order->user_id = $user->id;
                // 写入数据库
                $order->save();

                $totalAmount = 0;
                // 查找当前用户购物车数据
                $items = $this->user()->shopCartItems()->get();;
                // 遍历用户提交的 商品/若为sku则改即可
                foreach ($items as $data) {
                    $product = Product::find($data['product_id']);
                    // 创建一个 OrderItem 并直接与当前订单关联
                    $price = $product->sale_price ? $product->sale_price : $product->price;
                    $item = $order->items()->make([
                        'amount' => $data['amount'],
                        'price' => $price,
                    ]);
                    // $item->product()->associate($product->product_id);
                    $item->product_id = $product->id;
                    // $item->productSku()->associate($sku);
                    $item->save();
                    $totalAmount += $price * $data['amount'];
                    if ($product->decreaseStock($data['amount']) <= 0) {
                        throw new InvalidRequestException('该商品库存不足');
                    }
                }

                // 更新订单总金额
                $order->update(['total_amount' => $totalAmount]);

                // 将下单的商品从购物车中移除
                $productIds = collect($items)->pluck('product_id');
                $user->shopCartItems()->whereIn('product_id', $productIds)->delete();

                return $order;
            });
            // 缓存订单支付倒计时
            $cacheResult = CacheController::orderPayment($orderRequest);
            if (!$cacheResult) {
                return false;
            }
            return [
                'order' => $orderRequest,
                'cache_data' => $cacheResult
            ];
            // 取消下单队列通知，因为此时订单尚未完成，无需队列通知
            // event(new OrderStatusUpdated($orderRequest));
        } catch (\Exception $e) {
            Log::error('订单下单失败', ['message' => $e->getMessage()]);
            return false;
        }
    }

    // 改变订单状态
    public function changeStatus(array $queries)
    {
        try {

            switch ($queries['status']) {
                case UnionPayCode::Success:
                    {
                        $this->order->whereNo($queries['order_no'])->update([
                            'status' => OrderStatusCode::StatusPlaced,
                            'payment_method' => 'unionpay',
                            'payment_no' => $queries['queryId'],
                            'paid_at' => now()->toDateTimeString()
                        ]);
                    }
                    break;
                case AlipayCode::TRADE_SUCCESS:
                    {
                        $this->order->whereNo($queries['order_no'])->update([
                            'status' => OrderStatusCode::StatusPlaced,
                            'payment_method' => 'alipay',
                            'payment_no' => $queries['payment_no'],
                            'paid_at' => now()->toDateTimeString()
                        ]);
                    }
                    break;
                case AlipayBankGatewayCode::PaySuccess:
                    {
                        $order = $this->order->whereNo($queries['order_no'])->update([
                            'status' => OrderStatusCode::StatusPlaced,
                            'payment_method' => 'alipay_gateway',
                            'payment_no' => $queries['out_order_no'],
                            'paid_at' => now()->toDateTimeString(),
                            'extra' => json_encode([
                                'merch_id' => $queries['merch_id'],  // 商户号
                                'out_order_no' => $queries['out_order_no'],  // 流水号
                                'order_id' => $queries['order_no'],  // 订单号
                                'fee' => $queries['fee'],  // 费率
                                'amount' => $queries['amount'],  // 交易金额
                                'status' => $queries['status'],  // 交易状态
                                'pay_time' => $queries['pay_time']  // 支付时间
                            ])
                        ]);
                        Log::info('支付宝网关支付成功', ['message' => $order]);
                    }
                    break;
                case AlipayBankGatewayCode::PayFaild:
                    {
                        $order = $this->order->whereNo($queries['order_no'])->update([
                            'status' => OrderStatusCode::StatusReceived,
                            'payment_method' => 'alipay_gateway',
                            'payment_no' => $queries['out_order_no'],
                            'paid_at' => now()->toDateTimeString(),
                        ]);
                        Log::info('支付宝网关支付失败', ['message' => $order]);
                    }
                    break;
                default:
                {
                    $this->order->whereNo($queries['order_no'])->update([
                        'status' => OrderStatusCode::StatusReceived,
                        'payment_method' => NULL,
                    ]);
                }
            }
            $order = $this->order->whereNo($queries['order_no'])->first();
            event(new OrderStatusUpdated($order));
        } catch (\Exception $e) {
            Log::error('订单状态改变失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $queries;
    }

    // 请求取消订单
    public function requestCancel(array $params)
    {
        try {
            $order = $this->order->whereNo($params['no'])->firstOrFail();
            // 用户付款失败或者未付款方能允许用户取消订单
            if ($order->status == 0 || $order->status == -1) {
                $cancelOrder = DB::transaction(function () use ($order) {
                    $order->status = OrderStatusCode::StatusCanceled;
                    $order->save();
                    return $order;
                });
                $key = CacheKeyPrefix::OrderCache . 'NO:' . $params['no'];
                if (Cache::has($key)) {
                    Cache::forget($key);
                }
                return $cancelOrder;
            }
        } catch (\Exception $e) {
            Log::error('尝试取消订单失败', ['message' => $e->getMessage()]);
            return false;
        }
    }

    // 尝试取消订单后重新下单
    public function retryCreate(object $params)
    {
        $requestData = $params->all();
        // 取消订单->从取消的订单获取历史数据
        $cancelledOrder = $this->requestCancel($requestData);
        $user = $this->user();
        try {
            $orderRequest = DB::transaction(function () use ($user, $cancelledOrder) {
                $address = UserAddress::find($cancelledOrder->user_address_id);
                // 更新此地址 最后使用时间
                $address->update(['last_used_at' => now()]);
                // 创建一个新订单
                $order = new Order([
                    'no' => OrderHandler::createOnlyId(),
                    'user_address_id' => $cancelledOrder->user_address_id,
                    'remark' => $cancelledOrder->remark ?? NULL,
                    'total_amount' => 0,
                ]);
                $order->user_id = $user->id;
                // 写入数据库
                $order->save();

                $totalAmount = 0;
                // 查找历史订单items数据
                $historyItems = $cancelledOrder->items()->get();
                // 遍历items数据
                foreach ($historyItems as $data) {
                    $product = Product::find($data['product_id']);
                    // 创建一个 OrderItem 并直接与当前订单关联
                    $price = $product->sale_price ? $product->sale_price : $product->price;
                    $item = $order->items()->make([
                        'amount' => $data['amount'],
                        'price' => $price,
                    ]);
                    $item->product_id = $product->id;
                    $item->save();
                    $totalAmount += $price * $data['amount'];
                    if ($product->decreaseStock($data['amount']) <= 0) {
                        throw new InvalidRequestException('该商品库存不足');
                    }
                }

                // 更新订单总金额
                $order->update(['total_amount' => $totalAmount]);
                return $order;
            });
            // 取消下单队列通知，因为此时订单尚未完成，无需队列通知
            // event(new OrderStatusUpdated($orderRequest));
        } catch (\Exception $e) {
            Log::error('重新下单失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $orderRequest;
    }
}
