@extends('admins.index')
@section('admin')

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <h3>{{ $barang->title }}</h3>
                    <p><strong>Description:</strong> {{ $barang->deskripsi }}</p>
                    <p><strong>Price:</strong> Rp {{ number_format($barang->harga, 2) }}</p>
                    <p><strong>jenis/kategori</strong> {{ $barang->kategori->nama_kategori }}</p>

                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/' . $barang->img) }}" alt="">
                    {{-- <img src="{{ asset('images/' . $barang->img) }}" alt="{{ $barang->title }}" class="img-fluid"> --}}
                </div>
            </div>
        </div>
        <div class="card-footer">
            {{-- <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form> --}}
            <a href="{{ route('barangs.index') }}" class="btn btn-secondary">Back Dashboard</a>
        </div>
    </div>
</div>
@endsection