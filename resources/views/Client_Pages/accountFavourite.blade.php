@extends('Layouts.authNavbar')
@section('authContent')

       <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{ asset('client_assets/images/background/14.jpg') }}" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>My Favorite Cars</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section id="section-settings" class="bg-gray-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mb30">
                            <div class="card p-4 rounded-5">
                                <div class="profile_avatar">
                                    <div class="profile_img">
                                        <img src="{{ asset('client_assets/images/profile/1.jpg') }}" alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h4>
                                            Monica Lucas
                                            <span class="profile_username text-gray">monica@rentaly.com</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="spacer-20"></div>
                                <ul class="menu-col">
                                    <li><a href="account-dashboard.html"><i class="fa fa-home"></i>Dashboard</a></li>
                                    <li><a href=""><i class="fa fa-user"></i>My Profile</a></li>
                                    <li><a href="account-booking.html"><i class="fa fa-calendar"></i>My Orders</a></li>
                                    <li><a href="account-favorite.html" class="active"><i class="fa fa-calendar"></i>My Favorite Cars</a></li>
                                    <li><a href="login.html"><i class="fa fa-sign-out"></i>Sign Out</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="de-item-list no-border mb30">
                                <div class="d-img">
                                    <img src="{{ asset('client_assets/images/cars/jeep-renegade.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Jeep Renegade</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$265</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="de-item-list no-border mb30">
                                <div class="d-img">
                                    <img src="{{ asset('client_assets/images/cars/bmw-m5.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>BMW M2</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$244</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="de-item-list no-border mb30">
                                <div class="d-img">
                                    <img src="{{ asset('client_assets/images/cars/ferrari-enzo.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>Ferarri Enzo</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>4</li>
                                                <li><span>Luggage:</span>2</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Fuel:</span>Petrol</li>
                                                <li><span>Horsepower:</span>500</li>
                                                <li><span>Engine:</span>3000</li>
                                                <li><span>Drive:</span>4x4</li>
                                                <li><span>Type:</span>Hatchback</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>$167</span>
                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>


        <!-- footer close -->

    </div>


@endsection
