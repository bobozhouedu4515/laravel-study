<?php

namespace App\Http\Middleware;

use Closure;
use Spatie\Permission\Models\Role;

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
	    if(!auth()->check() || !auth()->user()->hasAnyRole(Role::all ())){
		    return redirect()->route('home')->with ('danger','无权限');
	    }
//	    dd ($next($request));
	    return $next($request);
    }
}
