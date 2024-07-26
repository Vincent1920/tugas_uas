    <!-- 
        IF-8 
    Abdul Malik Febrian Zulkifli (10123308)
    Nadzla Khoerunnisa Misbah(10123285)
    vincent luhulima  (10123309)
     -->
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <!-- navbar -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Delius+Unicase&family=Rancho&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="../../css/navbar.css">
        <link rel="shortcut icon" href="../../img/b734317dc97d8d22aec2f5b29e0e8672-removebg-preview.png">
        <title>ChocoScript</title>

        <!-- container -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Delius+Unicase:wght@400;700&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="../../css/shop/kategori.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Delius+Unicase:wght@400;700&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Macondo&display=swap"
            rel="stylesheet">

        <!-- 
        nama  : vincent luhulima 
        kelas : IF-8 
        nim   : 10123309 -->
        <!-- <script src="../../js/index.js"></script> -->
    </head>

</head>

<body>
    @include('navbar.nav')

    {{-- <div class="container">
        <div class="contaier-text">

        </div>
        
    </div> --}}
    <div class="container-kategori">
        <p class="container-kategori-p"> kategori {{ $kategori->nama_kategori }}</p>
        <img class="container-kategori-img" src="../../img/brand/Simply_Collection_Header3_D.webp" alt="">
    </div>

    <div class="container1-kategori">
        @foreach ( $barangs as $barang )
        <div class="container1-kategori-1">
            <div class="container1-kategori-1-2">
                <a href="{{ route('card.show', $barang->id) }}">
                    <img class="container1-kategori-1-2-img" src="{{ asset('images/' . $barang->img) }}" alt="">
                </a>
            </div>
            <P class="container1-kategori-1-p">{{$barang->title}}</P>
            <P class="container1-kategori-2-p">IDR {{$barang->harga}}</P>
        </div>
        @endforeach


    </div>
</body>

</html>