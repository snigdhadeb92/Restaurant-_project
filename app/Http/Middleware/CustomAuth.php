<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomAuth
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
        //echo "hi from middelware";
        $path=$request->path();
        if(($path=='login' || $path=='user_registration') && Session::get('user') ){
            return redirect('/');
        }elseif(($path!='login' && !Session::get('user')) &&($path!='user_registration' && !Session::get('user'))){
            return redirect('login');
        }
        return $next($request);
    }
}
