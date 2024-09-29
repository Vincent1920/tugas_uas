    
@extends('pages.shop.index')
@section('shop')
<div class="container ">

    <!-- <img class="" src="../img/shop/home.webp" alt=""> -->
    <div class="content_text">
        <h2 class="animation">
            Seluruh ChocoScript
        </h2>
    </div>
</div>
<br>

<div class="iklan_1 sticky">
    <div class="iklan__1">
        <h1>
            <span></span>
            <!-- <span>ChocoScript</span> -->
            <div class="message">
                <div class="word1">ChocoScript</div>
                <div class="word2">ChocoScript</div>
                <div class="word3">ChocoScript</div>
            </div>
        </h1>
    </div>
</div>
<div class="container1">
    <div class="nav-container1">
        <div id="dd1" class="wrapper-dropdown-2">
            <p class="dropdown1">
                <b>Kategori</b>
            </p>
            <ul class="dropdown">
                @foreach($kategoris as $kategori)
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('kategori.show', $kategori->id) }}">{{ $kategori->nama_kategori }}</a>
                </li>
                @endforeach
                {{-- <li><a href="/kategori/{id}">roti</a></li> --}}
                {{-- <li><a href="../page/kategori/drink.html">Drink</a></li> --}}
                {{-- <li><a href="../page/kategori/boxs.html">Boxs</a></li> --}}
            </ul>
        </div>
    </div>


    <div class="container-1">
        
        <!-- card 1 -->
        <div class="container--1">
            @foreach ( $barangs as $barang )

            <div class="container--1cart">
                <div class="container--1cart1">
                    <p>{{$barang->harga}}</p>
                </div>

                <div class="container--1cart2">
                    
                    <a href="{{ route('card.show', $barang->id) }}">
                        <img class="container--1cart2-img" src="{{ asset('images/' . $barang->img) }}"
                            alt="{{ $barang->title }}">
                    </a>

                </div>
                <div class="container--1cart3">
                    <p>
                        {{$barang->title}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection