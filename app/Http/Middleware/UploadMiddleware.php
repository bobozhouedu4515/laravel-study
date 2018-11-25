<?php

namespace App\Http\Middleware;

use Closure;

class UploadMiddleware
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
    	if (!auth ()->check ()){
		    return redirect () -> route ('login') -> with ('danger', '你还没有登录');
	    }
        return $next($request);
    }
}
