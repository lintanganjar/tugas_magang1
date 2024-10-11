<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class KaprodiMiddleware
{
    public function handle($request, Closure $next)
    {
        // Asumsikan user memiliki kolom 'role' di tabel 'users'
        if (Auth::check() && Auth::user()->role == 'kaprodi') {
            return $next($request);
        }
        return redirect('/'); // Redirect ke halaman lain jika bukan kaprodi
    
    }
}
