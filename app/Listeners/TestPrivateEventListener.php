<?php

namespace App\Listeners;

use App\Events\TestPrivateEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestPrivateEventListener
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
     * @param  TestPrivateEvent  $event
     * @return void
     */
    public function handle(TestPrivateEvent $event)
    {
        //
    }
}
