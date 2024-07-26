<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        $kategori = Kategori::all();
        return view('admins.crud.post',[
            'barangs' => $barangs,
            'kategori' => $kategori,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $barangs = Barang::all();
        return view('admins.crud.create',[
            // 'barangs' => $barangs,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('post-image');
        $request->validate([
            'title' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);
    
        // Menyimpan gambar yang diunggah
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $imageName);
        } else {
            return back()->withErrors(['img' => 'Image upload failed.']);
        }
    
        // Menyimpan data ke database
        barang::create([
            'title' => $request->title,
            'img' => $imageName,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'user_id' => Auth::id(),
            'kategori_id' => $request->kategori_id,
        ]);
    
        return redirect()->route('post')->with('success', 'Data has been saved.');
    }


    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('admins.crud.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    // Ambil data barang berdasarkan ID
    $barang = Barang::findOrFail($id);
    
    // Ambil semua kategori dari database
    $kategoris = Kategori::all();

    // Kirim data barang dan kategori ke view
    return view('admins.crud.update', [
        'barang' => $barang,
        'kategoris' => $kategoris
    ]);
}
    // public function edit(Barang $barang)
    // {
    //     return view('admins.crud.update', [
    //         'barang' => $barang,
    //     ]);
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'title' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'deskripsi' => 'nullable|string',
        'kategori_id' => 'required|exists:kategoris,id', 
        
        'img' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048', 
    ]);

    // Temukan barang berdasarkan ID
    $barang = Barang::findOrFail($id);

    // Perbarui data barang
    $barang->title = $request->input('title');
    $barang->harga = $request->input('harga');
    $barang->kategori_id = $request->input('kategori_id'); // Perbarui kategori_id
    $barang->deskripsi = $request->input('deskripsi');

    // Periksa jika ada gambar yang di-upload
    if ($request->hasFile('img')) {
        if ($barang->img) {
            // Hapus file lama dari storage jika ada
            Storage::delete('public/images/' . $barang->img);
        }

        // Simpan gambar baru
        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('images'), $imageName);

        // Perbarui nama gambar di database
        $barang->img = $imageName;
    }

    // Simpan perubahan
    $barang->save();

    return redirect()->route('barangs.index')->with('success', 'Barang updated successfully');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('post')->with('success', 'Barang deleted successfully.');
    
    }
}
