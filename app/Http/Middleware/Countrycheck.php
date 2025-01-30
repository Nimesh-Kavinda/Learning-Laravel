<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Countrycheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->con != "SL") {
            $message = "You must be Sri Lankan to access this";
            
            echo '<div style="background-color: #f8d7da; color: #721c24; padding: 20px; margin: 20px;">
                    <h1>' . $message . '</h1>
                  </div>';
            
            die(); // Use exit() instead of die()
        }
      
        return $next($request);
    }
}
