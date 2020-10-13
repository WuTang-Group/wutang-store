<?php


namespace App\Caches;


use App\Caches\Contracts\BaseModelCacheInterface;
use App\Enums\CacheKeyPrefix;
use App\Models\AlipayBankGateway;
use Illuminate\Support\Facades\Cache;

class AlipayBankGatewayCache implements BaseModelCacheInterface
{
    private $alipayBankGateway;

    public function __construct(AlipayBankGateway $alipayBankGateway)
    {
        $this->alipayBankGateway = $alipayBankGateway;
    }

    public function save($model)
    {
        $key = CacheKeyPrefix::AlipayBankGateway;
        if (Cache::has($key)) {
            Cache::forget($key);
        }
        Cache::forever($key, $this->alipayBankGateway->find($model->id));
    }

    public function delete($model)
    {
        $key = CacheKeyPrefix::AlipayBankGateway;
        if (Cache::has($key)) {
            Cache::forget($key);
        }
    }
}
