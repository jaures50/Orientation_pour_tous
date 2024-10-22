<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Vérifie si l'utilisateur est connecté et a le rôle requis
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }

        // Redirige vers une page d'erreur ou autre si l'accès est refusé
        return redirect('/home')->with('error', 'Accès refusé.');
    }
}
