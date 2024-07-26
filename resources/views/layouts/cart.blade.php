<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delius+Unicase&family=Rancho&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/b734317dc97d8d22aec2f5b29e0e8672-removebg-preview.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/shop/cart.css"> 
    {{-- <link rel="stylesheet" href="css/index.css"> --}}
    <title> ChocoScript</title>
    <link rel="stylesheet" href="css/learn.css">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    {{-- @include('navbar.nav') --}}
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="p-2">
                    <h4>Shopping cart</h4>
                    <div class="d-flex flex-row align-items-center pull-right"><span class="mr-1">Sort by:</span><span class="mr-1 font-weight-bold">Price</span><i class="fa fa-angle-down"></i></div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                    <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                    <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                        <div class="d-flex flex-row product-desc">
                            <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                            <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                        <h5 class="text-grey mt-1 mr-1 ml-1">2</h5><i class="fa fa-plus text-success"></i></div>
                    <div>
                        <h5 class="text-grey">$20.00</h5>
                    </div>
                    <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                    <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                    <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                        <div class="d-flex flex-row product-desc">
                            <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                            <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                        <h5 class="text-grey mt-1 mr-1 ml-1">2</h5><i class="fa fa-plus text-success"></i></div>
                    <div>
                        <h5 class="text-grey">$20.00</h5>
                    </div>
                    <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                    <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                    <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                        <div class="d-flex flex-row product-desc">
                            <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                            <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                        <h5 class="text-grey mt-1 mr-1 ml-1">2</h5><i class="fa fa-plus text-success"></i></div>
                    <div>
                        <h5 class="text-grey">$20.00</h5>
                    </div>
                    <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                    <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                    <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                        <div class="d-flex flex-row product-desc">
                            <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                            <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                        <h5 class="text-grey mt-1 mr-1 ml-1">2</h5><i class="fa fa-plus text-success"></i></div>
                    <div>
                        <h5 class="text-grey">$20.00</h5>
                    </div>
                    <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div>
                </div>
                <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><input type="text" class="form-control border-0 gift-card" placeholder="discount code/gift card"><button class="btn btn-outline-warning btn-sm ml-2" type="button">Apply</button></div>
                <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><button class="btn btn-warning btn-block btn-lg ml-2 pay-button" type="button">Proceed to Pay</button></div>
            </div>
        </div>
    </div>
</body>
</html>