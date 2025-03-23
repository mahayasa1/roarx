<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $roles)
    {
    //    dd($roles);
        if (!Auth::check() || Auth::user()->role !== $roles) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
}
}



?>