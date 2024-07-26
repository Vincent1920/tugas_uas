<?php

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
            $inputVal = $request->only('email', 'password');

            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required',
            ]);
        
            if (Auth::attempt($inputVal)) {
        
                if (Auth::user()->is_admin == 1) {
                    return redirect()->route('admin');
                } else {
                    return redirect('/');
                }
            } else {
                return redirect('login')
                    ->with('error', 'Email & Password are incorrect.');
            }
                // return "Login Success";
            
                // return redirect()->route('')->withErrors('Email dan/atau password salah.');
            
            // $credentials = $request->only('email', 'password');
            // $credentials = $request->only('email', 'password');

            // if (Auth::guard('admin')->attempt($credentials)) {
            //     return redirect()->intended(route('admin')); // Replace 'admin.dashboard' with your desired dashboard route
            // }
    
            // return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
            // $this->validate($request, [
            //     'email' => 'required|email',
            //     'password' => 'required',
            // ]);
            // if (Auth::attempt($credentials)) {
            //     dd(Auth::User());
            //     // dd($credentials);
            //     // Authentication passed...
            //     if (Auth::User()->admin()) {
            //         return redirect()->route('admin.dashboard');
            //     } else {
            //         return redirect()->route('home');
            //     }
            // } else {
            //     return redirect()->route('login')->withErrors(['email' => 'Email atau password salah.']);
            // }
            // return redirect('/login')->with('error','Email & Password are incorrect.');
            // return redirect()->back()->withInput($request->only('email','password'))
            //     ->withErrors(['error' => 'Invalid credentials']);
                

                // $inputVal = $request->all();
   
                // $this->validate($request, [
                //     'email' => 'required|email',
                //     'password' => 'required',
                // ]);
           
                // if(auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password']))){
                //     if (auth()->user()->is_admin == 1) {
                //         return redirect('admin.route');
                //     }else{
                //         return redirect('/');
                //     }
                // }else{
                //     return redirect('/login')->with('error','Email & Password are incorrect.');
                //     }
       
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
}
