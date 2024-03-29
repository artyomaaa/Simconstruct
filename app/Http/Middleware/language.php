<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class Language  {



    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);
        App::setLocale($locale);
        return $next($request);
    }

}
