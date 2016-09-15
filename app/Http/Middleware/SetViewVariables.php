<?php

namespace App\Http\Middleware;

use Closure;

class SetViewVariables
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! empty($user = \Auth::user())) {
            view()->share('username', $user->name);
        }

        return $next($request);
    }
}
