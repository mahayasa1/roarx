<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    public function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
