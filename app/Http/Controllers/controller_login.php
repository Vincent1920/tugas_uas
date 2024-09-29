<?php
//  vincenet 10123309 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;

use Illuminate\Support\Facades\Auth;
class controller_login extends Controller
{
    public function view_login(){
        return view('pages.login.login');
    }

    public function index()
    {
        return view('home');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View

    {

        return view('adminHome');

    }
    public function login(Request $request)
    {
        // Ambil input dari form termasuk captcha
        $inputVal = $request->only('email', 'password', 'captcha');
    
        // Tambahkan validasi captcha
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required|captcha' // Validasi captcha
        ]);
    
        // Cek apakah login berhasil
        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('login')
                ->with('error', 'Email, Password, atau CAPTCHA salah.');
        }
    }
            public function logout(Request $request)
            {
                // Debugging Auth user sebelum logout
                // dd(Auth::user());
            
                // Auth::logout();
            
                // Menghapus semua sesi
                $request->session()->invalidate();
                $request->session()->regenerateToken();
            
                return redirect('/login')->with('status', 'You have been logged out.');
            }

            public function forgot_password($token){
                return view('pages.login.forgot_password'
                ,['token' => $token]);
            }
}
