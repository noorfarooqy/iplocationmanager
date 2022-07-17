<?php

namespace Drongotech\Listeners\Iplocationmanager;

use Drongotech\Events\Iplocationmanager\LogIpEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class LogIpEventListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        Log::info('init done for listener');
    }

    /**
     * Handle the event.
     *
     * @param  \Drongotech\Events\Iplocationmanager\LogIpEvent  $event
     * @return void
     */
    public function handle(LogIpEvent $event)
    {
        Log::info('ready for listeners');
    }

    public function failed(LogIpEvent $event, $exception)
    {
        Log::error(' Failed to log ip');
        Log::error($exception->getMessage());
    }
}
