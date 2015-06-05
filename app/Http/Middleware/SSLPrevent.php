<?php namespace App\Http\Middleware;

use Closure;

class SSLPrevent {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if($request->secure()) {
			return redirect()->to($request->path(), 302, array(), false);
		}
		return $next($request);
	}

}
