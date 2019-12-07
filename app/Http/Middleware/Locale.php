<?php

namespace App\Http\Middleware;

use Closure;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->has('locale')) {
            if (in_array(request('locale'), scandir(sprintf('%s/resources/lang/', dirname(__DIR__, 3))))) {

                session()->put('locale', request('locale'));
            } else {
                session()->put('locale', config('app.fallback_locale'));
            }
        }

        if (session()->has('locale')) {
            app()->setLocale(session('locale'));
        }

        return $next($request);
    }
}
