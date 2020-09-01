<?php

namespace App\Http\Controllers\Api;

use App\Enums\CacheKeyPrefix;
use App\Enums\LoggerCollection;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class CacheController extends Controller
{
    public function __construct()
    {
        config(['logging.channels.mongodb.collection' => LoggerCollection::OrderLog]);
    }

    public static function orderPayment($params, $minute = 15)
    {
        try {
            // 缓存15分钟过期
            $key = CacheKeyPrefix::OrderCache . 'NO:' . $params['no'];
            $expiredAt = now()->addMinutes($minute);
            Cache::put($key, ['no' => $params['no']], $expiredAt);
            return [
                'payment_key' => $key,
                'expired_at' => $expiredAt,
                'no' => $params['no']
            ];
        } catch (\Exception $e) {
            Log::error('订单支付-缓存失败', ['message' => [
                'msg' => $e->getMessage(),
                'no' => $params['no']
            ]]);
            return false;
        }
    }
}
