<?php

namespace App\Http\Middleware;

use Closure;
use Spatie\Permission\Models\Role;

class WeChatMiddleWare
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
	    if(!auth()->check() || !auth()->user()->hasAnyRole('wechat-admin|webmaster|masterhelper')){
		    return redirect()->route('home')->with ('danger','无权限');
	    }
        return $next($request);
    }
}
