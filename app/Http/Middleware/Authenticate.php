<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;
use function Livewire\of;

class Authenticate extends Middleware
{

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if (str_starts_with(Route::currentRouteName(), 'panel')) {
                return route('panel.login');
            } else {
                return route('user.login', ['referrer-url' => route(Route::currentRouteName())]);
            }
        }
    }
}
