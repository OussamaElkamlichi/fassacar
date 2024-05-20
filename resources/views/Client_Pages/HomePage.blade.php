@extends('Layouts.authNavbar')
@section('authContent')

  <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" class="jarallax full-height vertical-center">
            <img src="{{ asset('client_assets/images/background/1.jpg') }}" class="jarallax-img" alt="">
            <div class="container position-relative z1000">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-light">
                        <h4><span class="id-color">Fast and Easy Way to Rent a Car</span></h4>
                        <div class="spacer-10"></div>
                        <h1 class="mb-2">Explore the world with comfortable car</h1>
                        <div class="spacer-10"></div>
                        <p class="lead">Embark on unforgettable adventures and discover the world in unparalleled comfort and style with our fleet of exceptionally comfortable cars.</p>
                    </div>

                    <div class="col-lg-6">
                        <div class="spacer-single sm-hide"></div>
                        <div class="p-4 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                            

                            <form name="contactForm" id='contact_form' method="post">
                                <h5>What is your vehicle type?</h5>

                                <div class="de_form de_radio row g-3">
                                    <div class="radio-img col-lg-3 col-sm-3 col-6">
                                        <input id="radio-1a" name="Car_Type" type="radio" value="Residential" checked="checked">
                                        <label for="radio-1a"><img src="{{ asset('client_assets/images/select-form/car.png') }}" alt="">Car</label>
                                    </div>

                                    <div class="radio-img col-lg-3 col-sm-3 col-6">
                                        <input id="radio-1b" name="Car_Type" type="radio" value="Office">
                                        <label for="radio-1b"><img src="{{ asset('client_assets/images/select-form/van.png') }}" alt="">Van</label>
                                    </div>

                                    <div class="radio-img col-lg-3 col-sm-3 col-6">
                                        <input id="radio-1c" name="Car_Type" type="radio" value="Commercial">
                                        <label for="radio-1c"><img src="{{ asset('client_assets/images/select-form/minibus.png') }}" alt="">Minibus</label>
                                    </div>

                                    <div class="radio-img col-lg-3 col-sm-3 col-6">
                                        <input id="radio-1d" name="Car_Type" type="radio" value="Retail">
                                        <label for="radio-1d"><img src="{{ asset('client_assets/images/select-form/sportscar.png') }}" alt="">Prestige</label>
                                    </div>
                                </div>

                                <div class="spacer-20"></div>

                                <div class="row">
                                    <div class="col-lg-6 mb20">
                                        <h5>Pick Up Location</h5>
                                        <input type="text" name="PickupLocation" onfocus="geolocate()" placeholder="Enter your pickup location" id="autocomplete" autocomplete="off" class="form-control">

                                        <div class="jls-address-preview jls-address-preview--hidden">
                                            <div class="jls-address-preview__header">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb20">
                                        <h5>Drop Off Location</h5>
                                        <input type="text" name="DropoffLocation" onfocus="geolocate()" placeholder="Enter your dropoff location" id="autocomplete2" autocomplete="off" class="form-control">

                                        <div class="jls-address-preview jls-address-preview--hidden">
                                            <div class="jls-address-preview__header">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb20">
                                        <h5>Pick Up Date & Time</h5>
                                        <div class="date-time-field">
                                            <input type="text" id="date-picker" name="Pick Up Date" value="">
                                            <select name="Pick Up Time" id="pickup-time">
                                                <option selected disabled value="Select time">Time</option>
                                                <option value="00:00">00:00</option>
                                                <option value="00:30">00:30</option>
                                                <option value="01:00">01:00</option>
                                                <option value="01:30">01:30</option>
                                                <option value="02:00">02:00</option>
                                                <option value="02:30">02:30</option>
                                                <option value="03:00">03:00</option>
                                                <option value="03:30">03:30</option>
                                                <option value="04:00">04:00</option>
                                                <option value="04:30">04:30</option>
                                                <option value="05:00">05:00</option>
                                                <option value="05:30">05:30</option>
                                                <option value="06:00">06:00</option>
                                                <option value="06:30">06:30</option>
                                                <option value="07:00">07:00</option>
                                                <option value="07:30">07:30</option>
                                                <option value="08:00">08:00</option>
                                                <option value="08:30">08:30</option>
                                                <option value="09:00">09:00</option>
                                                <option value="09:30">09:30</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:30">10:30</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:30">11:30</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:30">12:30</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:30">13:30</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:30">14:30</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:30">15:30</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:30">16:30</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:30">17:30</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:30">18:30</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:30">19:30</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:30">20:30</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:30">21:30</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:30">22:30</option>
                                                <option value="23:00">23:00</option>
                                                <option value="23:30">23:30</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb20">
                                        <h5>Return Date & Time</h5>
                                        <div class="date-time-field">
                                            <input type="text" id="date-picker-2" name="Collection Date" value="">
                                            <select name="Collection Time" id="collection-time">
                                                <option selected disabled value="Select time">Time</option>
                                                <option value="00:00">00:00</option>
                                                <option value="00:30">00:30</option>
                                                <option value="01:00">01:00</option>
                                                <option value="01:30">01:30</option>
                                                <option value="02:00">02:00</option>
                                                <option value="02:30">02:30</option>
                                                <option value="03:00">03:00</option>
                                                <option value="03:30">03:30</option>
                                                <option value="04:00">04:00</option>
                                                <option value="04:30">04:30</option>
                                                <option value="05:00">05:00</option>
                                                <option value="05:30">05:30</option>
                                                <option value="06:00">06:00</option>
                                                <option value="06:30">06:30</option>
                                                <option value="07:00">07:00</option>
                                                <option value="07:30">07:30</option>
                                                <option value="08:00">08:00</option>
                                                <option value="08:30">08:30</option>
                                                <option value="09:00">09:00</option>
                                                <option value="09:30">09:30</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:30">10:30</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:30">11:30</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:30">12:30</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:30">13:30</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:30">14:30</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:30">15:30</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:30">16:30</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:30">17:30</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:30">18:30</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:30">19:30</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:30">20:30</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:30">21:30</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:30">22:30</option>
                                                <option value="23:00">23:00</option>
                                                <option value="23:30">23:30</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <input type='submit' id='send_message' value='Find a Vehicle' class="btn-main pull-right">

                                <div class="clearfix"></div>
                                
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="position-absolute d-flex bottom-20">
              <div class="de-marquee-list style-2">
                <div class="d-item">
                  <span class="d-item-txt">SUV</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Hatchback</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Crossover</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Convertible</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Sedan</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Sports Car</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Coupe</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Minivan</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Station Wagon</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Truck</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Minivans</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Exotic Cars</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                 </div>
              </div>

              <div class="de-marquee-list style-2">
                <div class="d-item">
                  <span class="d-item-txt">SUV</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Hatchback</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Crossover</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Convertible</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Sedan</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Sports Car</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Coupe</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Minivan</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Station Wagon</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Truck</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Minivans</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                  <span class="d-item-txt">Exotic Cars</span>
                  <span class="d-item-display">
                    <i class="d-item-dot"></i>
                  </span>
                 </div>
              </div>
            </div>
        </section>


        <section id="section-cars">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h2>Our Vehicle Fleet</h2>
                        <p>Driving your dreams to reality with an exquisite fleet of versatile vehicles for
                            unforgettable journeys.</p>
                        <div class="spacer-20"></div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-3">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="{{ asset('client_assets/images/cars/jeep-renegade.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Jeep Renegade</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>21</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/1-green.svg') }}" alt="">5</span>
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/2-green.svg') }}" alt="">2</span>
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/3-green.svg') }}" alt="">4</span>
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/4-green.svg') }}"
                                                alt="">SUV</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>$152</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="{{ asset('client_assets/images/cars/bmw-m5.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>BMW M5</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>29</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/1-green.svg') }}" alt="">5</span>
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/2-green.svg') }}" alt="">2</span>
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/3-green.svg') }}" alt="">4</span>
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/4-green.svg') }}"
                                                alt="">Sedan</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>$159</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="{{ asset('client_assets/images/cars/ferrari-enzo.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Ferarri Enzo</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>43</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/1-green.svg') }}"
                                                alt="">5</span>
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/2-green.svg') }}"
                                                alt="">2</span>
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/3-green.svg') }}"
                                                alt="">4</span>
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/4-green.svg') }}"
                                                alt="">Exotic Car</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>$545</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="{{ asset('client_assets/images/cars/ford-raptor.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Ford Raptor</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>57</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/1-green.svg') }}"
                                                alt="">5</span>
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/2-green.svg') }}"
                                                alt="">2</span>
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/3-green.svg') }}"
                                                alt="">4</span>
                                        <span class="d-atr"><img src="{{ asset('client_assets/images/icons/4-green.svg') }}"
                                                alt="">Truck</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>$144</span>
                                        <a class="btn-main" href="car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="section-testimonials" class="no-top no-bottom">
            <div class="container-fluid">
                <div class="row g-2 p-2 align-items-center">

                    <div class="col-md-4">
                        <div class="de-image-text">
                            <div class="d-text">
                                <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                                <h4>Excellent Service! Car Rent Service!</h4>
                                <blockquote>
                                    I have been using Rentaly for my Car Rental needs for over 5 years now. I have never
                                    had any problems with their service. Their customer support is always responsive and
                                    helpful. I would recommend Rentaly to anyone looking for a reliable Car Rental
                                    provider.
                                    <span class="by">Stepanie Hutchkiss</span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('client_assets/images/testimonial/1.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="de-image-text">
                            <div class="d-text">
                                <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                                <h4>Excellent Service! Car Rent Service!</h4>
                                <blockquote>
                                    We have been using Rentaly for our trips needs for several years now and have always
                                    been happy with their service. Their customer support is Excellent Service! and they
                                    are always available to help with any issues we have. Their prices are also very
                                    competitive.
                                    <span class="by">Jovan Reels</span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('client_assets/images/testimonial/2.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="de-image-text">
                            <div class="d-text">
                                <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                                <h4>Excellent Service! Car Rent Service!</h4>
                                <blockquote>
                                    Endorsed by industry experts, Rentaly is the Car Rental solution you can trust. With
                                    years of experience in the field, we provide fast, reliable and secure Car Rental
                                    services.
                                    <span class="by">Kanesha Keyton</span>
                                </blockquote>
                            </div>
                            <img src="{{ asset('client_assets/images/testimonial/3.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h2>Explore the world with comfortable car</h2>
                        <div class="spacer-20"></div>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-trophy de-icon mb20"></i>
                        <h4>First Class Services</h4>
                        <p>Where luxury meets exceptional care, creating unforgettable moments and exceeding your every
                            expectation.</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-road de-icon mb20"></i>
                        <h4>24/7 road assistance</h4>
                        <p>Reliable support when you need it most, keeping you on the move with confidence and peace of
                            mind.</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-map-pin de-icon mb20"></i>
                        <h4>Free Pick-Up & Drop-Off</h4>
                        <p>Enjoy free pickup and drop-off services, adding an extra layer of ease to your car rental
                            experience.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-img-with-tab" data-bgcolor="#f8f8f8">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 offset-lg-7">

                        <h2>Only Quality For Clients</h2>
                        <div class="spacer-20"></div>

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab"
                                    aria-controls="pills-home" aria-selected="true">Luxury</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Comfort</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Prestige</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <p>We offer a meticulously curated collection of the most sought-after luxury vehicles
                                    on the market. Whether you prefer the sporty allure of a high-performance sports
                                    car, the sophistication of a sleek and luxurious sedan, or the versatility of a
                                    premium SUV, we have the perfect car to match your discerning taste.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <p>We prioritize your comfort and convenience throughout your journey. We understand
                                    that a comfortable ride can make a world of difference, whether you're embarking on
                                    a business trip or enjoying a leisurely vacation. That's why we offer a wide range
                                    of well-maintained, comfortable cars that cater to your specific needs.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <p>We understand that prestige goes beyond luxury. It's about making a statement,
                                    embracing sophistication, and indulging in the finer things in life. That's why we
                                    offer an exclusive selection of prestigious cars that exude elegance, style, and
                                    status.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="image-container col-md-6 pull-right" data-bgimage="url(images/background/5.jpg') }}) center"></div>
        </section>

        <section id="section-news">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h2>Latest News</h2>
                        <p>Breaking news, fresh perspectives, and in-depth coverage - stay ahead with our latest news,
                            insights, and analysis.</p>
                        <div class="spacer-20"></div>
                    </div>

                    <div class="col-lg-4 mb10">
                        <div class="bloglist s2 item">
                            <div class="post-content">
                                <div class="post-image">
                                    <div class="date-box">
                                        <div class="m">10</div>
                                        <div class="d">MAR</div>
                                    </div>
                                    <img alt="" src="{{ asset('client_assets/images/news/pic-blog-1.jpg') }}" class="lazy">
                                </div>
                                <div class="post-text">
                                    <h4><a href="news-single.html">Enjoy Best Travel Experience<span></span></a></h4>
                                    <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim
                                        reprehenderit cupidatat labore ad laborum consectetur.</p>
                                    <a class="btn-main" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb10">
                        <div class="bloglist s2 item">
                            <div class="post-content">
                                <div class="post-image">
                                    <div class="date-box">
                                        <div class="m">12</div>
                                        <div class="d">MAR</div>
                                    </div>
                                    <img alt="" src="{{ asset('client_assets/images/news/pic-blog-2.jpg') }}" class="lazy">
                                </div>
                                <div class="post-text">
                                    <h4><a href="news-single.html">The Future of Car Rent<span></span></a></h4>
                                    <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim
                                        reprehenderit cupidatat labore ad laborum consectetur.</p>
                                    <a class="btn-main" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb10">
                        <div class="bloglist s2 item">
                            <div class="post-content">
                                <div class="post-image">
                                    <div class="date-box">
                                        <div class="m">14</div>
                                        <div class="d">MAR</div>
                                    </div>
                                    <img alt="" src="{{ asset('client_assets/images/news/pic-blog-3.jpg') }}" class="lazy">
                                </div>
                                <div class="post-text">
                                    <h4><a href="news-single.html">Holiday Tips For Backpacker<span></span></a></h4>
                                    <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim
                                        reprehenderit cupidatat labore ad laborum consectetur.</p>
                                    <a class="btn-main" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-call-to-action" class="bg-color text-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h2>Call us for further information. Rentaly customer care is here to help you anytime.</h2>
                        <div class="spacer-20"></div>
                        <a href="#" class="btn-main btn-line">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content close -->

@endsection