<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- TITLE -->
    <title>DB - @yield('title')</title>

    <!--  FAVICON  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/favicon.png') }}">

    <!-- FONT AWESOME ICONS LIBRARY -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/css/all.min.css') }}">

    {{-- <link rel="stylesheet" href="{{ asset('assets/fonts/css/canvas.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/fonts/css/canvas2.css') }}">
    <!-- CSS LIBRARY STYLES -->
    
    <link rel="stylesheet" href="{{ asset('assets/css/lib/bootstrap.min.css') }}">
    <link rel='stylesheet' href="{{ asset('assets/css/lib/flickity.min.css') }}">
    <link rel='stylesheet' href="{{ asset('assets/css/lib/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">

    <!-- CSS TEMPLATE STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- MODERNIZR LIBRARY -->
    <script src="{{ asset('assets/js/modernizr-custom.js') }}"></script>

</head>

<body>

    <!-- LOADER -->
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>
    <!-- LOADER -->

    <header>
        <!-- NAV START -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a href="/" class="navbar-brand"><img src="{{ asset('assets/images/logos/logo.png')}}" style="width: 150px" alt=""></a>

                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="/" class="nav-item nav-link">HOME</a></li>
                        <li><a href="/about" class="nav-item nav-link">ABOUT</a></li>
                        <li><a href="/contact" class="nav-item nav-link">CONTACT</a></li>
                        <li><a href="/projects" class="nav-item nav-link last-link-item">PROJECTS</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- NAV END -->
        @yield('slider')
        @yield('hero')
    </header>

    @yield('content')

    <!-- FOOTER START -->

    <footer>
        <div class="container">
            <figure class="footer-logo">
                <img src="{{ asset('assets/images/logos/logo.png')}}" alt="">
            </figure>
            <div class="footer-social d-flex justify-content-center">
                
                <a href="#">
                    <div><i class="fab fa-facebook-f"></i></div>
                </a>
                <a href="#">
                    <div><i class="fab fa-twitter"></i></div>
                </a>
                <a href="#">
                    <div><i class="fab fa-instagram"></i></div>
                </a>
                <a href="#">
                    <div><i class="fab fa-tiktok"></i></div>
                </a>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->

    <!--SCROLL TOP START-->
    <a href="#0" class="cd-top">Top</a>
    <!--SCROLL TOP START-->

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tsparticles/2.2.4/tsparticles.min.js" integrity="sha512-G9tNKUFBD2ksEoMi+jZF6nHehfK/tTnzUksK++dCXeC4jJSf4TkMfGzWd4Iwy+X1DrzaFUADqLU6qmpoqPGadg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tsparticles/2.2.4/tsparticles.bundle.min.js" integrity="sha512-dhfsuwPg5YSfNROpkVlzPEttthBA4yjbqlsLUW0YneY1Tt7xusLbTeyuWLJSWczDg0UEPEGBCq926NSaH0v4aA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  --}}

    <!-- JAVASCRIPTS -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
    <script src="{{ asset('assets/js/lib/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/lib/plugins.js')}}"></script>
    {{-- <script src="{{ asset('assets/js/lib/nav.fixed.top.js')}}"></script> --}}
    <script src="{{ asset('assets/js/lib/contact.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script src="{{ asset('assets/js/slider.js')}}"></script>
    {{-- <script src="{{ asset('assets/js/canvas.js')}}"></script> --}}
    <script src="{{ asset('assets/js/canvas2.js')}}"></script>
    <!-- JAVASCRIPTS END -->


    @yield('owlll')
</body>

</html>