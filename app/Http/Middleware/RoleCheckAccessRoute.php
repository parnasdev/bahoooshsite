<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleCheckAccessRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next , $name)
    {
        abort_if(!auth()->check() , 401 , trans('auth.authenticate'));
        switch ($name) {
            case 'panel':
                abort_if(!user()->role->is_access_panel , 403 , trans('messages.not_access_route'));
                break;
            case 'dashboard':
                abort_if(!user()->role->is_access_dashboard , 403 , trans('messages.not_access_route'));
                break;
        }

        return $next($request);
    }
}
