<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    public function index()
    {
        return view('home.home', [
            // 'user' => User::findOrFail($id)
        ]);
    }
    public function learn(){

        return view('home.learn', [
            // 'user' => User::findOrFail($id)
        ]);
    }
}
