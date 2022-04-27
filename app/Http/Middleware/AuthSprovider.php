<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthSprovider
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->utype === 'SVP')
        {
            return $next($request);
        }
        else
        {
            session()->flush();
            return redirect()->route('login');
        }
    }
}
