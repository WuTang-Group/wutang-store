<?php


namespace App\Caches;


use App\Caches\Contracts\BaseModelCacheInterface;
use App\Enums\CacheKeyPrefix;
use App\Models\UnionPayGateway;
use Illuminate\Support\Facades\Cache;

class UnionPayGatewayCache implements BaseModelCacheInterface
{
    private $unionPayGateway;

    public function __construct(UnionPayGateway $unionPayGateway)
    {
        $this->unionPayGateway = $unionPayGateway;
    }

    public function save($model)
    {
        $key = CacheKeyPrefix::UnionpayGateway . $model->id;
        if (Cache::has($key)) {
            Cache::forget($key);
        }
        Cache::forever($key, $this->unionPayGateway->find($model->id));
    }

    public function delete($model)
    {
        $key = CacheKeyPrefix::UnionpayGateway . $model->id;
        if (Cache::has($key)) {
            Cache::forget($key);
        }
    }
}
