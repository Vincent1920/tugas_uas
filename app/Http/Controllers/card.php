<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $cartItems = CartItem::where('user_id', Auth::id())->get();
        $totalPrice = $cartItems->sum(function($item) {
            return $item->total_price;
        });
    
        return view('layouts.cart', compact('cartItems', 'totalPrice'));
    }
    

    public function add(Request $request){
        $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $cartItem = CartItem::updateOrCreate(
            ['user_id' => Auth::id(), 'barang_id' => $request->barang_id],
            ['quantity' => DB::raw('quantity + ' . $request->quantity)]
        );

        return redirect()->route('cart')->with('success', 'berhasil di tambah kan ');
    }


    public function update(Request $request, $id){
        $cartItem = CartItem::findOrFail($id);

    if ($request->action === 'increase') {
        $cartItem->quantity++;
    } elseif ($request->action === 'decrease' && $cartItem->quantity > 1) {
        $cartItem->quantity--;
    }

    $cartItem->save();

    return redirect()->route('cart')->with('success', ' updated keranjang');
    }

    public function remove($id)
    {
        $item = CartItem::find($id);

    if ($item) {
        $item->delete();
        return redirect()->route('cart')->with('success', 'Item berhasil dihapus dari keranjang.');
    } else {
        return redirect()->route('cart')->with('error', 'Item tidak ditemukan.');
    }}
}
