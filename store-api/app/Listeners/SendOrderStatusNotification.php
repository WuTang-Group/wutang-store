<?php

namespace App\Listeners;

use App\Events\OrderStatusUpdated;
use GatewayWorker\Lib\Gateway;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendOrderStatusNotification implements ShouldQueue
{
    /**
     * 事件被推送到的队列名称。
     *
     * @var string
     */
    public $broadcastQueue = 'order-status-queue';

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(OrderStatusUpdated $event)
    {
        //\Log::info($event->order);
        Gateway::$registerAddress = '127.0.0.1:12360';
        Gateway::sendToAll(json_encode($event->order));
    }
}
