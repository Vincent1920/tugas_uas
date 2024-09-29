<?php
//  vincenet 10123309 

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class controller_shop extends Controller
{

    public function index(){
        $kategoris = Kategori::all();
        // $barang = Barang::findOrFail($id);
        $barang = Barang::all();
        return view('pages.shop.shop',[
            'barangs' => $barang,
            'kategoris' => $kategoris
        ]);
    }
    
    public function show($kategoriId){  
        $kategori = Kategori::findOrFail($kategoriId);
        $barangs = $kategori->barangs; // Mengambil barang berdas
        return view('pages.shop.kategori', [
            'barangs' => $barangs,
            'kategori' => $kategori // Ini adalah variabel yang harus ada di view
        ]);

    }
}
