<?php

namespace App\Observers;

use App\Caches\PaymentCache;
use App\Enums\Payment\PaymentType;
use App\Models\AlipayBankGateway;
use App\Services\Payment\WebPaymentService;

class AlipayBankGatewayObserver
{

    /**
     * Handle the alipay legacy express "created" event.
     *
     * @param AlipayBankGateway $alipayBankGateway
     * @return void
     */
    public function created(AlipayBankGateway $alipayBankGateway)
    {
        if ($alipayBankGateway->status == 1) {
            (new PaymentCache(PaymentType::AlipayBankGateway))->save($alipayBankGateway);
            app(WebPaymentService::class)->store(PaymentType::AlipayBankGateway);
        }
    }

    /**
     * Handle the alipay legacy express "updated" event.
     *
     * @param AlipayBankGateway $alipayBankGateway
     * @return void
     */
    public function updated(AlipayBankGateway $alipayBankGateway)
    {
        if ($alipayBankGateway->status == 1) {
            (new PaymentCache(PaymentType::AlipayBankGateway))->save($alipayBankGateway);
        } else {
            (new PaymentCache(PaymentType::AlipayBankGateway))->delete();
        }
        app(WebPaymentService::class)->update($alipayBankGateway, PaymentType::AlipayBankGateway);
    }

    /**
     * Handle the alipay legacy express "deleted" event.
     *
     * @param AlipayBankGateway $alipayBankGateway
     * @return void
     */
    public function deleted(AlipayBankGateway $alipayBankGateway)
    {
        (new PaymentCache(PaymentType::AlipayBankGateway))->delete();
        app(WebPaymentService::class)->destroy(PaymentType::AlipayBankGateway);
    }
}
