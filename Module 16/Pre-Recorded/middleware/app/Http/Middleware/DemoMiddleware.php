<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /*video 2

        $key = $request->header('API-KEY');
        if ($key == 'XYZ123') {
            return $next($request);
        } else {
            return response()->json('Unauthorized', 401);
        }
        
        */

        $key = $request->key;
        if ($key == 'XYZ123') {
            return $next($request);
        } else {
            return response()->json('Unauthorized', 401);
        }
    }
}
