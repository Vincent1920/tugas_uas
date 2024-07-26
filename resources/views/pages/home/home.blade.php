
    <!-- 
        IF-8 
    Abdul Malik Febrian Zulkifli (10123308)
    Nadzla Khoerunnisa Misbah(10123285)
    vincent luhulima  (10123309)
     -->
 @extends('index')
 @section('container-home')


    <!-- content -->

    <div class="container ">
        <img src="img/Hero_Web_desk_2024_19 1.jpg" alt="">

        <div class="container1">
            <p>
                Premium Chocolate
            </p>

            <h3>
                Packed with natural ingredients, 30% protein and no artificial sweeteners
            </h3>
            <div class="container2">
                <div class="container1-shop ">
                    <a class="bob" href="page/shop.html">

                        <h2 class="Redressed">
                            Shop Here
                        </h2>
                    </a>
                </div>
                <div class="container1-shop1 ">
                    <a href="{{route('learn')}}" class="bob1 bob">
                        <h2 class="Redressed">
                            learn more here
                        </h2>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <br />
    <div class="content-text">

        <h1 class="text">
            protein alami
        </h1>
    </div>
    <br />

    <div class="container-ke2">
        <div class="container_ke2-card">
            <div class="container_ke2-card1">

                <img src="img/shop/baratti_milano-removebg-preview.png" alt="">
            </div>
            <br />
            <b>
                <p>IDR 10.000</p>
            </b>
            <br />
            <p> Baratti Milano</p>
        </div>
        <div class="container_ke2-card">
            <div class="container_ke2-card1 container_ke2-card2 ">
                <img src="img/shop/dark_22_piece-removebg-preview.png" alt="">
            </div>
            <br />
            <b>
                <p>IDR 80.500</p>
            </b>
            <br />
            <p> Dark Choco</p>
        </div>
        <div class="container_ke2-card">
            <a href="">

                <div class="container_ke2-card3">

                    <img src="img/shop/Milk_Chocolate _Single_Bar.png" alt="">
                </div>
            </a>
            <br />
            <b>
                <p>IDR 43.200</p>
            </b>
            <br />
            <p> Milk Chocolate Single Bar</p>
        </div>
    </div>
    <div class="container-ke3">
        <br>
        <br>
        <h1>
            Semuanya alami
        </h1>
        <br>
        <p>
            Di ChocoScript kami hanya menggunakan bahan-bahan alami, dan kami jauh melampaui bubuk sintetis dan aditif
            buatan. Kami mungkin sedikit pilih-pilih dalam hal bahan-bahan kami. Kami hanya menggunakan alam terbaik
            yang tersedia - rasa dan kualitas berarti segalanya bagi kami. Selalu. Kami menghabiskan banyak waktu untuk
            menemukan rasa baru dan menarik, dan kami akan berusaha keras untuk pilihan inovatif baru, tetapi kami tidak
            pernah berkompromi dengan selera yang baik. Ini adalah cinta kami untuk
        </p>

    </div>

    <div class="container-ke4">
        <br>
        <h1>Hadiah untuk setiap kesempatan</h1>
        <br>
        <div class="container-ke4_dispay">
            <div class="container-ke4_card">
                <img src="img/shop/hersheys-removebg-preview.png" alt="">
                <div class="container-ke4_card1">
                    <a class="bob" href="page/shop.html">

                        <p>Shop Here</p>
                    </a>

                </div>
            </div>
            <div class="container-ke4_card">
                <img src="img/shop/delivered_nationwide-removebg-preview.png" alt="">
                <div class="container-ke4_card1">
                    <a class="bob" href="page/shop.html">

                        <p>Shop Here</p>
                    </a>

                </div>
            </div>
            <div class="container-ke4_card">
                <img src="img/shop/candy_boxes-removebg-preview.png" alt="">
                <div class="container-ke4_card1">
                    <a class="bob" href="page/shop.html">

                        <p>Shop Here</p>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-name">
          <h1>ChocoScript</h1>
          <a href="https://www.instagram.com/vincent_6010/">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg>
          </a>
        </div>
      </div>

@endsection