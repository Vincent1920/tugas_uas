<!DOCTYPE html>
<html lang="en">

<head>
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
    {{-- <link rel="stylesheet" href="css/navbar.css"> --}}

    <title>ChocoScript</title>

    <!-- content -->
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" href="css/shop/shop.css">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Quintessential&family=Ribeye+Marrow&family=Rochester&family=Sail&family=Shalimar&family=Spirax&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Quintessential&family=Rochester&family=Sail&family=Shalimar&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rochester&family=Sail&family=Shalimar&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
      <!-- 
        IF-8 
    Abdul Malik Febrian Zulkifli (10123308)
    Nadzla Khoerunnisa Misbah(10123285)
    vincent luhulima  (10123309)
     -->

<body>
<script src="js/shop.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    jQuery(document).ready(function($) {
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
                    $('.wrapper-dropdown-3',).not(self.dd).removeClass('active');
                });
            }
        };
        
        $(function () {
            var dd = new DropDown($('#dd2'));
        });
    });
</script>
{{-- <script src="js/nav.js"></script> --}}
    <script src="js/index.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quintessential&family=Rochester&family=Sail&family=Shalimar&family=Spirax&display=swap');
        </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            jQuery(document).ready(function($) {
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
                    var dd = new DropDown($('#dd'));
                });
            });
        </script>

   @include('navbar.nav')

    @yield('shop')

    @include('footer.footer')

</body>

</html>