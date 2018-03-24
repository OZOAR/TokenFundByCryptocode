<?php

namespace App\Http\Middleware;

use Closure, Session;

class Localization
{
    const LOCALE = 'locale';

    protected $languages = ['en', 'ru'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Session::has(self::LOCALE)) {
            Session::put(self::LOCALE, $request->getPreferredLanguage($this->languages));
        }

        app()->setLocale(Session::get(self::LOCALE));

        return $next($request);
    }
}
