@extends('admins.index')
@section('admin')
<div class="col-lg-8">
    <a href="/creat" class="btn btn-primary"> Creat new post</a>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">title</th>
                    <th scope="col">img</th>
                    <th scope="col">deskripsi</th>
                    <th scope="col">harga</th>
                    <th scope="col">jenis/kategori</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangs as $barang)
                <tr>
                    {{-- <td>{{ $barang->id }}</td> --}}
                    <td>{{ $barang->title }}</td>
                    <td><img src="{{ asset('images/' . $barang->img) }}" alt="{{ $barang->title }}" width="100"></td>
                    <td>{{ $barang->deskripsi }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->kategori->nama_kategori }}</td>
                    <td>
                        <a href="{{route('barangs.show',$barang->id)}}" class="btn btn-primary">View</a>
                        <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endsection