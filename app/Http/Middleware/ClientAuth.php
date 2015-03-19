<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;

class ClientAuth {
	
	public function handle($request, Closure $next)
	{
		if(!\User::logged('client'))
		{
			return new RedirectResponse(url('/'));
		}
		return $next($request);
	}

}
