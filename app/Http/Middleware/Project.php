<?php namespace App\Http\Middleware;

use Closure;

/**
 *
 * Middleware to check if the project in question belongs to the user.
 * 
 */

class Project {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$id = $request->route()->getParameter('id');
		$project = \Auth::user()->projects()->find($id);
		if(!$project)
		{
			return redirect('/');
		}
		return $next($request);
	}

}
