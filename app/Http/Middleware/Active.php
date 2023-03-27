<?php

namespace App\Http\Middleware;

use Closure;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class Active
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
        if ($this->isActive(true))
        {
            return $next($request);
        }
        else
        {
            abort(403);
        }
    }
    protected function isActive($user)
    {
        $user = true;
        return $user;
    }
}
