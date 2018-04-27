<?php

namespace App\Http\Middleware;

use Closure;

// Fri, 20 April 2018
class MustBeEmailConfirmed
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
        if(! $request->user()->confirmed){
            
            return redirect('/user.profile')->with('flash', 'You must first confirm your email address');
            
        }

        return $next($request);
    }
}
