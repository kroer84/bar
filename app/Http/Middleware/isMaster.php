<?php

namespace App\Http\Middleware;

use Closure;

class isMaster
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
        $user=auth()->user();

        if($user->rol!='master'){
            abort(404);
        }
        return $next($request);
    }
}
