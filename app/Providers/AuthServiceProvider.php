<?php

namespace App\Providers;

use App\Models\Attendee;
use App\Models\Event;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Gate::define('update-event', fn ($user, Event $event) => $user->id === $event->user_id);
        // Gate::define('delete-attendee', fn ($user, Event $event, Attendee $attendee) => $user->id === $event->user_id ||
        //     $user->id === $attendee->user_id);
    }
}
