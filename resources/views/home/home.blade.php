@extends('home.layouts')
@section('content')

    <!-- Slider area -->
    <section class="slider_area row m0">

        <div class="slider_inner">
            @if(isset($sliders)&& is_object($sliders))
                @foreach($sliders as $key=> $image)
                    @if($key==0)
                        <div data-thumb="{{asset('assets/images'). '/' .$image->path}}"
                             data-src="{{asset('assets/images'). '/' .$image->path}}">
                            <div class="camera_caption">
                                <div class="container">
                                    <h5 class=" wow fadeInUp animated">@lang('slider.text')</h5>
                                    <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">@lang('slider.text_1')</h3>
                                    <p class=" wow fadeInUp animated" data-wow-delay="0.8s">@lang('slider.text_2')</p>
                                    {{--                                    <a class=" wow fadeInUp animated" data-wow-delay="1s" href="#">Read More</a>--}}
                                </div>
                            </div>
                        </div>
                    @else
                        <div data-thumb="{{asset('assets/images'). '/' .$image->path}}"
                             data-src="{{asset('assets/images'). '/' .$image->path}}">
                            <div class="camera_caption">
                                <div class="container">
                                    <h5 class=" wow fadeInUp animated">@lang('slider.text')</h5>
                                    <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">@lang('slider.text_1')</h3>
                                    <p class=" wow fadeInUp animated" data-wow-delay="0.8s">@lang('slider.text_2')</p>
                                    {{--                                    <a class=" wow fadeInUp animated" data-wow-delay="1s" href="#">Read More</a>--}}
                                </div>
                            </div>
                        </div>

                    @endif

                @endforeach
            @endif
        </div>
    </section>
    <!-- End Slider area -->

    <!-- Professional Builde -->
    <section class="professional_builder row">
        <div class="container">
            <div class="row builder_all">
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h4>@lang('globals.service_title_0')</h4>
                    <p>@lang('globals.service_desc_0') </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <h4>@lang('globals.service_title_1')</h4>
                    <p>@lang('globals.service_desc_1') </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <h4>@lang('globals.service_title_2')</h4>
                    <p>@lang('globals.service_desc_2') </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    <h4>@lang('globals.service_title_3')</h4>
                    <p>@lang('globals.service_desc_3') </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Professional Builde -->

    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>@lang('navbar.about')</h2>

                <h4> @lang('globals.titleabout_us')</h4>
            </div>
            <div class="row about_row">
                <div class="who_we_area col-md-7 col-sm-6">
                    <div class="subtittle">
                        <h2>@lang('globals.descabout_us')</h2>
                    </div>
                    <p>
                        @lang('globals.textabout_us')</p>
                    <a href="/{{App::getLocale()}}/contact-us" class="button_all">@lang('navbar.contact')</a>
                </div>
                <div class="col-md-5 col-sm-6 about_client">
                    <img src="{{asset('assets/images/about_client.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->

    <!-- What ew offer Area -->
    <section class="what_we_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>@lang('offer.title')</h2>
                <h4> @lang('offer.desc') </h4>
            </div>

            <div class="row construction_iner">
                @foreach($offers as $offer)
                    <div class="col-md-4 col-sm-6 construction">
                        <div class="cns-img">
                            <img src="{{asset('assets/images'). '/' .$offer->image}}" alt="">
                        </div>
                        <div class="cns-content">
                            <i class="{{$offer->icone}}" aria-hidden="true"></i>
                            @if($url == url('es/home'))
                                <a href="#">{{$offer->title_es}}</a>
                                <p>{{$offer->text_es}}</p>
                            @else
                                <a href="#">{{$offer->title_eng}}</a>
                                <p>{{$offer->text_eng}}</p>

                            @endif

                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- End What ew offer Area -->

    <!-- Our Features Area -->
    <section class="our_feature_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>@lang('globals.feature')</h2>
                <h4>@lang('globals.feature_desc') </h4>
            </div>
            <div class="feature_row row">
                <div class="col-md-6 feature_img">
                    <img src="{{asset('assets/images/feature-man.jpg')}}" alt="">
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

    <!-- Our Services Area -->
    <section class="our_services_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>@lang('globals.service_title')</h2>
                <h4>@lang('globals.service_desc')</h4>

            </div>
            <div class="portfolio_inner_area">
                <div class="portfolio_filter">
                    <ul>

                        <li data-filter="*" class="active"><a href="">All</a></li>
                        @foreach($projects as $project)
                            <li data-filter=".{{$project->project_name}}"><a href="">{{$project->project_name}}</a></li>

                        @endforeach
                    </ul>
                </div>
                @foreach($projects as $project)

                    <div class="portfolio_item">
                        @if(isset($project->project_image))
                            @foreach($project->project_image as $image )
                                <div class="grid-sizer"></div>
                                <div class="single_facilities col-xs-4 p0 {{$project->project_name}}">

                                    <div class="single_facilities_inner">

                                        <img src="{{asset('assets/images/'.$image->image_path)}}"
                                             alt="Portfolio 1" style="width:380px;height: 260px">

                                        <div class="gallery_hover">
                                            <ul>
                                                <li>
                                                    <a href="#" aria-hidden="true"
                                                       data-toggle="modal"
                                                       data-target="#Modal-{{$image->id}}"><i
                                                                class="fa fa-search-plus fa-1x"></i>

                                                    </a>
                                                </li>

                                            </ul>
                                            <br>
                                            <h4>{{$project->project_name}}</h4>

                                        </div>

                                    </div>

                                </div>
                                <div class="modal fade" id="Modal-{{$image->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel"
                                     aria-hidden="true" style="margin-top: 150px">
                                    <div class="modal-dialog modal-notify modal-success" role="document">
                                        <!--Content-->
                                        <div class="modal-content" style="text-align: center">
                                            <!--Header-->

                                            <div class="modal-header" style="background-color: darkgreen">
                                                <span>{{$project->project_name}}</span>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true" class="white-text">×</span>
                                                </button>
                                            </div>

                                            <!--Body-->
                                            <div class="modal-body" style="background-color: #686868">
                                                <img src="{{asset('assets/images/'.$image->image_path)}}"
                                                     style="width:100%;height:400px">

                                                <div class="text-center">


                                                </div>
                                            </div>
                                        </div>
                                        <!--/.Content-->
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- End Our Services Area -->

    <!-- Our Achievments Area -->
    <section class="our_achievments_area" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>@lang('globals.our_achivement')</h2>
                <h4>@lang('globals.our_achivement_text')</h4>
            </div>
            <div class="achievments_row row">
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-connectdevelop" aria-hidden="true"></i>
                    <span class="counter">800</span>
                    <h6>@lang('globals.our_achievent_project')</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="counter">230</span>
                    <h6>@lang('globals.our_achievent_house')</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-child" aria-hidden="true"></i>
                    <span class="counter">1390</span>
                    <h6>@lang('globals.our_achievent_workers')</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    <span class="counter">125</span>
                    <h6>@lang('globals.our_achievent_awards')</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="our_partners_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h1>@lang('globals.parners')</h1>
                <h4>@lang('globals.partners_desc')</h4>
            </div>
            <div class="partners">
                <div class="item"><img src="{{asset('assets/images/client_logo/client_logo-1.png')}}" alt=""></div>
                <div class="item"><img src="{{asset('assets/images/client_logo/client_logo-2.png')}}" alt=""></div>
                <div class="item"><img src="{{asset('assets/images/client_logo/client_logo-3.png')}}" alt=""></div>
                <div class="item"><img src="{{asset('assets/images/client_logo/client_logo-4.png')}}" alt=""></div>
                <div class="item"><img src="{{asset('assets/images/client_logo/client_logo-5.png')}}" alt=""></div>

            </div>
        </div>
    </section>



    <div class="modal fade" id="comment_view" tabindex="-3" role="dialog"
         aria-labelledby="myModalLabel"
         aria-hidden="true" style="margin-top: 200px">
        <div class="modal-dialog modal-sm modal-notify modal-success" role="document">
            <!--Content-->
            <div class="modal-content" style="text-align: center">
                <!--Header-->
                {{--                <button type="button" class="close" data-dismiss="modal"--}}
                {{--                        aria-label="Close">--}}
                {{--                    <span aria-hidden="true" class="white-text">x</span>--}}
                {{--                </button>--}}

                <div class="modal-header" style="background-color: darkgreen">
                    <span style="font-weight: bolder;color: #0d6aad;font-size: 30px">CATALUÑA</span>
                    <p style="font-size: 25px;font-weight: bold;color: greenyellow">CONSTRUCCIÓN</p>

                </div>

                <!--Body-->
                <div class="modal-body" style="background-color: #686868">
                    <div class="text-center">
                        <h4> Thank you our administrator will contact you</h4>


                    </div>
                    <br>
                    <button class="btn btn-success btn-block " data-dismiss="modal"
                            aria-label="Close">ok
                    </button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>




@endsection
