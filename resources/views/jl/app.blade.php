<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Jose Sicajan"/>
    <meta name="description" content="Jose Sicajan - Software Engineer"/>
    <meta name="author" content="iqonicthemes.in"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="template/images/ico.png"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;Raleway:400,500,600,700,800"
          rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="template/css/bootstrap.min.css">

    <!-- Themify Fonts -->
    <link rel="stylesheet" type="text/css" href="template/css/themify-icons.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="template/css/font-awesome.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="template/css/magnific-popup/magnific-popup.css"/>

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="template/css/owl-carousel/owl.carousel.css"/>

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="template/css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="template/css/responsive.css">

    <!-- custom style -->
    <link rel="stylesheet" href="template/css/custom.css"/>

</head>

<body>

<!-- loading -->

<div id="loading" class="purple-bg">
    <div id="loading-center">
        <div data-loader="spinner"></div>
    </div>
</div>

<!-- loading End -->


<!-- Header  -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light white-bg">
                <div class="col-md-3 purple-bg">
                    <a class="navbar-brand" href="index.html">
                        <br>
                    </a>
                </div>
                <div class="col-md-9">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ti-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto w-100 justify-content-end">
                            <li class="nav-item active">
                                <a class="nav-link" data-type="page-transition" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-type="page-transition" href="{{ route('about_me') }}">About me</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-type="page-transition" href="{{ route('resume') }}">resume</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-type="page-transition" href="{{ route('services') }}">services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-type="page-transition" href="{{ route('portfolio') }}">portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-type="page-transition" href="{{ route('blog') }}">blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-type="page-transition" href="{{ route('contact') }}">contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- Header End -->


<!-- Begin Content -->
@yield('content')
<!-- Main Content End -->


<!-- Footer -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 purple-bg">
            </div>
            <div class="col-md-9">
                <ul class="follow-us pull-right">
                    <li>Follow Me :</li>
                    <li><a href="https://www.linkedin.com/in/sicajancoy/"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/jlsicajan"><i class="fa fa-github"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="template/js/jquery-min.js"></script>
<script type="text/javascript" src="template/js/popper.min.js"></script>
<script type="text/javascript" src="template/js/bootstrap.min.js"></script>

<!-- jquery-appear -->
<script type="text/javascript" src="template/js/jquery.appear.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="template/js/owl-carousel/owl.carousel.min.js"></script>

<!-- jquery-typer -->
<script type="text/javascript" src="template/js/jquery.typer.js"></script>

<!-- jquery-isotope -->
<script type="text/javascript" src="template/js/isotope.pkgd.min.js"></script>

<!-- Magnific-Popup -->
<script type="text/javascript" src="template/js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- jquery Nicescroll -->
<script type="text/javascript" src="template/js/jquery.nicescroll.min.js"></script>

<!-- jquery Retina -->
<script type="text/javascript" src="template/js/retina.min.js"></script>

<!-- Particles -->
<script type="text/javascript" src="template/js/particles/particles.min.js"></script>
<script type="text/javascript" src="template/js/particles/app.js"></script>

<!-- Custom -->
<script type="text/javascript" src="template/js/custom.js"></script>

</body>

</html>