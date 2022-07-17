<?php
namespace App\IplocationManager\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Event;

class LogIpEvent
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;
}
