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
        $key = CacheKeyPrefix::AlipayLegacyExpress . 'ALL';
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
        $key = CacheKeyPrefix::AlipayLegacyExpress . 'ALL';
        $data = Cache::get($key);
        foreach ($data as $key => $value) {
            if ($value['id'] == $model->id) {
                Arr::pull($data, $key);
            }
        }
        Cache::forever($key, $data);
    }

}
