<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   
        public function handle(Request $request, Closure $next, $role)
    {
        // Periksa apakah user sudah login
        if (!Auth::check()) {
            return redirect('login'); // Redirect jika belum login
        }

        // Ambil user yang sedang login
        $user = Auth::user();

        // Cek apakah user memiliki peran yang sesuai
        if ($user->role === $role) {
            return $next($request); // Lanjutkan request jika peran sesuai
        }

        // Jika peran tidak sesuai, arahkan ke halaman yang sesuai
        return redirect('/'); // Atau redirect ke halaman lain jika tidak memiliki hak akses
    
    
    
    
    }
}
