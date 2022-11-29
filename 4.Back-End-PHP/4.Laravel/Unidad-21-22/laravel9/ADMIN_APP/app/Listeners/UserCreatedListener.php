<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\UserHistory;
use Session;

class UserCreatedListener
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
    public function handle($event)
    {
        $logedUser = Session::get('user');
        $email = $logedUser['email'];
        $data = $event->getData();
        UserHistory::create([
            'email' => $email,
            'modified_by' => $data->id, 
            'action' => 'create'
        ]);
    }
}
