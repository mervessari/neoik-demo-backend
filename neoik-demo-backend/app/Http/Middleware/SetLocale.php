<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // default comes from config/app.php
        $locale = $request->header('Accept-Language', config('app.locale'));

        // İzin verilen diller
        if (!in_array($locale, config('app.languages'))) {
            $locale = config('app.locale');
        }

        App::setLocale($locale);

        return $next($request);
    }
}
