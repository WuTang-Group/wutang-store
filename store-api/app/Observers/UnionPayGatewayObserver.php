<?php

namespace App\Observers;

use App\Enums\Payment\PaymentType;
use App\Models\UnionPayGateway;
use App\Services\Payment\WebPaymentService;

class UnionPayGatewayObserver
{
    /**
     * Handle the alipay legacy express "created" event.
     *
     * @param UnionPayGateway $unionPayGateway
     * @return void
     */
    public function created(UnionPayGateway $unionPayGateway)
    {
        if ($unionPayGateway->status == 1) {
            app(WebPaymentService::class)->store(PaymentType::UnionPayGateway);
        }
        //$this->cache->create($alipayLegacyExpress);
    }

    /**
     * Handle the alipay legacy express "updated" event.
     *
     * @param UnionPayGateway $unionPayGateway
     * @return void
     */
    public function updated(UnionPayGateway $unionPayGateway)
    {
        app(WebPaymentService::class)->update($unionPayGateway, PaymentType::UnionPayGateway);
        //$this->cache->update($alipayLegacyExpress);
    }

    /**
     * Handle the alipay legacy express "deleted" event.
     *
     * @param UnionPayGateway $unionPayGateway
     * @return void
     */
    public function deleted(UnionPayGateway $unionPayGateway)
    {
        app(WebPaymentService::class)->destroy(PaymentType::UnionPayGateway);
        //$this->cache->delete($alipayLegacyExpress);
    }
}
