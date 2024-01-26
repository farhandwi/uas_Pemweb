<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($role == 'admin' && $user->isAdmin()) {
                return $next($request);
            } elseif ($role == 'regular' && $user->isRegular()) {
                return $next($request);
            }
        }

        return redirect('/');
    }
}
