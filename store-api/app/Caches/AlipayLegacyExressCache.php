<?php


namespace App\Caches;


use App\Caches\Contracts\BaseModelCacheInterface;
use App\Enums\CacheKeyPrefix;
use App\Models\AlipayLegacyExpress;
use Illuminate\Support\Facades\Cache;

class AlipayLegacyExressCache implements BaseModelCacheInterface
{
    private $alipayLegacyExpress;

    public function __construct(AlipayLegacyExpress $alipayLegacyExpress)
    {
        $this->alipayLegacyExpress = $alipayLegacyExpress;
    }

    public function save($model)
    {
        $key = CacheKeyPrefix::AlipayLegacyExpress;
        if (Cache::has($key)) {
            Cache::forget($key);
        }
        Cache::forever($key, $this->alipayLegacyExpress->find($model->id));
    }

    public function delete($model)
    {
        $key = CacheKeyPrefix::AlipayLegacyExpress;
        if (Cache::has($key)) {
            Cache::forget($key);
        }
    }
}
