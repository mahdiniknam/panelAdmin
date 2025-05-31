<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
 use App\Models\Log;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */


    public function handle($event)
    {
        Log::create([
            'event_name' => class_basename($event),
            'description' => 'یک ایونت اتفاق افتاد!',
        ]);
    }
}
