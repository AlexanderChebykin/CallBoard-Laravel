<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next)
    {
		//var_dump($request -> session() -> get('counter'));
        //$value = $request -> session() -> get('counter');
		dump(session('counter'));
		//$value = session('counter');
			//if ($value == null) 
				//$request -> session() -> put('counter', 1);
				//session(['counter'=>1]);
				$value = 1;
			//else 
				//$request -> session() -> put('counter', $value + 1);
				//session(['counter'=>session('counter')+1]);
				$value++;
			echo 'Вы посетили этот сайт '.$value.' раз!';
			dump(session('counter'));
			//var_dump($request -> session() -> get('counter'));
		return $next($request);
    }
}
