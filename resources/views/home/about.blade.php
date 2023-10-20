@extends('home.layouts')
@section('content')
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h1>About Us</h1>
        <ol class="breadcrumb">
            <li><a href="/{{App::getLocale()}}/home">@lang('navbar.home')</a></li>
            <li><a href="/{{App::getLocale()}}/about-us" class="active">@lang('navbar.about')</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>@lang('navbar.about')</h2>
                <h4>@lang('globals.about_blade_title')</h4>
            </div>
            <div class="row about_row">
                <div class="col-md-5 col-sm-6 about_client about_pages_client">
                    <img src="{{asset('assets/images/feature-man-2.jpg')}}" alt="">
                </div>
                <div class="who_we_area col-md-7 col-sm-6">
                    <div class="subtittle">
                        <h2>@lang('globals.descabout_us')</h2>
                    </div>
                    <p>@lang('globals.about_blade_text')</p>
                    <a href="/{{App::getLocale()}}/contact-us" class="button_all">@lang('navbar.contact')</a>
                </div>
            </div>
        </div>
    </section>

    <section class="our_feature_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>@lang('globals.feature')</h2>
                <h4>@lang('globals.feature_desc')</h4>
            </div>
            <div class="feature_row row">
                <div class="col-md-6 feature_img">
                    <img src="{{asset('assets/images/feature-man-4.jpg')}}" alt="">
                </div>
                <div class="col-md-6 feature_content">
                    <div class="subtittle">
                        <h2>@lang('globals.feature_title')</h2>
                        <h5>@lang('globals.feature_1')</h5>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">30+@lang('globals.feature_text_1') </a>
                            <p>@lang('globals.feature_desc_1')</p>

                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">@lang('globals.feature_text_2')</a>
                            <p>@lang('globals.feature_desc_2')
                            </p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">@lang('globals.feature_text_3')</a>
                            <p>@lang('globals.feature_desc_3')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Features Area -->
    <!-- Our Partners Area -->
    <section class="our_partners_area">
        <div class="book_now_aera">
            <div class="container">
                <div class="row book_now">
                    <div class="col-md-10 booking_text">
                        <h4>@lang('globals.book_title')</h4>
                        <p>@lang('globals.book_text')</p>
                    </div>
                    <div class="col-md-2 p0 book_bottun">
                        <a href="/{{App::getLocale()}}/contact-us" class="button_all">@lang('globals.book')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Partners Area -->
    <!-- Our Team Area -->


@endsection
