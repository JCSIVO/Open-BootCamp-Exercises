<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use App\Events\PostReadedEvent;
use App\Events\PostReaderListener;

use App\Events\SaveAuthorOnCreatePostEvent;
use App\Events\SaveAuthorOnCreatePostListener;

use App\Events\UserCreatedEvent;
use App\Events\UserUpdatedEvent;
use App\Events\UserDeletedEvent;
use App\Events\UserCreatedListener;
use App\Events\UserUpdatedListener;
use App\Events\UserDeletedListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        PostReadedEvent::class => [
            PostReaderListener::class
        ],
        SaveAuthorOnCreatePostEvent::class => [
            SaveAuthorOnCreatePostListener::class
        ],
        UserCreatedEvent::class => [
            UserCreatedListener::class
        ],
        UserUpdatedEvent::class => [
            UserUpdatedListener::class
        ],
        UserDeletedEvent::class => [
            UserDeletedListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
