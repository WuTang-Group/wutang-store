<?php


namespace App\Caches;


use App\Caches\Contracts\BaseCacheInterface;
use App\Enums\CacheKeyPrefix;
use App\Models\AlipayLegacyExpress;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;

class AlipayLegacyExressCache implements BaseCacheInterface
{
    private $alipayLegacyExpress;

    public function __construct(AlipayLegacyExpress $alipayLegacyExpress)
    {
        $this->alipayLegacyExpress = $alipayLegacyExpress;
    }

    // 缓存所有数据
    public function create($model)
    {
        $key = CacheKeyPrefix::AlipayLegacyExpressAll;
        // 删除原缓存
        if (Cache::has($key)) {
            Cache::forget($key);
        }
        // 写入新缓存-此处为支付配置，可永久缓存
        Cache::forever($key, AlipayLegacyExpress::all());

    }

    // 更新缓存数据
    public function update($model)
    {
        $key = CacheKeyPrefix::AlipayLegacyExpressAll;
        $cacheData = Cache::get($key);
        // 取出缓存数据，并对对应id的数据值进行更新
//        $filterData = $cacheData->reject(function($value,$key) use ($model){
//            return $value->id == $model->id;
//        });
        $filterData = $cacheData->each(function ($item) use ($model) {
            if ($item->id == $model->id) {
                $item = $model;
                return false;
            }
        });
        // 先删除缓存再重新缓存
        Cache::forget($key);
        $newKey = CacheKeyPrefix::AlipayLegacyExpressAll;
        // 将集合数据值拼装回集合数据
        $formatData = collect($filterData->values());
        Cache::forever($newKey, $formatData);
    }

    // 删除缓存数据
    public function delete($model)
    {
        $key = CacheKeyPrefix::AlipayLegacyExpressAll;
        $cacheData = Cache::get($key);
        // 格式化移除对应id数据
        $filterData = $cacheData->reject(function ($value, $key) use ($model) {
            return $value->id == $model->id;
        });
        // 先删除缓存再重新缓存
        Cache::forget($key);
        $newKey = CacheKeyPrefix::AlipayLegacyExpressAll;
        // 将集合数据值拼装回集合数据
        $formatData = collect($filterData->values());
        Cache::forever($newKey, $formatData);
    }

}
