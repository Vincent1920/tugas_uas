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
        <table class="table table-sm">
            <thead>
                <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">title</th>
                    <th scope="col">img</th>
                    <th scope="col">deskripsi</th>
                    <th scope="col">harga</th>
                    <th scope="col">jenis/kategori</th>
                    <th scope="col">Gram(G)/slice</th>
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
                    <td>{{ $barang->berat_barang }}</td>

                    <td>
                        <a href="{{route('barangs.show',$barang->id)}}" class="btn btn-primary">View</a>
                        <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-warning">Edit</a>
                        <form id="delete-form-{{ $barang->id }}" action="{{ route('barangs.destroy', $barang->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $barang->id }})">Delete</button>
                        </form>
                        
                    </td>
                    <td>
                        <label class="switch">
                            <input type="checkbox" class="toggle-checkbox" data-id="{{ $barang->id }}">
                            <span class="slider"></span>
                        </label>
                    </td>
                    <td>
                        <div id="extra-info-{{ $barang->id }}" class="extra-info" style="display:none;">
                            <!-- Data tambahan yang ingin ditampilkan -->
                            <p>Harga: {{ $barang->harga }}</p>
                            <p>Kategori: {{ $barang->kategori->nama_kategori }}</p>
                            <!-- Kamu bisa menambahkan data lainnya di sini -->
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script src="../js/admins/shop.js"></script>
    <script>
        
        function confirmDelete(id) {
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this item!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    document.getElementById('delete-form-' + id).submit();
                    swal("Poof! Your item has been deleted!", {
                        icon: "success",
                    });
                } else {
                    swal("Your item is safe!");
                }
            });
        }
    </script>
    @endsection