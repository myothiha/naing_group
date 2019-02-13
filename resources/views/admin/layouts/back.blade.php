<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title class="has_page_title">Dashboard - Naing Group | Col,td</title>
    <!-- FAVICON -->
    <link href="http://via.placeholder.com/32x32" rel="icon" type="image/png">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="\assets/plugins/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- JQUERY UI -->
    <link type="text/css" href="\assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
    <!-- STYLE -->
    <link id="stylesheet" type="text/css" href="\assets/css/style.css" rel="stylesheet" media="screen">
    <!-- CUSTOM STYLE -->
    <link type="text/css" href="\assets/css/custom.css" rel="stylesheet">
    <!--  MODERNIZR JS -->
    <script src="\assets/plugins/modernizr/modernizr-custom.js"></script>
    <!--  PLUGINS -->
    <link type="text/css" href="\assets/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="\assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
    <link href="\assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet"/>
    <link type="text/css" href="\assets/plugins/rickshaw/css/rickshaw.css" rel="stylesheet">
</head>
<body class="">

<!-- BEGIN PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div>
<!-- END PRELOADER -->

<!-- BEGIN MAIN WRAPPER -->
<div class="body-wrap">
    <!--BEGIN SM CONTAINER-->
    <div id="sm-container" class="sm-container">
        <div class="sm-menu sm-effect-1" id="menu-1">
            <div class="sm-profile">
                <div class="sm-profile-user-wrapper">
                    <div class="profile-user-image">
                        <img src="/images/logo.png" class="img-circle rounded-circle" alt="perfectin.co"/>
                    </div>
                    <div class="profile-user-info">
                        <span class="profile-user-name"> {{ \Illuminate\Support\Facades\Auth::user()->name ?? '' }}</span>
                        <!-- <span class="profile-user-email">Perfectin</span> -->
                    </div>
                </div>
            </div>
        </div>
        <nav id="ml-menu" class="menu sm-menu sm-effect-1">
            <a class="action--close hide">close</a>
            <div class="menu__wrap sm-menu-list">
                <ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="All">
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" data-submenu="submenu-1" aria-owns="submenu-1" href="javascript:void(0)">
                            <i class="icon ion-ios-home-outline"></i> Home Page
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" data-submenu="submenu-2" aria-owns="submenu-2" href="javascript:void(0)">
                            <i class="icon ion-ios-settings-strong"></i> Projects
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link"  href="/admin/milestone">
                            <i class="icon ion-ios-book-outline"></i> Mile-Stones
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link"  href="/admin/csr">
                            <i class="icon ion-ios-briefcase-outline"></i> CSRs
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link"  href="/admin/business">
                            <i class="icon ion-ios-cog-outline"></i> Business Units
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link"  href="javascript:void(0)" data-submenu="submenu-3" aria-owns="submenu-3">
                            <i class="icon ion-ios-person-outline"></i> Our People
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/faq">
                            <i class="icon ion-ios-analytics-outline"></i> FAQs
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" data-submenu="submenu-6" aria-owns="submenu-5" href="/admin/blog">
                            <i class="icon ion-ios-cog-outline"></i> Blogs
                        </a>
                    </li>
                </ul>
                <!-- SUBMENU 1 -->
                <ul data-menu="submenu-1" id="submenu-1" class="menu__level" tabindex="-1" role="menu"
                    aria-label="Dashboard">
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/homeslide">
                            <i class="icon ion-ios-pie-outline"></i> Home Slider
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/about">
                            <i class="icon ion-ios-chatboxes-outline"></i> About Us
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/whychoose">
                            <i class="icon ion-ios-chatbubble-outline"></i> Why Choose Us
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/indexdata">
                            <i class="icon ion-ios-albums-outline"></i> Index Data
                        </a>
                    </li>
                </ul>
                <!-- SUBMENU 2 -->
                <ul data-menu="submenu-2" id="submenu-2" class="menu__level" tabindex="-1" role="menu"
                    aria-label="UI Elements">
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/projectfacilities">
                            <i class="icon ion-ios-albums-outline"></i> Project Facility
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/projecttype">
                            <i class="icon ion-ios-alarm-outline"></i> Project Type
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/status">
                            <i class="icon ion-ios-albums-outline"></i> Project Status
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/room-features">
                            <i class="icon ion-ios-albums-outline"></i> Room Feature
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/city">
                            <i class="icon ion-ios-alarm-outline"></i> City
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/project">
                            <i class="icon ion-ios-albums-outline"></i> Our Project
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/gallery">
                            <i class="icon ion-ios-alarm-outline"></i> Project Gallery
                        </a>
                    </li>
                    
                </ul>
                <ul data-menu="submenu-3" id="submenu-3" class="menu__level" tabindex="-1" role="menu"
                    aria-label="Pages">
                   
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/team">
                            <i class="icon ion-log-in"></i> Our Teams
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/contact">
                            <i class="icon ion-log-in"></i> Contact Us
                        </a>
                    </li>
                </ul>
                <!-- SUBMENU 6 -->
                <ul data-menu="submenu-6" id="submenu-6" class="menu__level" tabindex="-1" role="menu"
                    aria-label="Applications">
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/blogcategory">
                            <i class="icon ion-ios-refresh-outline"></i> Category
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" data-submenu="submenu-7" aria-owns="submenu-5" href="/admin/tag">
                            <i class="icon ion-ios-cog-outline"></i> Popular Tag
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="/admin/blog">
                            <i class="icon ion-ios-rose-outline"></i> Blog
                        </a>
                    </li>
                </ul>
                
            </div>
        </nav>

        <!-- BEGIN SM PUSHER -->
        <div class="sm-pusher">
            <div class="sm-content">
                <div class="sm-content-inner">
                    <!-- BEGIN HEADER -->
                    <div class="header">
                        <!-- BEGIN TOP BAR -->
                        <div class="top-navbar" id="top-navbar">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="aux-text d-none d-md-inline-block">
                                            <ul class="inline-links inline-links--style-1">
                                                <li class="d-none d-lg-inline-block">
                                                    <a href="javascript:void(0)"><i class="fa fa-phone"></i> +95 09-</a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank"><i
                                                            class="fa fa-globe"></i>
                                                        Naing Group </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <nav class="top-navbar-menu">
                                            <ul class="top-menu">
                                                <li class="d-none d-lg-inline-block">
                                                    <a href="/admin/user">Create account</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" id="btn-search">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle has-badge" href="javascript:void(0)"
                                                       data-toggle="dropdown"
                                                       data-hover="dropdown"
                                                       aria-expanded="false">
                                                        <span class="dropdown-text strong-600 d-none d-lg-inline-block d-xl-inline-block">
                                                            <i class="fa fa-user"></i>   {{ \Illuminate\Support\Facades\Auth::user()->name ?? '' }}
                                                        </span>
                                                        <span class="dropdown-text strong-600 d-xl-none d-lg-none d-md-inline-block">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-scale">
                                                        <h6 class="dropdown-header">Navigation</h6>
                                                        <a class="dropdown-item" href="/admin/message">
                                                            <span class="float-right badge badge-primary">4</span>
                                                            <i class="ion-ios-email-outline icon-lg text-primary"></i>Messages
                                                        </a>
                                                        
                                                        
                                                       
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        <i class="ion-log-out icon-lg text-primary" ></i> {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END TOP BAR-->

                        <!-- BEGIN SEARCH -->
                        <div class="search sm_bg_2">
                            <i id="btn-search-close" class="icon-close btn--search-close"></i>
                            <form class="search__form" action="/admin/">
                                <input class="search__input" name="search" type="search" placeholder="Search.."
                                       autocomplete="off"
                                       spellcheck="false"/>
                                <span class="search__info">Hit enter to search or ESC to close</span>
                            </form>
                            <div class="search__related">
                                <div class="search__suggestion">
                                    <h3>May We Suggest?</h3>
                                    <p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes
                                        #yesyes #aliens
                                        #green</p>
                                </div>
                                <div class="search__suggestion">
                                    <h3>Is It This?</h3>
                                    <p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny
                                        #catgif #broken
                                        #lost</p>
                                </div>
                                <div class="search__suggestion">
                                    <h3>Needle, Where Art Thou?</h3>
                                    <p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes
                                        #aliens #green
                                        #drone</p>
                                </div>
                            </div>
                        </div>
                        <!-- END SEARCH -->

                        <!-- BEGIN NAVBAR -->
                        <nav id="header"
                             class="navbar navbar-expand-lg navbar--bold navbar-light bg-default navbar--bb-1px">
                            <!--navbar-inverse bg-dark-->
                            <div class="container navbar-container">
                                <!-- BEGIN LOGO -->
                                <a class="navbar-brand" href="index.html">
                                    <img src="/images/logo.png" class="" alt="perfectin.co">
                                </a>
                                <!--END LOGO-->

                                <div class="d-inline-block">
                                    <!-- BEGIN NAVBAR TOGGLER  -->
                                    <button class="navbar-toggler hamburger hamburger-js hamburger--spring"
                                            type="button" data-toggle="collapse" data-target="#navbar_main">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                    <!-- END NAVBAR TOGGLER  -->
                                </div>

                                <div class="collapse navbar-collapse align-items-center justify-content-end"
                                     id="navbar_main">
                                    <!-- BEGIN NAVBAR LINKS -->
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown {{ $menu ?? "" }}">
                                            <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                                               data-toggle="dropdown">
                                                <i class="icon ion-ios-home-outline icon_nav"></i> Home Pages
                                            </a>
                                            <ul class="dropdown-menu sm_p_t_b">
                                                <li class="nav-item">
                                                    <a href="/admin/homeslide" class="dropdown-item">Home Slider</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/admin/about" class="dropdown-item"> About Us
                                                        </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/admin/whychoose" class="dropdown-item"> Why Choose Us
                                                        </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/admin/indexdata" class="dropdown-item">Index Data</a>
                                                </li>
                                                <!-- <li class="nav-item">
                                                    <a href="sm_dashboard_05.html" class="dropdown-item">Dashboard
                                                        05</a>
                                                </li> -->
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown {{ $mainproject ?? "" }}">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                               data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">
                                                <i class="icon ion-ios-settings-strong icon_nav"></i> Projects
                                            </a>

                                            <div class="dropdown-menu">
                                                <div class="mega-dropdown-menu row row-no-padding">
                                                    <ul class="megadropdown-links">
                                                        <li>
                                                            <a class="dropdown-item"
                                                               href="/admin/projectfacilities">
                                                                Projects Facility
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                               href="/admin/projecttype">
                                                                Projects Type
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                               href="/admin/status">
                                                                Projects Status
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                               href="/admin/city">
                                                                City
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                               href="/admin/room-features">
                                                                Room Feature
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                               href="/admin/project">
                                                                Our Projects
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                               href="/admin/gallery">
                                                                Projects Gallery
                                                            </a>
                                                        </li>
                                                        
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item {{ $mainmilestone ?? "" }}">
                                            <a class="nav-link" href="/admin/milestone">
                                                <i class="icon ion-ios-compose-outline icon_nav"></i> Mile-Stones
                                            </a>
                                        </li>                                       

                                        <li class="nav-item {{ $maincsr ?? "" }}">
                                            <a class="nav-link" href="/admin/csr">
                                                <i class="icon ion-ios-briefcase-outline icon_nav"></i> CSRs
                                            </a>
                                        </li>

                                        <li class="nav-item {{ $mainbusiness ?? "" }}">
                                            <a class="nav-link" href="/admin/business">
                                                <i class="icon ion-ios-bookmarks-outline icon_nav"></i> Business Units
                                            </a>
                                        </li>

                                        <li class="nav-item dropdown {{ $mainteam ?? "" }}">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                               data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">
                                                <i class="icon ion-ios-person-outline icon_nav"></i> Our People
                                            </a>

                                            <div class="dropdown-menu">
                                                <div class="mega-dropdown-menu row row-no-padding">
                                                    <ul class="megadropdown-links">
                                                       
                                                        <li>
                                                            <a class="dropdown-item"
                                                               href="/admin/team">
                                                                Our Team
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                               href="/admin/contact">
                                                                Contact Us
                                                            </a>
                                                        </li>
                                                         <li>
                                                            <a class="dropdown-item"
                                                               href="/admin/booking">
                                                                Booking
                                                            </a>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="nav-item {{ $mainfaq ?? "" }}">
                                            <a class="nav-link" href="/admin/faq">
                                                <i class="icon ion-ios-cog-outline icon_nav"></i> FAQs
                                            </a>
                                        </li>

                                        <li class="nav-item dropdown {{ $mainblog ?? "" }}">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                               data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">
                                                <i class="icon ion-ios-chatbubble-outline"></i> Blogs
                                            </a>

                                            <div class="dropdown-menu">
                                                <div class="mega-dropdown-menu row row-no-padding">
                                                    <ul class="megadropdown-links">
                                                        <li>
                                                            <a class="dropdown-item"
                                                               href="/admin/blogcategory">
                                                                Category
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                               href="/admin/tag">
                                                                Popular Tag
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                               href="/admin/blog">
                                                                Blog
                                                            </a>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <!-- END NAVBAR LINKS -->
                                </div>
                                <div class="d-none d-lg-inline-block d-xl-inline-block">
                                    <!--BEGIN SIDEBAR BUTTON-->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item nav-item-icon hidden-md-down">
                                            <a href="javascript:void(0)" class="nav-link btn-st-trigger p-r-5"
                                               data-effect="sm-effect-1">
                                                <span><i class="fa fa-bars"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--END SIDEBAR BUTTON-->
                                </div>
                            </div>
                        </nav>
                        <!--END NAV BAR-->
                    </div>
                    <!--END HEADER-->

                   @yield('content')
                   

                    <!-- BEGIN FOOTER -->
                    <footer id="footer" class="footer footer-inverse">
                        <div class="footer-bottom py-3">
                            <div class="container">
                                <div class="row cols-xs-space col-sm-space align-items-center">
                                    <div class="col-md-7 col-12">
                                        <div class="text-xs-center text-sm-left">
                                            <ul class="footer-menu">
                                                <li>
                                                    <a href="index.html" class="p-l-0">Home</a>
                                                </li>
                                                <li>
                                                    <a href="#">Website</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Portfolio</a>
                                                </li>
                                            </ul>

                                            <div class="copyright mt-1">
                                                <ul class="copy-links">
                                                    <li>
                                                        © 2018 <a href="#" target="_blank"> Naing Group </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Terms</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">License</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Privacy policy</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="text-xs-center text-sm-right">
                                            <ul class="social-media social-media--style-1-v4">
                                                <li>
                                                    <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                       data-original-title="Facebook">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                       data-original-title="Twitter">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                       data-original-title="Instagram">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                       data-original-title="Github">
                                                        <i class="fa fa-github"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!--END FOOTER-->
                </div>
            </div>
        </div>
        <!-- END SM PUSHER -->
    </div>
    <!--END SM CONTAINER-->
</div>
<!-- END MAIN WRAPPER -->

<!-- TO TOP -->
<a href="javascript:void(0)" class="back-to-top btn-back-to-top sm_bg_1"></a>





<!-- CORE JS -->
<script src="\assets/plugins/jquery/jquery.min.js"></script>
<script src="\assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="\assets/plugins/popper/popper.min.js"></script>
<script src="\assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="\assets/js/slidebar/slidebar.js"></script>
<script src="\assets/js/classie.js"></script>
<script src="\assets/js/side_menu.js"></script>

<!-- PLUGINS -->
<script src="\assets/plugins/pace/pace.min.js"></script>
<script src="\assets/plugins/smooth-scrollbar/smooth-scrollbar.js"></script>
<script src="\assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script src="\assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="\assets/plugins/placeholders/placeholders.js"></script>
<script src="\assets/plugins/d3/d3.js"></script>
<script src="\assets/plugins/nvd3/build/nv.d3.js"></script>
<script src="\assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="\assets/plugins/ckeditor/ckeditor.js"></script>
<script src="\assets/plugins/rickshaw/js/rickshaw.min.js"></script>
<script src="\assets/plugins/ResizeSensor/ResizeSensor.js"></script>
<script src="\assets/plugins/countup/countUp.min.js"></script>
<script src="\assets/plugins/jquery-equal-height/jquery-equal-height.min.js"></script>
<script src="\assets/plugins/jquery.sparkline/jquery.sparkline.min.js"></script>
<script src="\assets/plugins/chartjs/Chart.min.js"></script>

<!-- APP JS -->
<script src="\assets/js/app.js"></script>
<script src="\assets/js/sm_dashboard_01.js"></script>
<script src="\assets/js/sm_chat_application.js"></script>

@yield('scripts')

</body>
</html>

