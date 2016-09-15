<?php

namespace App\Http\Middleware;

use Closure;
use Verlanglijstjes\User;

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
        /** @var User $user */
        $user = \Auth::user();
        view()->share('username', ! empty($user) ? $user->name : null);

        view()->share('isCurrentUserWishList', false); // is set to true in WebController for current user

        return $next($request);
    }
}
