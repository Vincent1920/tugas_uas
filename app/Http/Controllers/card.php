<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class card extends Controller
{
    public function card($id){
        $barang = barang::find($id);

    // Periksa jika data barang ditemukan
     if (!$barang) {
            abort(404, 'Barang tidak ditemukan');
        }

    // Kirim data barang ke view
         return view('pages.shop.card', [
            'barang' => $barang,
     ]);
    }

    public function cart(){
        return view('layouts.cart');
    }
    
}
