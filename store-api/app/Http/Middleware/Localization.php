<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;

class Localization
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
        if (!empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en') {
            setcookie('locale', $_COOKIE['locale']);
            \App::setLocale($_COOKIE['locale']);
        } else {
            setcookie('locale', config('app.locale'));
            \App::setLocale(config('app.locale'));
        }

        return $next($request);
    }
}
