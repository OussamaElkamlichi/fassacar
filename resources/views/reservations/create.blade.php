<!-- resources/views/reservations/create.blade.php -->

@extends('Layouts.authNavbar')
@section('authContent')
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('client_assets/images/background/subheader.jpg') }}" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Booking</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <section id="section-hero" aria-label="section" class="no-top mt-80 sm-mt-0">
        <div class="container">
            <form name="contactForm" id='contact_form' method="post">
                <div id="step-1" class="row">
                    <div class="col-lg-6 mb30">
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
                    </div>



                    <div class="col-lg-12">
                        <input type='submit' id='send_message' value='Find a Vehicle' class="btn-main pull-right">
                    </div>

                </div>
            </form>

            <div class="row align-items-center">

                <div class="col-lg-12">
                    <div class="spacer-single sm-hide"></div>
                    <div class="p-4 rounded-3 shadow-soft" data-bgcolor="#ffffff">

                        <form action="{{ route('reservations.store') }}" method="POST">
                            @csrf

                            <input type="hidden" name="car_id" value="{{ $car->id }}">
                            <input type="hidden" name="user_id" value="1">

                            {{-- <div class="form-group">
                                <label for="coupon_id">Coupon ID</label>
                                <input type="number" name="coupon_id" class="form-control" value="{{ old('coupon_id') }}">
                            </div> --}}

                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="datetime-local" name="start_date" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="datetime-local" name="end_date" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="picking_up_location">Picking Up Location</label>
                                <input type="text" name="picking_up_location" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="returning_location">Returning Location</label>
                                <input type="text" name="returning_location" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="cost">Cost</label>
                                <input type="number" step="0.01" name="cost" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="total_cost">Total Cost</label>
                                <input type="number" step="0.01" name="total_cost" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="payment_method">Payment Method</label>
                                <select name="payment_method" class="form-control" required>
                                    <option value="credit_card">Credit Card</option>
                                    <option value="debit_card">Debit Card</option>
                                    <option value="cash">Cash</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="pending">Pending</option>
                                    <option value="confirmed">Confirmed</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>

                            <button type="submit" class="btn-main pull-right">Find a Vehicle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
