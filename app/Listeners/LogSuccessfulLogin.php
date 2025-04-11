<?php

namespace App\Listeners;

use App\Models\Audit;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Log;

class LogSuccessfulLogin
{
    /**
     * Handle the event.
     * 
     * @param  \Illuminate\Auth\Events\Login  $event
     * @return void
     */
    public function handle(Login $event): void
    {
        Audit::create([
            'event'         => 'login',
            'causer_type'   => get_class($event->user),
            'causer_id'     => $event->user->id,
            'auditable_type' => null,
            'auditable_id'  => null,
            'old_values'    => null,
            'new_values'    => null,
            'ip_address'    => request()->ip(),
            'user_agent'    => request()->userAgent(),
        ]);
    }
}
