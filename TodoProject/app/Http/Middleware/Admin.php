<?php

namespace App\Http\Middleware;

use Closure;


class Admin
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
        if(\Auth::check())
        {
            if($request->user()->position=='admin')
            {
                return $next($request);
            }
            return redirect('/');
        }

        return redirect('/login');

    }
}
