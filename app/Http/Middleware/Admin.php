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
    public function handle(Request $request, Closure $next): Response
    {
        // if (Auth::check() && Auth::user()->is_admin == 1) {
        //     return $next($request);
        // }
        if (Auth::check()) {
            // Sekarang aman untuk mengakses pengguna dan propertinya
            if (auth()->user()->is_admin == 1) {
                return redirect('admin');
            }
                //    return $next($request);
            // Redirect jika pengguna bukan admin
            return redirect()->route('/')->with('error', "Hanya admin yang bisa mengakses!");
        }
    
        // // Redirect jika pengguna tidak terautentikasi
        // return redirect('login')->with('error', "Anda perlu login untuk mengakses halaman ini!");
    
    
    }
}
