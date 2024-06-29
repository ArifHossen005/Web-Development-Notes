<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecretMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /* if (!$request->user()) {
            return response("You are not authorized to access this page");
        }
        */

        if ($request->input('password') != '11111') {
            //return response("You are not authorized to access this page");
            abort(403);
        }

        return $next($request);
    }
}
