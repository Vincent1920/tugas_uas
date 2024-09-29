<?php
//  vincenet 10123309 

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;

use App\Models\CartItem;
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
    public function cart(){
        
        $item_cart = User::whereHas('cartItems')->with('cartItems.barang')->get();  
            return view('admins.pages.list_cart', [
             'item_cart' => $item_cart
        ]);
    }
}


