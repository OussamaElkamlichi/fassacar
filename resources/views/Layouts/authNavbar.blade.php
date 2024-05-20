<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website Template</title>
    <link rel="icon" href="{{ asset('client_assets/images/icon.png') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('client_assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('client_assets/css/mdb.min.css') }}" type="text/css" id="mdb">
    <link rel="stylesheet" href="{{ asset('client_assets/css/plugins.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client_assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client_assets/css/coloring.css') }}" type="text/css">
    
    <!-- color scheme -->
    <link id="colors" href="{{ asset('client_assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <header class="transparent scroll-light has-topbar">
            <div id="topbar" class="topbar-dark text-light">
                <div class="container">
                    <div class="topbar-left xs-hide">
                        <div class="topbar-widget">
                            <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>+208 333 9296</a>
                            </div>
                            <div class="topbar-widget"><a href="#"><i
                                        class="fa fa-envelope"></i>contact@rentaly.com</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>Mon - Fri 08.00 -
                                    18.00</a></div>
                        </div>
                    </div>

                    <div class="topbar-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-youtube fa-lg"></i></a>
                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.html">
                                            <img class="logo-1" src="{{ asset('client_assets/images/logo-light.png') }}" alt="">
                                            <img class="logo-2" src="{{ asset('client_assets/images/logo.png') }}" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="/">Home</a>
                                        {{-- <ul>
                                            <li><a class="menu-item new" href="02_dark-index-1.html">Homepage 1 Dark</a>
                                            </li>
                                            <li><a class="menu-item new" href="02_dark-index-2.html">Homepage 2 Dark</a>
                                            </li>
                                            <li><a class="menu-item" href="index.html">Homepage Main</a></li>
                                            <li><a class="menu-item" href="index-2.html">Homepage 2</a></li>
                                            <li><a class="menu-item" href="index-3.html">Homepage 3</a></li>
                                            <li><a class="menu-item" href="index-4.html">Homepage 4</a></li>
                                            <li><a class="menu-item" href="index-5.html">Homepage 5</a></li>
                                            <li><a class="menu-item" href="index-6.html">Homepage 6</a></li>
                                        </ul> --}}
                                    </li>
                                    <li><a class="menu-item" href="/carlist">Cars</a>
                                        {{-- <ul>
                                            <li><a class="menu-item" href="cars.html">Cars List 1</a></li>
                                            <li><a class="menu-item" href="02_dark-cars.html">Cars List 1 Dark</a>
                                            </li>
                                            <li><a class="menu-item" href="cars-list.html">Cars List 2</a></li>
                                            <li><a class="menu-item" href="02_dark-cars-list.html">Cars List 2
                                                    Dark</a></li>
                                            <li><a class="menu-item" href="car-single.html">Cars Single</a></li>
                                            <li><a class="menu-item" href="02_dark-car-single.html">Cars Single
                                                    Dark</a></li>
                                        </ul> --}}
                                    </li>
                                    <li><a class="menu-item" href="/booking">Booking</a>
                                        {{-- <ul>
                                            <li><a class="menu-item new" href="quick-booking.html">Quick Booking</a>
                                            </li>
                                            <li><a class="menu-item" href="booking.html">Booking</a>
                                        </ul> --}}
                                        </li>
                                        <li><a class="menu-item" href="account-dashboard.html">My Account</a>
                                            <ul>
                                                <li><a class="menu-item" href="account-dashboard.html">Dashboard</a>
                                                </li>
                                                <li><a class="menu-item" href="account-profile.html">My Profile</a>
                                                </li>
                                                <li><a class="menu-item" href="account-booking.html">My Orders</a>
                                                </li>
                                                <li><a class="menu-item" href="account-favorite.html">My Favorite
                                                        Cars</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="menu-item" href="#">Pages</a>
                                            <ul>
                                                <li><a class="menu-item" href="/about">About Us</a></li>
                                                <li><a class="menu-item" href="/contactUs">Contact</a></li>
                                                <li><a class="menu-item" href="/login">Login</a></li>
                                                <li><a class="menu-item" href="/404">Page 404</a></li>
                                            </ul>
                                        </li>
                                        {{-- <li><a class="menu-item" href="#">News</a>
                                            <ul>
                                                <li><a class="menu-item" href="news-standart-right-sidebar.html">News
                                                        Standard</a>
                                                    <ul>
                                                        <li><a class="menu-item"
                                                                href="news-standart-right-sidebar.html">Right
                                                                Sidebar</a></li>
                                                        <li><a class="menu-item"
                                                                href="news-standart-left-sidebar.html">Left Sidebar</a>
                                                        </li>
                                                        <li><a class="menu-item"
                                                                href="news-standart-no-sidebar.html">No Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class="menu-item" href="news-grid-right-sidebar.html">News
                                                        Grid</a>
                                                    <ul>
                                                        <li><a class="menu-item"
                                                                href="news-grid-right-sidebar.html">Right Sidebar</a>
                                                        </li>
                                                        <li><a class="menu-item"
                                                                href="news-grid-left-sidebar.html">Left Sidebar</a>
                                                        </li>
                                                        <li><a class="menu-item" href="news-grid-no-sidebar.html">No
                                                                Sidebar</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="menu-item" href="#">Elements</a>
                                            <ul>
                                                <li><a class="menu-item" href="preloader.html">Preloader</a></li>
                                                <li><a class="menu-item" href="icon-boxes.html">Icon Boxes</a></li>
                                                <li><a class="menu-item" href="badge.html">Badge</a></li>
                                                <li><a class="menu-item" href="counters.html">Counters</a></li>
                                                <li><a class="menu-item" href="gallery-popup.html">Gallery Popup</a>
                                                </li>
                                                <li><a class="menu-item" href="icons-elegant.html">Icons Elegant</a>
                                                </li>
                                                <li><a class="menu-item" href="icons-etline.html">Icons Etline</a>
                                                </li>
                                                <li><a class="menu-item" href="icons-font-awesome.html">Icons Font
                                                        Awesome</a></li>
                                                <li><a class="menu-item" href="map.html">Map</a></li>
                                                <li><a class="menu-item" href="modal.html">Modal</a></li>
                                                <li><a class="menu-item" href="popover.html">Popover</a></li>
                                                <li><a class="menu-item" href="tabs.html">Tabs</a></li>
                                                <li><a class="menu-item" href="tooltips.html">Tooltips</a></li>
                                            </ul>
                                        </li> --}}
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="/" class="btn-main">Sign In</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->


        @yield('authContent')



               <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer class="text-light">
            <div class="container">
                <div class="row g-custom-x">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>About Rentaly</h5>
                            <p>Where quality meets affordability. We understand the importance of a smooth and enjoyable journey without the burden of excessive costs. That's why we have meticulously crafted our offerings to provide you with top-notch vehicles at minimum expense.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Contact Info</h5>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>+1 333 9296</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
                                <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <h5>Quick Links</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="widget">
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Partners</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Social Network</h5>
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="index.html">
                                        Copyright 2024 - Rentaly by Designesia
                                    </a>
                                </div>
                                <ul class="menu-simple">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
        <!-- Javascript Files
        ================================================== -->
        <script src="{{ asset('client_assets/js/plugins.js') }}"></script>
        <script src="{{ asset('client_assets/js/designesia.js') }}"></script>

</body>

</html>
