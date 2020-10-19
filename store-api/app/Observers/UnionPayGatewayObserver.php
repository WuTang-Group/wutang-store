<?php

namespace App\Observers;

use App\Caches\PaymentCache;
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
            (new PaymentCache(PaymentType::UnionPayGateway))->save($unionPayGateway);
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
            (new PaymentCache(PaymentType::UnionPayGateway))->save($unionPayGateway);
        } else {
            (new PaymentCache(PaymentType::UnionPayGateway))->delete();
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
        (new PaymentCache(PaymentType::UnionPayGateway))->delete();
        app(WebPaymentService::class)->destroy(PaymentType::UnionPayGateway);
    }
}
