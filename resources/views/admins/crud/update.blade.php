@extends('admins.index')
@section('admin')

<div class="col-lg-8">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">edit Barang</h1>
    </div>


    <form method="POST" action="{{ route('barangs.update',$barang->id) }}" class="mb-5" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                required autofocus value="{{ $barang->title }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>



        <div class="mb-3">
            <label for="harga" class="form-label">harga</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                required value="{{ old('harga', $barang->harga) }}">
            @error('harga')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
            <select class="form-select @error('kategori_id') is-invalid @enderror" id="kategori_id" name="kategori_id" aria-label="Default select example">
                <option value="" disabled selected>Pilih kategori</option>
                @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->id }}" {{ $kategori->id == old('kategori_id', $barang->kategori_id) ? 'selected' : '' }}>
                        {{ $kategori->nama_kategori }}
                    </option>
                @endforeach
            </select>
            @error('kategori_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="image" class="form-label"> Images</label>

            <!-- Menyimpan nilai gambar lama sebagai hidden field -->
            <input type="hidden" name="oldimage" value="{{ $barang->image }}">


            @if($barang->img)
            <img src="{{ asset('images/' . $barang->img) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block"
                id="imagePreview">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-" id="imagePreview" style="display: none;">
            @endif

            <!-- Input untuk gambar baru -->
            <input class="form-control @error('image') is-invalid @enderror" id="img" type="file" name="img"
                onchange="previewImage()">

            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea placeholder="" class="form-control" name="deskripsi" id="deskripsi"
                rows="3">{{ old('deskripsi', $barang->deskripsi) }}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit edit</button>
    </form>
    </table>
</div>

<script>
    function previewImage() {
        const image = document.querySelector('#img');
        const imgPreview = document.querySelector('#imagePreview');

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