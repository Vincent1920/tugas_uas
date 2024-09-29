@extends('index')
@section('container-home')
<!-- 
        IF-8 
    Abdul Malik Febrian Zulkifli (10123308)
    Nadzla Khoerunnisa Misbah(10123285)
    vincent luhulima  (10123309)
     -->  
  <script src="../js/index.js"></script>



  <!-- container -->
  <div class=" ">
    <img width="100%" src="../img/brand/Simply_Collection_Header3_D.webp" alt="">
  </div>

  <div class="brand_container">
    <h1>Kenikmatan cokelat alami </h1>
  </div>

  <div class="brand_container1">
    <div class="brand_dispay">
      <div class="brand_animation brand_container-1">
        <a href="{{route('shop')}}">
          <img src="../img/brand/Chocolate.png" alt="">
        </a>
      </div>
      <div class="brand_animation1 brand_container-1">
        <a href="{{route('shop')}}">
          <img src="../img/brand/dark_22_piece-removebg-preview.png" alt="">
        </a>
      </div>
      <div class=" brand_animation2 brand_container-1">
        <a href="{{route('shop')}} ">
          <img src="../img/brand/Super_cookies.png" alt="">
        </a>
      </div>
    </div>
  </div>

  <div class="brand_contaier2">

    <p class="brand_marquee">
      <span>
        Kenikmatan cokelat alami ChocoScript
      </span>
    </p>
    <!-- <p class="marquee marquee2">
      <span>
        ChocoScript
      </span>
    </p> -->
  </div>

  <div class="brand_container3"></div>
  <div class="brand_container4">
    <div class="brand_container-4">
      <div class="brand_container4_text">
        <h1>Semuanya alami, selalu.</h1>
        <br>
        <p>Kami menggunakan bahan-bahan alami terbaik, dan ketika ada
          langit biru di Amager, itu adalah energi dari sinar matahari yang memasok produksi cokelat kami. Kami tidak
          menggunakan pemanis buatan atau perasa buatan. Rasa dan kualitas adalah segalanya. Baca lebih lanjut tentang
          kecintaan kami pada bahan-bahan alami di sini.</p>
      </div>
    </div>
    <div class="brand_container_4">
      <div class="brand_container-ke4">
        <img src="../img/brand/Nyt_theme_1500x1500_web.webp" alt="">
      </div>
      <div class="brand_container_ke4">
        <img src="../img/brand/Group 113.png" alt="">
      </div>
    </div>
  </div>

@endsection
