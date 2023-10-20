<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('login');
        }
    }

    public function handle($request, Closure $next)
    {
        if (Auth::check() && (Auth::user()->role == 'Admin')  ||  (Auth::user()->role == 'agent') ) {
            return $next($request);
        } else {
            return redirect('/login');
        }

    }
}
