<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class ParentAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if( auth()->check() )
        {
            /** @var User $user */
            $user = auth()->user();

            if ( $user->hasRole('teacher') )
            {
                return redirect(route('teacher_dashboard'));
            }
            else if ( $user->hasRole('parent') )
            {
                return $next($request);
            }
        }

        abort(403);  // Permission denied error
    }
}
