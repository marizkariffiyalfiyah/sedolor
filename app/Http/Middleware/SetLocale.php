<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('lang')) {
            $lang = $request->get('lang');
            if (in_array($lang, ['id', 'en'])) {
                Session::put('locale', $lang);
            }
        }

        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }

        return $next($request);
    }
}