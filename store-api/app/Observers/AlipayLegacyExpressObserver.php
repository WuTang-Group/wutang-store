<?php

namespace App\Observers;

use App\Caches\PaymentCache;
use App\Enums\Payment\PaymentType;
use App\Models\AlipayLegacyExpress;
use App\Services\Payment\WebPaymentService;

class AlipayLegacyExpressObserver
{

    /**
     * Handle the alipay legacy express "created" event.
     *
     * @param AlipayLegacyExpress $alipayLegacyExpress
     * @return void
     */
    public function created(AlipayLegacyExpress $alipayLegacyExpress)
    {
        if ($alipayLegacyExpress->status == 1) {
            (new PaymentCache(PaymentType::AlipayLegacyExpress))->save($alipayLegacyExpress);
            app(WebPaymentService::class)->store(PaymentType::AlipayLegacyExpress);
        }
    }

    /**
     * Handle the alipay legacy express "updated" event.
     *
     * @param AlipayLegacyExpress $alipayLegacyExpress
     * @return void
     */
    public function updated(AlipayLegacyExpress $alipayLegacyExpress)
    {
        if ($alipayLegacyExpress->status == 1) {
            (new PaymentCache(PaymentType::AlipayLegacyExpress))->save($alipayLegacyExpress);
        } else {
            (new PaymentCache(PaymentType::AlipayLegacyExpress))->delete();
        }
        app(WebPaymentService::class)->update($alipayLegacyExpress, PaymentType::AlipayLegacyExpress);
    }

    /**
     * Handle the alipay legacy express "deleted" event.
     *
     * @param AlipayLegacyExpress $alipayLegacyExpress
     * @return void
     */
    public function deleted(AlipayLegacyExpress $alipayLegacyExpress)
    {
        (new PaymentCache(PaymentType::AlipayLegacyExpress))->delete();
        app(WebPaymentService::class)->destroy(PaymentType::AlipayLegacyExpress);
    }

    /**
     * Handle the alipay legacy express "restored" event.
     *
     * @param AlipayLegacyExpress $alipayLegacyExpress
     * @return void
     */
    public function restored(AlipayLegacyExpress $alipayLegacyExpress)
    {
        //
    }

    /**
     * Handle the alipay legacy express "force deleted" event.
     *
     * @param AlipayLegacyExpress $alipayLegacyExpress
     * @return void
     */
    public function forceDeleted(AlipayLegacyExpress $alipayLegacyExpress)
    {
        //
    }
}
