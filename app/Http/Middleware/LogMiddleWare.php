<?php

namespace App\Http\Middleware;

use Closure;
use http\Url;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class LogMiddleWare
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
        info($request->url(), $request->all());
        return $next($request);
    }
}
