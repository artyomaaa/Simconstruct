@extends('home.layouts')
@section('content')
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h1>@lang('globals.service_title')</h1>
        <ol class="breadcrumb">
            <li><a href="/{{App::getLocale()}}/home/">@lang('navbar.home')</a></li>
            <li><a href="/{{App::getLocale()}}/service" class="active">@lang('navbar.service')</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Building Construction Area -->
    <section class="building_construction_area">
        <div class="container">
            <div class="row building_construction_row">
                <div class="col-sm-8 constructing_laft">
                    <h2>@lang('globals.service_blade_1')</h2>
                    <img src="{{asset('assets/images/construction.jpg')}}" alt="">
                    <a href="#">@lang('globals.service_blade_2')</a>
                    <p>@lang('globals.service_blade_3')</p>
                    <div class="col-md-6 ipsum">
                        <p>@lang('globals.service_blade_4')</p>
                        <ul class="excavator">
                            <li><i class="fa fa-chevron-circle-right"></i>@lang('globals.service_blade_5')</li>
                            <li><i class="fa fa-chevron-circle-right"></i>@lang('globals.service_blade_6')</li>
                            <li><i class="fa fa-chevron-circle-right"></i>@lang('globals.service_blade_7')</li>
                            <li><i class="fa fa-chevron-circle-right"></i>@lang('globals.service_blade_8')</li>
                            <li><i class="fa fa-chevron-circle-right"></i>@lang('globals.service_blade_9')</li>
                        </ul>
                    </div>
                    <div class="col-md-6 ipsum_img"><img src="{{asset('assets/images/construction-2.jpg')}}" alt="">
                    </div>
                    <div class="col-md-12 p0">
                        <p></p>
                    </div>
                </div>
                <div class="col-sm-4 constructing_right">
                    <h2>@lang('globals.link')</h2>
                    <ul class="painting">
                        <li><a href="#"><i class="fa fa-wrench" aria-hidden="true"></i>@lang('globals.service_blade_10')
                            </a></li>
                        <li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i>@lang('globals.service_blade_11')
                            </a></li>
                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>@lang('globals.service_blade_12')
                            </a></li>
                        <li><a href="#"><i class="fa fa-paint-brush"
                                           aria-hidden="true"></i>@lang('globals.service_blade_13')</a></li>
                        <li><a href="#"><i class="fa fa-contao" aria-hidden="true"></i>@lang('globals.service_blade_14')
                            </a></li>
                        <li><a href="#"><i class="fa fa-bath" aria-hidden="true"></i>@lang('globals.service_blade_15')
                            </a></li>

                    </ul>
                    <div class="contact_us">
                        <h4>@lang('navbar.contact')</h4>
                        <a href="#" class="contac_namber"><i class="fa fa-phone"> 690 200 120 </i></a>
                        <a href="#" class="contac_namber"> <span class="iconify" data-icon="fa-brands:viber"
                                                                 data-inline="false"
                                                                 data-height="15"></span> 622 133 367 </a>
                        <p>@lang('globals.service_blade_16')</p>

                        <a href="/{{App::getLocale()}}/contact-us" class="button_all">@lang('navbar.contact')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Building Construction Area -->

    <!-- Our Featured Works Area -->
    <section class="featured_works row" data-stellar-background-ratio="0.3">
        <div class="tittle wow fadeInUp">
            <h2>@lang('globals.service_blade_17')</h2>
            <h4>@lang('globals.service_blade_18')</h4>
        </div>


        <div class="featured_gallery">
{{--            <div class="container">--}}
                @if(isset($project_image ))
                    @foreach($project_image as $image)

                        <div class="col-md-4 col-sm-4 col-xs-6 gallery_iner p0">

                            <img src="{{asset('assets/images'.'/'. $image->image_path)}}"
                                 style="width: 100%;height: 300px"
                                 alt="">
                            <div class="gallery_hover">

                                <h4>{{ $image->project->project_name}}</h4>

                                <a href="{{asset('assets/images'.'/'. $image->image_path)}}"
                                   data-lightbox="image-1" target="_blank">@lang('globals.service_blade_19')</a>
                            </div>

                        </div>
                    @endforeach
                @endif
{{--            </div>--}}
        </div>


    </section>
    <!-- End Our Featured Works Area -->

    {{--    <!-- Our Team Area -->--}}
    {{--    <section class="our_team_area">--}}
    {{--        <div class="container">--}}
    {{--            <div class="tittle wow fadeInUp">--}}
    {{--                <h2>Our Team</h2>--}}
    {{--                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>--}}
    {{--            </div>--}}
    {{--            <div class="row team_row">--}}
    {{--                <div class="col-md-3 col-sm-6 wow fadeInUp">--}}
    {{--                    <div class="team_membar">--}}
    {{--                        <img src="{{asset('assets/images/team/tm-1.jpg')}}" alt="">--}}
    {{--                        <div class="team_content">--}}
    {{--                            <ul>--}}
    {{--                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
    {{--                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
    {{--                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--}}
    {{--                            </ul>--}}
    {{--                            <a href="#" class="name">Prodip Ghosh</a>--}}
    {{--                            <h6>Founder &amp; CEO</h6>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">--}}
    {{--                    <div class="team_membar">--}}
    {{--                        <img src="{{asset('assets/images/team/tm-2.jpg')}}" alt="">--}}
    {{--                        <div class="team_content">--}}
    {{--                            <ul>--}}
    {{--                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
    {{--                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
    {{--                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--}}
    {{--                            </ul>--}}
    {{--                            <a href="#" class="name">Emran Khan</a>--}}
    {{--                            <h6>Web-Developer</h6>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">--}}
    {{--                    <div class="team_membar">--}}
    {{--                        <img src="{{asset('assets/images/team/tm-3.jpg')}}" alt="">--}}
    {{--                        <div class="team_content">--}}
    {{--                            <ul>--}}
    {{--                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
    {{--                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
    {{--                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--}}
    {{--                            </ul>--}}
    {{--                            <a href="#" class="name">Prodip Ghosh</a>--}}
    {{--                            <h6>Founder &amp; CEO</h6>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">--}}
    {{--                    <div class="team_membar">--}}
    {{--                        <img src="{{asset('assets/images/team/tm-4.jpg')}}" alt="">--}}
    {{--                        <div class="team_content">--}}
    {{--                            <ul>--}}
    {{--                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
    {{--                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
    {{--                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--}}
    {{--                            </ul>--}}
    {{--                            <a href="#" class="name">Jakaria Khan</a>--}}
    {{--                            <h6>Founder &amp; CEO</h6>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- End Our Team Area -->
@endsection