<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $permission)
    {
        // dd($request->user());
        // dd($permission);
        // if (!$request->user()->hasPermissionTo($permission)) {

        //     abort(404);
        // }

        if ($permission !== null && !$request->user()->can($permission)) {

            abort(404);
        }

        return $next($request);
    }
}
