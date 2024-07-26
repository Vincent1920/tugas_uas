<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;

use Illuminate\Http\Request;
// use Illuminate\Database\Eloquent\
class admin extends Controller
{
    public function home()
    {
        $users = User::all();
        $authUser = auth()->user();
        $barangs = Barang::all();

        return view('admins.home', [
            'barangs' => $barangs,
            'users' => $users,
            'authUser' => $authUser
        ]);
    }
    public function dashboard(){
        $barangs = Barang::all();
        return view('admins.pages.dashboard',[

            'barangs' => $barangs,
        ]);
    }
}
