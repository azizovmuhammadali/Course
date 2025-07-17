<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ManagerMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
         if (Auth::check() && Auth::user()->role === 'manager') {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'Sizda manager sifatida kirishga huquqi yo‘q');
    }
}
