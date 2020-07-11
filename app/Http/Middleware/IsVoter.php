<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsVoter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role == 'voter') {
            return $next($request);
        }

        return response()->json(['message' => 'No permitido'], 411);

    }
}
