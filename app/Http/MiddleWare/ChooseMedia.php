<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChooseMedia
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Add logic here (e.g., checking or modifying request data)
        
        return $next($request); // Pass the request to the next middleware/controller
    }
}
