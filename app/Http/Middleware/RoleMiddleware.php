<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $role, $permission = null)
    {
        $roles = is_array($role)
        ? $role
        : explode('|', $role);

        $status = false;
        foreach($roles as $role)
        {
            if ($request->user()->hasRole($role)) {

                $status = true;
                break;
            }

        }
        if(!$status) {
            abort(404);
        }


        if ($permission !== null && !$request->user()->can($permission)) {

            abort(404);
        }


        return $next($request);
    }
}
