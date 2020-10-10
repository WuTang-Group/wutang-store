<?php

namespace App\Observers;

use App\Caches\AlipayBankGatewayCache;
use App\Enums\Payment\PaymentType;
use App\Models\AlipayBankGateway;
use App\Services\Payment\WebPaymentService;

class AlipayBankGatewayObserver
{
    private $cache;

    public function __construct(AlipayBankGatewayCache $cache)
    {
        $this->cache = $cache;
    }

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
            $this->cache->save($alipayBankGateway);
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
            $this->cache->save($alipayBankGateway);
        } else {
            $this->cache->delete($alipayBankGateway);
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
        $this->cache->delete($alipayBankGateway);
        app(WebPaymentService::class)->destroy(PaymentType::AlipayBankGateway);
    }
}
