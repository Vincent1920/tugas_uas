    <!-- 
        IF-8 
    Abdul Malik Febrian Zulkifli (10123308)
    Nadzla Khoerunnisa Misbah(10123285)
    vincent luhulima  (10123309)
     -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <meta charset="UTF-8">
    <!-- navbar -->
     
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delius+Unicase&family=Rancho&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/b734317dc97d8d22aec2f5b29e0e8672-removebg-preview.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    {{-- <link rel="stylesheet" href="css/navbar1.css">  --}}
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>ChocoScript</title>

    <link rel="stylesheet" href="css/learn.css">
<link rel="stylesheet" href="css/brand.css">
    {{-- <link rel="stylesheet" href="css/shop"> --}}

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <meta charset="UTF-8">
    <!-- navbar -->
     <!-- Include jQuery from CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <script src="js/nav.js"></script>

    {{-- <script src="js/index.js"></script> --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Redressed&display=swap');
    </style>
   
@include('navbar.nav')

@yield('container-home')
   

@include('footer.footer')

<script src="js/shop.js"></script>

</body>

</html>