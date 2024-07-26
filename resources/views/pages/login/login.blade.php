    <!-- 
        IF-8 
    Abdul Malik Febrian Zulkifli (10123308)
    Nadzla Khoerunnisa Misbah(10123285)
    vincent luhulima  (10123309)
     -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- navbar -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delius+Unicase&family=Rancho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login/navbar_login.css">
    <link rel="shortcut icon" href="img/b734317dc97d8d22aec2f5b29e0e8672-removebg-preview.png">
    <title>ChocoScript</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="css/login/login.css">
</head>

<body onload="hideLoadingScreen()">

    @include('pages.login.navbar.nav')
    <br>
    <div>

    </div>


    {{-- <h2>Weekly Coding Challenge #1: Sign in/up Form</h2> --}}
    <div class="container1 container" id="container">
        <div class="form-container sign-up-container">
            {{-- <form action="/register" method="POST"> --}}
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h1>Create for you email</h1>
                <p>
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                    </div>
                @endif
                </p>
                <input type="text" name="name" placeholder="Name" />
                <input type="text" name="username" placeholder="User name" />
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit">Sign Up</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form action="{{route('postlogin')}}" method="POST">
                @csrf
                <h1>login</h1>
                <p>
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                    </div>
                @endif
                @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                </div>
            @endif
                </p>
                <input type="email" id="email" name="email"  placeholder="Email" />
                <input type="password" id="password" name="password" placeholder="Password" />
                <button type="submit">Login</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome ChocoScript</h1>
                    <button class="ghost" id="signIn">login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button type="submit" class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../../js/login/login.js"></script>
    <script src="../../js/loading.js"></script>

</body>

</html>