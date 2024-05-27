@extends('Layouts.authNavbar')
@section('authContent')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('client_assets/images/background/2.jpg') }}" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Register</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>Don't have an account? Register now.</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo.</p>

                        <div class="spacer-10"></div>

                        <form name="contactForm" id='contact_form' class="form-border" method="post"
                            action="{{ route('register') }}">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Full Name :</label>
                                        <input type='text' name='name' id='name' class="form-control">
                                    </div>
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>City :</label>
                                        <select  class="form-control" name="city">
                                            <option disabled>Enter ur City</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('city')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Adress :</label>
                                        <input type='text' name='adress' id='name' class="form-control">
                                    </div>
                                    @error('adress')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Email Address :</label>
                                        <input type='text' name='email' id='email' class="form-control">
                                    </div>
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Choose a Username :</label>
                                        <input type='text' name='username' id='username' class="form-control">
                                    </div>
                                    @error('username')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Phone :</label>
                                        <input type='text' name='phone' id='phone' class="form-control">
                                    </div>
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Password :</label>
                                        <input type='text' name='password' id='password' class="form-control">
                                    </div>
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror    
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Re-enter Password :</label>
                                        <input type='text' name='password_confirmation' id='re-password'
                                            class="form-control">
                                    </div>
                                </div>


                                <div class="col-md-12">

                                    <div id='submit' class="pull-left" style="background-color: rgb(37, 157, 37)">
                                        <input type='submit' id='send_message' value='Register Now' class="btn-main color-2">
                                    </div>

                                    <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                    <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
