<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
       <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Pixel-plus">
        <meta name="description" content="Kindi - Non Profit Charity HTML Template">
        <!-- ======== Page title ============ -->
       
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="{{asset('assets/img/favicon.svg')}}">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">                   
    </head>
    <body>

       @include('layouts.header');
       
        <!-- Hero Section Start -->
     <section>
           @yield('content')
     </section>

    @include('layouts.footer')

       
    </body>
</html>