<?php

namespace App\Listeners;

use Auth;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AuthListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  IlluminateAuthEventsAuthenticated  $event
     * @return void
     */
    public function handle(Authenticated $event)
    {
        $user = Auth::user();
    }
}
