<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;

class UserAuth {
	
	public function handle($request, Closure $next)
	{
		if(!\User::logged('user'))
		{
			return new RedirectResponse(url('/'));
		}
		return $next($request);
	}

}
