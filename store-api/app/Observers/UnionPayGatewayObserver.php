<?php

namespace App\Observers;

use App\Caches\UnionPayGatewayCache;
use App\Enums\Payment\PaymentType;
use App\Models\UnionPayGateway;
use App\Services\Payment\WebPaymentService;

class UnionPayGatewayObserver
{
    private $cache;

    public function __construct(UnionPayGatewayCache $cache)
    {
        $this->cache = $cache;
    }

    /**
     * Handle the alipay legacy express "created" event.
     *
     * @param UnionPayGateway $unionPayGateway
     * @return void
     */
    public function created(UnionPayGateway $unionPayGateway)
    {
        if ($unionPayGateway->status == 1) {
            $this->cache->save($unionPayGateway);
            app(WebPaymentService::class)->store(PaymentType::UnionPayGateway);
        }
    }

    /**
     * Handle the alipay legacy express "updated" event.
     *
     * @param UnionPayGateway $unionPayGateway
     * @return void
     */
    public function updated(UnionPayGateway $unionPayGateway)
    {
        if ($unionPayGateway->status == 1) {
            $this->cache->save($unionPayGateway);
        } else {
            $this->cache->delete($unionPayGateway);
        }
        app(WebPaymentService::class)->update($unionPayGateway, PaymentType::UnionPayGateway);
    }

    /**
     * Handle the alipay legacy express "deleted" event.
     *
     * @param UnionPayGateway $unionPayGateway
     * @return void
     */
    public function deleted(UnionPayGateway $unionPayGateway)
    {
        $this->cache->delete($unionPayGateway);
        app(WebPaymentService::class)->destroy(PaymentType::UnionPayGateway);
    }
}
