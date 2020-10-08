<?php


namespace App\Caches;


use App\Enums\CacheKeyPrefix;
use App\Enums\LoggerCollection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class OrderPaymentCache
{
    public function __construct()
    {
        config(['logging.channels.mongodb.collection' => LoggerCollection::OrderLog]);
    }

    // 缓存订单支付数据
    public static function store($params, $minute = 120)
    {
        try {
            // 缓存120分钟过期
            $key = CacheKeyPrefix::OrderCache . 'NO:' . $params->no;
            $expiredAt = now()->addMinutes($minute);
            Cache::put($key, ['no' => $params->no], $expiredAt);
            return [
                'payment_key' => $key,
                'now' => now()->toDateTimeString(),
                'expired_at' => $expiredAt->toDateTimeString(),
                'no' => $params->no
            ];
        } catch (\Exception $e) {
            Log::error('订单支付-缓存失败', ['message' => [
                'msg' => $e->getMessage(),
                'no' => $params->no
            ]]);
            return false;
        }
    }
}
