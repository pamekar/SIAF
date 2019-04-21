<?php

namespace App\Http\Middleware;

use Closure;

class IsDemo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (config('app.isDemo')) {
            return redirect('login');
        }

        return $next($request);
    }
}
