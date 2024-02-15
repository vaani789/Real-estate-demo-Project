<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTSociety</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('fronted/images/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('fronted/images/favicons/favico.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('fronted/images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{url('fronted/images/favicons/site.webmanifest')}}">
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css-->
    <link rel="stylesheet" href="{{url('fronted/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('fronted/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('fronted/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('fronted/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('fronted/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('fronted/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{url('fronted/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{url('fronted/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{url('fronted/css/jarallax.css')}}">

    <link rel="stylesheet" href="{{url('fronted/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{url('fronted/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{url('fronted/css/vegas.min.css')}}">
    <link rel="stylesheet" href="{{url('fronted/css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{url('fronted/css/nouislider.pips.css')}}">
    <link rel="stylesheet" href="{{url('fronted/css/tolips.css')}}">
    <!-- Template styles -->
    <link rel="stylesheet" href="{{url('fronted/css/style.css')}}">
    <link rel="stylesheet" href="{{url('fronted/css/responsive.css')}}">

</head>

<body>

    <div class="preloader">
        <img src="{{url('fronted/images/resources/logo1.png')}}" class="preloader__image" alt="">
    </div><!-- /.preloader -->

    <div class="page-wrapper">

        <div class="site-header__header-one-wrap clearfix">

            <div class="header_top_one">
                <div class="container">
                    <div class="header_top_one_inner clearfix">
                        <div class="header_top_one_logo_box float-left">
                            <div class="header_top_one_logo">
                                <a href="index"><img src="{{url('fronted/images/resources/logo1.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="header_top_one_content_box float-right">
                        
                            <div class="header_top_one_content_box_bottom">
                                <div class="header_top_one_content_box_bottom_inner clearfix">
                                    <div class="header_top_one_content_box_bottom__social_box">
                                        <div class="header_top_one_content_box_bottom__social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                                            <a href="#"><i class="fab fa-dribbble"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="header_top_one_content_box_bottom_contact_info">
                                        <ul class="header_top_one_content_box_bottom_contact_info_list list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-phone-call"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Call</p>
                                                    <a href="tel:9592206666">9592206666</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-message"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Email</p>
                                                    <a href="mailto:tarsemtelecom@gmail.com">tarsemtelecom@gmail.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <header class="main-nav__header-one">
                <div class="container">
                    <nav class="header-navigation one stricky">
                        <div class="container-box clearfix">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="main-nav__left main-nav__left_one float-left">
                                <a href="#" class="side-menu__toggler">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <div class="main-nav__main-navigation one clearfix">
                                    <ul class=" main-nav__navigation-box float-left">
                                        <li class="dropdown ">
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#about">About</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#importantdocument">Important Documents</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#aproveplans">Approved Buildings</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#bankdocument">Bank Documentation</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Proposed Plan</a>
                                        </li>
                                        <li>
                                            <a href="#contact">Contact</a>
                                        </li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div>
                            <div class="main-nav__right main-nav__right_one float-right"> 
                                <!-- <div class="icon_search_box">
                                    <a href="#" class="main-nav__search search-popup__toggler">
                                        <i class="icon-magnifying-glass"></i>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
        </div>
    </div>
</body>
</html>