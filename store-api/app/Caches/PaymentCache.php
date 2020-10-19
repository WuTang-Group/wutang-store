<?php


namespace App\Caches;


use App\Caches\Contracts\BaseModelCacheInterface;
use App\Enums\CacheKeyPrefix;
use App\Enums\Payment\PaymentType;
use App\Models\AlipayBankGateway;
use App\Models\AlipayLegacyExpress;
use App\Models\UnionPayGateway;
use Illuminate\Support\Facades\Cache;

class PaymentCache implements BaseModelCacheInterface
{
    public $paymentType;
    public $cacheKey;
    public $model;

    public function __construct($paymentType)
    {
        $this->paymentType = $paymentType;
        switch ($this->paymentType) {
            case PaymentType::AlipayLegacyExpress:
                {
                    $this->cacheKey = CacheKeyPrefix::AlipayLegacyExpress;
                    $this->model = AlipayLegacyExpress::class;
                }
                break;
            case PaymentType::AlipayBankGateway:
                {
                    $this->cacheKey = CacheKeyPrefix::AlipayBankGateway;
                    $this->model = AlipayBankGateway::class;
                }
                break;
            case PaymentType::UnionPayGateway:
                {
                    $this->cacheKey = CacheKeyPrefix::UnionpayGateway;
                    $this->model = UnionPayGateway::class;
                }
                break;
        }
    }

    public function save($model)
    {
        $key = $this->cacheKey;
        if (Cache::has($key)) {
            Cache::forget($key);
        }
        Cache::forever($key, app($this->model)->find($model->id));
    }

    public function delete()
    {
        $key = $this->cacheKey;
        if (Cache::has($key)) {
            Cache::forget($key);
        }
    }
}
