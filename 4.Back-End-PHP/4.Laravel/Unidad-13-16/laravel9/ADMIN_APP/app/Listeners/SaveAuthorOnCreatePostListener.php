<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Auth;

class SaveAuthorOnCreatePostListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(SaveAuthorOnCreatePostEvent $event)
    {
        $post = $event->getData();
        $post->user_id = 3;
        // $post->save();
        \Log::debug("Guardando");
    }
}
