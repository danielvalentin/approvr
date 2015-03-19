<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;

class SellerAuth {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(!\User::logged('seller'))
		{
			return new RedirectResponse(url('/'));
		}
		return $next($request);
	}

}