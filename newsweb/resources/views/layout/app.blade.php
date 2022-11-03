<!doctype html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <title>MAINNEWS - ახალი ამბები</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
</head>
<body>
    <header class="header-area">
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="city-temperature"> <i class="icofont-ui-weather"></i>
                            <b><strong>ახალი ამბების პლატფორმა</strong></b> </div>
                    </div>
                    <div class="col-lg-6 col-md-4 text-right">
                        <ul class="top-social">
                            <li><a href="#" ><i class="icofont-facebook"></i></a></li>
                            <li><a href="#" ><i class="icofont-twitter"></i></a></li>
                            <li><a href="#" ><i class="icofont-instagram"></i></a></li>
                        </ul>
                        <div class="header-date"> <i class="icofont-clock-time"></i> {{ date('d.F.Y') }} </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-area">
            <div class="sinmun-mobile-nav">
                <div class="logo"> <a href="{{ route('indexx') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a> </div>
            </div>
            <div class="sinmun-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light"> <a class="navbar-brand" href="{{ route('indexx') }}"><img
                                src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="{{ route('indexx') }}" class="nav-link active">მთავარი</a>
                                @foreach ($catnames as $catname)
                                    <li class="nav-item"><a href="{{ route('category' , $catname->id ) }}" class="nav-link">{{ $catname->name }}</a>
                                @endforeach
                            </ul>
                            <div class="others-options">
                                <ul>
                                    <li class="header-search">
                                        <div class="nav-search">
                                            <div class="nav-search-button"> <i class="icofont-ui-search"></i> </div>
                                            <form action="{{ route('search') }}" method="GET"> <span class="nav-search-close-button" tabindex="0">✕</span>
                                                <div class="nav-search-inner"> <input type="text" name="search"
                                                        placeholder="ძიება...."> </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
	@yield('content')
	<footer>
        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <p >Copyright © 2021 <a href="http://envytheme.com/" target="_blank"></a>. All Rights
                            Reserved.</p>
                    </div>
                    <div id="top-ge-counter-container" data-site-id="115372"></div>
                <script async src="//counter.top.ge/counter.js"></script>
                </div>
            </div>
        </div>
    </footer>
    <div class="go-top"><i class="icofont-swoosh-up"></i></div>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
