@extends('Layouts.authNavbar')
@section('authContent')

<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('client_assets/images/background/subheader.jpg')}}" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Map</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section close -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp">
                    <div class="p-sm-30 pb-sm-0 mb-sm-0">
                        <div class="de-map-hotspot">
                            <div class="de-spot wow fadeIn" style="top:39%; left:20%">
                                <span>United&nbsp;States</span>
                                <div class="de-circle-1"></div>
                                <div class="de-circle-2"></div>
                            </div>
                            <div class="de-spot wow fadeIn" style="top:76%; left:87%">
                                <span>Australia</span>
                                <div class="de-circle-1"></div>
                                <div class="de-circle-2"></div>
                            </div>
                            <div class="de-spot wow fadeIn" style="top:68%; left:80%">
                                <span>Indonesia</span>
                                <div class="de-circle-1"></div>
                                <div class="de-circle-2"></div>
                            </div>
                            <div class="de-spot wow fadeIn" style="top:23%; left:18%">
                                <span>Canada</span>
                                <div class="de-circle-1"></div>
                                <div class="de-circle-2"></div>
                            </div>
                            <div class="de-spot wow fadeIn" style="top:68%; left:33%">
                                <span>Brazil</span>
                                <div class="de-circle-1"></div>
                                <div class="de-circle-2"></div>
                            </div>
<div class="de-spot wow fadeIn" style="top:45%; left:75%">
                                <span>China</span>
                                <div class="de-circle-1"></div>
                                <div class="de-circle-2"></div>
                            </div>
                            <div class="de-spot wow fadeIn" style="top:36%; left:48%">
                                <span>France</span>
                                <div class="de-circle-1"></div>
                                <div class="de-circle-2"></div>
                            </div>
                            <div class="de-spot wow fadeIn" style="top:23%; left:51%">
                                <span>Sweden</span>
                                <div class="de-circle-1"></div>
                                <div class="de-circle-2"></div>
                            </div>
                            <div class="de-spot wow fadeIn" style="top:78%; left:53%">
                                <span>South&nbsp;Africa</span>
                                <div class="de-circle-1"></div>
                                <div class="de-circle-2"></div>
                            </div>
                            <img src="{{ asset('client_assets/images/misc/map.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
<!-- content close -->

<a href="#" id="back-to-top"></a>
</div>

@endsection
