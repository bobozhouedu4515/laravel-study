<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthMiddleware
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
//	    dd (auth ()->check ());
	    if(!auth()->check() || auth()->user()->superadmin != 1){

		    return redirect()->route('home')->with ('danger','页面不存在');
	    }
//	    dd ($next($request));
	    return $next($request);
    }
}
