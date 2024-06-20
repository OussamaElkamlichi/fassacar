<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Fassacar</title>
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Mannatthemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />


    <link rel="stylesheet" href="assets/css/icons.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />

    <!-- color scheme -->
    <link id="colors" href="{{ asset('client_assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    {{-- @if (auth()->user()->user_type = 'amdin') --}}


    {{-- admin navbar --}}

    {{-- <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
            <div class="card">
                <div class="card-body">
                    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
                        <div class="container flex flex-wrap justify-between items-center mx-auto">
                        <a href="inbox.html" class="flex items-center">
                            <img src="assets/images/logo-sm.png" class="mr-3 h-6 sm:h-9" alt="T-Wind Logo" />
                            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">T-Wind</span>
                        </a>
                        <div class="flex items-center md:order-2">
                            <div class="dropdown">
                                <button type="button" class="dropdown-toggle flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 " id="user-menu-button" aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="w-8 h-8 rounded-full" src="assets/images/users/avatar-4.jpg" alt="user photo">
                                  </button>
                                  <!-- Dropdown menu -->
                                  <div class="dropdown-menu dropdown-menu-right hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown">
                                    <div class="py-3 px-4">
                                      <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                                      <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                                    </div>
                                    <ul class="py-1" aria-labelledby="dropdown">
                                      <li>
                                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                                      </li>
                                      <li>
                                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                                      </li>
                                      <li>
                                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                                      </li>
                                      <li>
                                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                                      </li>
                                    </ul>
                                  </div>
                            </div>
                            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                                <i class="fas fa-bars"></i>
                          </button>
                        </div>
                        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                          <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            <li>
                              <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
                            </li>
                            <li>
                              <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                            </li>
                            <li>
                              <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                            </li>
                            <li>
                              <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
                            </li>
                            <li>
                              <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                            </li>
                          </ul>
                        </div>
                        </div>
                      </nav>
                </div>
            </div> 
        </div>  --}}



    {{-- users nav  --}}
    {{-- @else --}}

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
                                            <img class="logo-1" src="{{ asset('client_assets/images/logo-light.png') }}"
                                                alt="">
                                            <img class="logo-2" src="{{ asset('client_assets/images/logo.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="/">Home</a>

                                    </li>
                                    <li><a class="menu-item" href="/carlist">Cars</a>

                                    </li>
                                    <li><a class="menu-item" href="/booking">Booking</a>

                                    </li>
                                    @auth
                                        <li><a class="menu-item" href="/myAccount">My Account</a>
                                            </ul>
                                        </li>
                                        <li><a class="menu-item" href="#">@lang('messages.pages')</a>
                                            <ul>
                                                <li><a class="menu-item" href="about.html">About Us</a></li>
                                                <li><a class="menu-item" href="contact.html">Contact</a></li>
                                                <li><a class="menu-item" href="login.html">Login</a></li>
                                                <li><a class="menu-item" href="/register">Register</a></li>
                                                <li><a class="menu-item" href="404.html">Page 404</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="menu-item" href="#">@lang('messages.news')</a>
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
                                        <li><a class="menu-item" href="#">@lang('messages.elements')</a>
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
                                        </li>
                                    @endauth
                                    <li><a class="menu-item" href="#">Pages</a>
                                        <ul>
                                            <li><a class="menu-item" href="/about">About Us</a></li>
                                            <li><a class="menu-item" href="/contactUs">Contact</a></li>
                                            <li><a class="menu-item" href="/login">Login</a></li>
                                            <li><a class="menu-item" href="/register">Register</a></li>
                                            <li><a class="menu-item" href="/404">Page 404</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            @guest
                                <div class="de-flex-col">
                                    <div class="menu_side_area">
                                        <a href="/login" class="btn-main">Sign In</a>
                                        <span id="menu-btn"></span>
                                    </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="/" class="btn-main">@lang('messages.sign In')</a>
                                    <span id="menu-btn"></span>
                                </div>
                            @endguest

                            @auth
                                <div class="de-flex-col">
                                    <div class="menu_side_area">
                                        <form action="{{ route('logout') }}" method="POST">@csrf
                                        <a href="#" class="btn-main"><button type="submit">Log Out</button></a>
                                    </form>
                                        <span id="menu-btn"></span>
                                    </div>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>

            <nav>
                <ul>
                    <li><a href="{{ route('language.switch', 'en') }}">English</a></li>
                    <li><a href="{{ route('language.switch', 'es') }}">Spanish</a></li>
                </ul>
            </nav>

        </header>
     


        @yield('authContent')



        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer class="text-light">
            <div class="container">
                <div class="row g-custom-x">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>About Rentaly</h5>
                            <p>Where quality meets affordability. We understand the importance of a smooth and enjoyable
                                journey without the burden of excessive costs. That's why we have meticulously crafted
                                our offerings to provide you with top-notch vehicles at minimum expense.</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Contact Info</h5>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY
                                    10001</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>+1 333 9296</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a
                                        href="mailto:contact@example.com">contact@example.com</a></span>
                                <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download
                                        Brochure</a></span>
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
