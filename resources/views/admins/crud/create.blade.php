@extends('admins.index')
@section('admin')
<div class="col-lg-8">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Barang</h1>
  </div>
  

    <form method="post" action="/posts/store" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
            


        <label for="harga" aria-placeholder="harga baranga" class="form-label">harga</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">IDR</span>
              {{-- <span class="input-group-text">0.00  </span> --}}
            </div>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required value="{{ old('harga') }}">
            @error('harga')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <select class="form-select" name="kategori_id" aria-label="Default select example">
            <option value="" disabled selected>Pilih kategori</option>
             @foreach($kategoris as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
            @endforeach
        </select>

        <div class="mb-3">
            <label for="title" class="form-label">masukan Gram(G)/slice</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="berat_barang" name="berat_barang" required autofocus value="{{ old('berat_barang') }}">
            @error('berat_barang')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Post image</label>
            <img id="imagePreview" class="img-preview img-fluid mb-3 col-sm-" style="display: none;">
            <input class="form-control @error('image') is-invalid @enderror" id="image" type="file" name="img" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

        <button type="submit"class="btn btn-primary">Submit</button>
    </form>
</table>
</div>  

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('#imagePreview'); // Pastikan ID cocok dengan HTML

        if (image.files && image.files[0]) {
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function (oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }

            imgPreview.style.display = 'block';
        } else {
            imgPreview.style.display = 'none';
        }
    }
</script>
@endsection
