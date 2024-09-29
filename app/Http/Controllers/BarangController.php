<?php
//  vincenet 10123309 

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
        $kategori = Kategori::all();
        // $barangs = Barang::all();
        return view('admins.crud.create',[
            'kategoris' => $kategori,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'berat_barang' => 'required',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);
    
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $imageName);
        } else {
            return back()->withErrors(['img' => 'Image upload failed.']);
        }
    
        // Simpan produk ke database
        $product = barang::create([
            'title' => $request->title,
            'berat_barang' => $request->berat_barang,
            'img' => $imageName,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'user_id' => Auth::id(),
            'kategori_id' => $request->kategori_id,
        ]);
    
        // Generate QR code yang berisi link menuju halaman produk
        // $qrCodePath = 'qrcodes/' . $product->id . '.png';
        // QrCode::format('png')
        //     ->size(200)
        //     ->generate(route('show', $product->id),
        //      storage_path('images' . $qrCodePath));
    
        // // Update produk dengan path QR code
        // $product->update([
        //     'qr_code' => $qrCodePath
        // ]);
    
        return redirect()->route('post')->with('success', 'Data has been saved with QR code.');
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

    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'title' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'berat_barang' => 'required|string|max:255',
        'deskripsi' => 'nullable|string',
        'kategori_id' => 'required|exists:kategoris,id', 
        
        'img' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048', 
    ]);

    // Temukan barang berdasarkan ID
    $barang = Barang::findOrFail($id);

    // Perbarui data barang
    $barang->title = $request->input('title');
    $barang->harga = $request->input('harga');
    $barang->berat_barang = $request->input('berat_barang');
    $barang->kategori_id = $request->input('kategori_id'); // Perbarui kategori_id
    $barang->deskripsi = $request->input('deskripsi');

    // Periksa jika ada gambar yang di-upload
    if ($request->hasFile('img')) {
        if ($barang->img) {
            // Hapus file lama dari storage jika ada
            Storage::delete('public/images/' . $barang->img);
        }

    
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
        // Temukan barang berdasarkan ID
        $barang = Barang::findOrFail($id);
    
        // Path gambar yang akan dihapus
        $imagePath = public_path('images/' . $barang->img);
    
        // Hapus barang dari database
        $barang->delete();
    
        // Hapus gambar jika ada
        if (file_exists($imagePath)) {
            unlink($imagePath); // Hapus file gambar
        }
    
        return redirect()->route('post')->with('success', 'Barang dan gambar berhasil dihapus.');
    }
    
}
