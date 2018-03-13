<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>KyGrow - Magenta</title>
    

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Template styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('css/colorbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/step.css') }}">

</head>
<body>

    <div class="body-inner">



    <!-- Header start -->
    <header>
        <div class="container-fluid">
            <div class="row logo-row">
                <div class="col-xs-12">
                    <div class="col-sm-3 login-btn">
                        @yield('header-left')
                    </div>
                    <div class="col-sm-6 text-center sublogo">
                        <a href="https://www.kyleads.com/?src=KyGrow">
                            <!-- <img src="images/logo.png" alt="" style="margin-top: 8px;"> -->
                            <h3 class="white">A KyLeads Project</h3>
                        </a>
                    </div>
                    <div class="col-sm-3 text-right logo-holder">
                        <a href="{{ url('/') }}">
                            <img src="images/logo-white.png" alt="" style="margin-top: 8px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- content -->

    @yield('content')


    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Counter -->
    <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Waypoints -->
    <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
    <!-- Color box -->
    <script type="text/javascript" src="{{ asset('js/jquery.colorbox.js') }}"></script>
    <!-- Isotope -->
    <script type="text/javascript" src="{{ asset('js/isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ini.isotope.js') }}"></script>
    <!-- Typed -->
    <script type="text/javascript" src="{{ asset('js/typed.min.js') }}"></script>
    <!-- Google Map API Key Source -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <!-- For Google Map -->
    <!-- Doc http://www.mkyong.com/google-maps/google-maps-api-hello-world-example/ -->
    <script type="text/javascript" src="{{ asset('js/gmap3.min.js') }}"></script>
    <!-- Template custom -->
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <!-- KyLeads custom -->
    <script>
        var typed = new Typed('#typed', {
                stringsElement: '#typed-strings',
                typeSpeed: 70,
                startDelay: 50,
                backSpeed: 50,
                loop: true,
            });
    </script>

    </div><!-- Body inner end -->

@extends('layouts.footer')
</body>


</html>    
