@extends('admins.index')
@section('admin')
    <h1 class="h2">Dashboard</h1>
  </div>


      <h2>barang</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
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

                
            </tr>
        @endforeach
            
          </tbody>
        </table>
      </div>
  </div>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>

@endsection