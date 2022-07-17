<?php

namespace Drongotech\Listeners\Iplocationmanager;

use Drongotech\Events\Iplocationmanager\LogIpEvent;
use Drongotech\Iplocationmanager\IpStack\IpStack;
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
        $ipStack = new IpStack();
        $ipStack->setIpAddress();
        $ipStack->setAccessKey(config('iplocationmanager.ipstack_access_key'));
        $ipStack->setBaseUrl(config('iplocationmanager.ipstack_base_url'));
        $ip_data = $ipStack->requestStandardIpLookup();
        if ($ip_data) {

            Log::info($ip_data);

        } else {
            Log::error($ipStack->getMessage());
        }
    }

    public function failed(LogIpEvent $event, $exception)
    {
        Log::error(' Failed to log ip');
        Log::error($exception->getMessage());
    }
}
