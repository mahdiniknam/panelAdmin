<?php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Log;

class LogUserLogin
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
    public function handle(UserLoggedIn $event): void
    {
         Log::create([
            'event_name' => 'User Logged In',
            'description' => 'کاربر ' . $event->user->name . ' وارد شد.',
        ]);
    }
}
