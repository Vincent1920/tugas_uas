<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/shop/cart.css">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Delius+Unicase:wght@400;700&family=Kotta+One&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Macondo&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manuale:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manuale:ital,wght@0,300..800;1,300..800&family=Margarine&display=swap"
        rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>ChocoScript</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="css/shop/cart.css">
</head>

<body>
    <!-- 
        IF-8 
    Abdul Malik Febrian Zulkifli (10123308)
    Nadzla Khoerunnisa Misbah(10123285)
    vincent luhulima  (10123309)
     -->
    {{-- <script ></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Redressed&display=swap');
    </style>

    <script>
        $(document).ready(function () {
            console.log("jQuery is loaded and ready.");

            var DropDown = function (element) {
                this.dd = element;
                this.initEvents();
            };

            DropDown.prototype = {
                initEvents: function () {
                    var self = this;

                    self.dd.on('click', function (event) {
                        $(this).toggleClass('active');
                        event.stopPropagation();
                    });

                    $(document).click(function () {
                        $('.wrapper-dropdown-3').not(self.dd).removeClass('active');
                    });
                }
            };

            $(function () {
                var dd = new DropDown($('#dd2'));
            });
        });
    </script>

    <div class="iklan">
        <div class="container-iklan">
            <div id="container-iklan">
                <div id="container-iklan-text1"> Vegsn Milk Chocolate 20%</div>
                <div id="container-iklan-text3">Milk Magazine 15%</div>
                <div>Diskon 40%</div>
                <div id="container-iklan-text2"> cherry cake 30%</div>
            </div>
        </div>
    </div>


    <hr />

    <!-- navbar -->

    <nav class="navbar">
        <ul>
            <li class="navbar-li ">

                <a class="navbar-link" href="/"> ChocoScript</a>
            </li>
        </ul>


        <ul class="navbar1">
            <li class="navbar-li dropdown">


                <a class=" navbar-link dropdown-toggle" href="{{ route('shop') }}">
                    Shop
                </a>
                <ul class="dropdown-menu ">
                    <li class="dropdown-item">
                        <a class="navbar-link1" href="{{ route('shop') }}">
                            <div class="navbar-img1">
                                <img src="../img/shop/Milk_Magazine.png" alt="">
                            </div>
                            <div class="navbar-text1">
                                <h2>
                                    Milk Magazine
                                </h2>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a class="navbar-link1" href="{{ route('shop') }}">
                            <div class="navbar-img1">
                                <img src="../img/shop/delivered_nationwide-removebg-preview.png" alt="">
                            </div>
                            <div class="navbar-text1">
                                <h2>
                                    Delivered Nationwide
                                </h2>
                            </div>
                        </a>
                    </li>

                    <li class="dropdown-item">
                        <a class="navbar-link1" href="{{ route('shop') }}">
                            <div class="navbar-img1">
                                <img src="../img/shop/Chocolate.png" alt="">
                            </div>
                            <div class="navbar-text1">
                                <h2>
                                    Chocolate
                                </h2>
                            </div>
                        </a>
                    </li>

                    <li class="dropdown-item">
                        <a class="navbar-link1" href="{{ route('shop') }}">
                            <div class="navbar-img1">
                                <img src="../img/shop/dark_22_piece-removebg-preview.png" alt="">
                            </div>
                            <div class="navbar-text1">
                                <h2>
                                    Dark Choco
                                </h2>
                            </div>
                        </a>
                    </li>


                </ul>
            </li>

            <li class="navbar-li dropdown">
                <a class="navbar-link dropdown-toggle " href="{{route('brand')}}">
                    Brand
                </a>
                <ul class="dropdown-menu ">
                    <li class="dropdown-item">
                        <a class="navbar-link1" href="{{route('shop')}}">
                            <div class="navbar-img1">
                                <img src="../img/brand/Chocolate.png" alt="">
                            </div>
                            <div class="navbar-text1">
                                <h2>
                                    Chocolate
                                </h2>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a class="navbar-link1" href="{{route('shop')}}">
                            <div class="navbar-img1">
                                <img src="../img/brand/dark_22_piece-removebg-preview.png" alt="">
                            </div>
                            <div class="navbar-text1">
                                <h2>
                                    Dark Choco
                                </h2>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a class="navbar-link1" href="{{route('shop')}}">
                            <div class="navbar-img1">
                                <img src="../img/brand/Super_cookies.png" alt="">
                            </div>
                            <div class="navbar-text1">
                                <h2>
                                    Super Cookies
                                </h2>
                            </div>
                        </a>
                    </li>

                    <li class="dropdown-item">
                        <a class="navbar-link1" href="{{route('shop')}}">
                            <div class="navbar-img1">
                                <img src="../img/brand/Tongan_vanilla.png" alt="">
                            </div>
                            <div class="navbar-text1">
                                <h2>
                                    Tongan vanilla
                                </h2>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        @auth
        <ul>
            <li id="dd2" class="navbar_cart wrapper-dropdown-3 navbar-li navbar_cart navbar-link">
                <p class="dropdown2">{{ auth()->user()->username }}</p>
                <ul class="dropdown">
                    <li class="bob_nav">
                        <a href="{{ route('logout') }}">Logout

                            <svg class="bob_nav-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                fill="#c88a5b" class="logout bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                <path fill-rule="evenodd"
                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                            </svg>
                        </a>
                    </li>
                    @if (auth()->user()->role === 'admin')
                    <li class="bob_nav"><a class="dropdown_a" href="/admin">Admin
                            <svg class="bob_nav-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                fill="#c88a5b" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
                                <path
                                    d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                            </svg>
                        </a></li>
                        <li class="bob_nav"><a class="dropdown_a" href="{{route('cart')}}">Card

                            <svg class="bob_nav-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#c88a5b" class="bi bi-basket2-fill" viewBox="0 0 16 16">
                                <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1"/>
                            </svg>
                        </a>
                        </li>
                    @else
                    <li class="bob_nav"><a class="dropdown_a" href="{{route('cart')}}">Card

                            <svg class="bob_nav-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                fill="#c88a5b" class="bi bi-basket2-fill" viewBox="0 0 16 16">
                                <path
                                    d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1" />
                            </svg>
                        </a>
                    </li>
                    @endif
                    {{-- <li><a href="../page/kategori/drink.html">Drink</a></li> --}}
                </ul>
            </li>
            @else
            <a class="navbar-bob" href="/login">Login</a>
        </ul>
        @endauth
    </nav>

    <div class="container-cart">
        <br>
        <br>
        <h1 class="container-cart-h1">Keranjang</h1>
        @if(session('success'))
        <div class="alert alert-success">
            <h1 class="container-cart1-h1">
                {{ session('success') }}

            </h1>
         
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
        <h1 class="container-cart1-h1">mendapatkan pengiriman gratis untuk pesanan Anda!</h1>

        <br>

        @php
            $totalHargaSemuaPesanan = 0;
            $totalPrice = 0;
            $itemTotalPrices = []; 
            $itemDiscounts = [];
        @endphp
        @foreach($cartItems as $item)
        <hr class="hr">

        <div class="container-cart1">
            <div class="container-cart1-2">
                <img class="container-cart1-2-img" src="{{ asset('images/' . $item->barang->img) }}" alt="">
            </div>
            <div class="container-cart1-3">
                <p class="container-cart1-3-titile">{{$item->barang->title}}</p>
                <p class="container-cart1-3-harga">IDR {{$item->barang->harga}} K</p>
                <p class="container-cart1-3-berat_barang">1 BUAH /{{$item->barang->berat_barang}}g</p>

            </div>
            <div class="container-cart1-4">
                <form action="{{ route('cart.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="  input-group">
                        <button type="submit" name="action" value="decrease" class="btn-">-</button>
                        <input type="text" name="quantity" value="{{ $item->quantity }}" class="cart_input-group "
                            readonly>
                        <button type="submit" name="action" value="increase" class="btn">+</button>
                    </div>
                </form>
                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    {{-- <button class="cart_remove" type="submit" class="btn btn-danger">Remove</button> --}}
                    <button class="custom-btn btn-8" type="submit" ><span>Remove</span></button>
                </form>
            </div>
            <div class="container-cart1-5">
                @php
                $totalPrice = 0;
                @endphp
                @php
                $itemTotalPrice = $item->barang->harga * $item->quantity;
                if ($item->quantity > 6) {
                $discount = 0.15;
                } else {
                $discount = 0.00;
                }

                $itemDiscount = $itemTotalPrice * $discount;
                $finalItemPrice = $itemTotalPrice - $itemDiscount;

                $totalPrice += $finalItemPrice;

                $itemTotalPrices[] = $itemTotalPrice;
                $itemDiscounts[] = $itemDiscount;
                @endphp
                <p class="container-cart1-5-P">{{ number_format($itemTotalPrice, 2) }} K</p>
            </div>
        </div>

        @endforeach
        <hr class="hr">
        <div class="container-cart2">
            <div class="container-cart2-1">

            </div>
            <div class="container-cart2-1">
                @php
                $totalOriginalPrice = array_sum($itemTotalPrices);
                $totalDiscount = array_sum($itemDiscounts);
                @endphp
                <table class="table">
                    <tr>
                        <td>
                            Harga sebelum diskon 
                        </td>
                        <td align="center" width="10px">
                            :
                        </td>
                        <td>
                           IDR {{ number_format($totalOriginalPrice, 2, ',', '.') }} K

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Diskon 15%
                        </td>
                        <td align="center" width="10px">
                            :
                        </td>
                        <td>
                           IDR  {{ number_format($totalDiscount, 2, ',', '.') }} K

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Seluruh
                        </td>
                        <td align="center" width="10px">
                            :
                        </td>
                        <td>
                            IDR {{ number_format($totalPrice, 2, ',', '.') }} K

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>

</html>