<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //dd($request->server);
        Log::info($request->server("REMOTE_ADDR") . " n'est pas autorisé à accéder à l'app");
        if($request->server("REMOTE_ADDR") !== "172.20.10.2"){
            Log::info($request->server("REMOTE_ADDR") . " n'est pas autorisé à accéder à l'app");
            return redirect()->route('index');
        }
        return $next($request);
    } 
}
