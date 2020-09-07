<?php

namespace App\Observers;

use App\Caches\AlipayLegacyExressCache;
use App\Models\AlipayLegacyExpress;

class AlipayLegacyExpressObserver
{
    private $cache;

    public function __construct(AlipayLegacyExressCache $cache)
    {
        $this->cache = $cache;
    }

    /**
     * Handle the alipay legacy express "created" event.
     *
     * @param AlipayLegacyExpress $alipayLegacyExpress
     * @return void
     */
    public function created(AlipayLegacyExpress $alipayLegacyExpress)
    {
        $this->cache->create($alipayLegacyExpress);
    }

    /**
     * Handle the alipay legacy express "updated" event.
     *
     * @param  AlipayLegacyExpress  $alipayLegacyExpress
     * @return void
     */
    public function updated(AlipayLegacyExpress $alipayLegacyExpress)
    {
        $this->cache->update($alipayLegacyExpress);
    }

    /**
     * Handle the alipay legacy express "deleted" event.
     *
     * @param  AlipayLegacyExpress  $alipayLegacyExpress
     * @return void
     */
    public function deleted(AlipayLegacyExpress $alipayLegacyExpress)
    {
        $this->cache->update($alipayLegacyExpress);
    }

    /**
     * Handle the alipay legacy express "restored" event.
     *
     * @param  AlipayLegacyExpress  $alipayLegacyExpress
     * @return void
     */
    public function restored(AlipayLegacyExpress $alipayLegacyExpress)
    {
        //
    }

    /**
     * Handle the alipay legacy express "force deleted" event.
     *
     * @param  AlipayLegacyExpress  $alipayLegacyExpress
     * @return void
     */
    public function forceDeleted(AlipayLegacyExpress $alipayLegacyExpress)
    {
        //
    }
}
