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
                            <h1>@lang('messages.map')</h1>
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
                <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3245.354042766318!2d-5.3762443257923636!3d35.569652336097946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b42667d6485f5%3A0x9fe00c6d67d8f0f!2sIKER!5e0!3m2!1sen!2sma!4v1716380052032!5m2!1sen!2sma" width="1300" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>


</div>
<!-- content close -->

<a href="#" id="back-to-top"></a>
</div>

@endsection
