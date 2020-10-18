<?php

namespace App\Http\Middleware;

use Closure;



use Session;

use DB;

class Approvalmiddleware
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
	    
		/*$user = DB::table('perfroms')->where('approved', 1)->get();
		
		if($user){
			
		
			Session::flash('info','You need admin approval!' );
			
			return redirect()->back();
			
		}
		else{
			
			return $next($request);
		}
	*/
		
       
    }
}
