<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if ( Auth::check() ) {
        //     return $next( $request );
        // }
        //return redirect( '/login' ); // Modify this to match your login route

        $token=$request->token;
        if ( $token == 'my-secret-token' ) {
           return $next( $request );
        }
        
        return redirect( '/login' );
    }
}