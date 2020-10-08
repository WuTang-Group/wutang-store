<?php

namespace App\Observers;

use App\Enums\PaymentType;
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
            app(WebPaymentService::class)->store(PaymentType::AlipayBankGateway);
        }
        //$this->cache->create($alipayLegacyExpress);
    }

    /**
     * Handle the alipay legacy express "updated" event.
     *
     * @param AlipayBankGateway $alipayBankGateway
     * @return void
     */
    public function updated(AlipayBankGateway $alipayBankGateway)
    {
        app(WebPaymentService::class)->update($alipayBankGateway, PaymentType::AlipayBankGateway);
        //$this->cache->update($alipayLegacyExpress);
    }

    /**
     * Handle the alipay legacy express "deleted" event.
     *
     * @param AlipayBankGateway $alipayBankGateway
     * @return void
     */
    public function deleted(AlipayBankGateway $alipayBankGateway)
    {
        app(WebPaymentService::class)->destroy(PaymentType::AlipayBankGateway);
        //$this->cache->delete($alipayLegacyExpress);
    }
}
