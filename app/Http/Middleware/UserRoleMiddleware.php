<?php

namespace App\Http\Middleware;

use Closure;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if ($request->user()->role !== $role) {
            return redirect(route('index.index'));
        }

        return $next($request);
    }
}
