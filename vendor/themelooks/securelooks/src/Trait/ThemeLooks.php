<?php

namespace ThemeLooks\SecureLooks\Trait;

use Closure;
use Illuminate\Http\Request;
use ThemeLooks\SecureLooks\Model\Key;

class ThemeLooks
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
