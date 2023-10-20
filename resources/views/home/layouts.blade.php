@php
    use Illuminate\Support\Facades\Request;
     $url1 = explode( '/', Request::path() );
  array_shift($url1);
  $url =  implode("/",$url1);
@endphp


        <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="url" content="http://reformaenbarcelona.net/es/home"/>
    <meta property="type" content="article"/>
    <meta name="title" property="og:title" content="Reformas de Baños en Barcelona -  Reformas">
    <meta name="description" property="og:description" content="<p>Reforma de baño, reforma integral - Cambiar bañera por ducha. Precios Competitivos. Mejores Profesionales / Pide Gratis Tu Presupuesto</p>">
    <meta name="keywords" property="og:keywords"   content="Reformas de Baños en Barcelona -  Reformas">
    <meta property="og:image" content="http://reformaenbarcelona.net/assets/images/favicon.png"/>
    <title>CATALUÑA CONSTRUCCIÓN</title>

    <!-- Favicon -->
    {{--    <link rel="icon" type="image/x-icon" href="{{asset('site.front/images/favicon.ico')}}" />--}}
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}"/>
    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{asset('assets/vendors/animate/animate.css')}}" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="{{asset('assets/vendors/camera-slider/camera.css')}}">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/owl_carousel/owl.carousel.css')}}" media="all">

    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" media="all"/>

    <link rel="stylesheet" href="{{asset('assets/images/flags/flags.css')}}"/>

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
</head>
<body>
<style>
    .error {
        font-size: 11px;
        color: red;
    }
</style>
<!-- Preloader -->
{{--<div class="preloader"></div>--}}

<!-- Top Header_Area -->
<section class="top_header_area">
    <div class="container">
        <ul class="nav navbar-nav top_nav">
            <li><a href="tel://622 133 367"><i class="fa fa-phone"></i> 622 133 367 <span class="iconify" data-icon="fa-brands:viber"
                                                                          data-inline="false"
                                                                          data-height="12"></span></a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i>sim.sargsyan.93@gmail.com</a></li>
            <li><a href="#"><i class="fa fa-clock-o"></i>@lang('navbar.week_m') - @lang('navbar.week_s') 10:00 - 20:00</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right social_nav">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</section>

<nav class="navbar navbar-default header_aera" id="main_navbar">
    <div class="container">
        <!-- searchForm -->
        <div class="searchForm">
            <form action="#" class="row m0">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                    <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                </div>
            </form>
        </div><!-- End searchForm -->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="col-md-2 p0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="/{{App::getLocale()}}//home/">

                    <div class="home-brand">

                        <span style="font-size: 60px;font-weight:bold;text-shadow: -5px -5px 10px green;color: black">C</span>
                        <span class="home-span" style="font-size: 24px;color: black;font-weight: bold;font-family: sans-serif;margin: 0px auto">CATALUÑA CONSTRUCCIÓN</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="col-md-10 p0">
            <div class="collapse navbar-collapse" id="min_navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown submenu">
                        <a href="/{{App::getLocale()}}/home/" class="dropdown-toggle">@lang('navbar.home')</a>
                    </li>
                    <li class="dropdown submenu">
                        <a href="/{{App::getLocale()}}/about-us/" class="dropdown-toggle">@lang('navbar.about')</a>

                    </li>
                    <li class="dropdown submenu">
                        <a href="/{{App::getLocale()}}/service" class="dropdown-toggle">@lang('navbar.service')</a>
                        {{--                        <ul class="dropdown-menu other_dropdwn">--}}
                        {{--                            <li><a href="services.html">Services</a></li>--}}
                        {{--                            <li><a href="services-2.html">Services-2</a></li>--}}
                        {{--                        </ul>--}}
                    </li>
                    <li><a href="/{{App::getLocale()}}/contact-us/" class="dropdown-toggle">@lang('navbar.contact')</a>
                    </li>

                    <li class="dropdown submenu" id="drop_language">
                        <a onclick="switchLan()" style="cursor: pointer;">
                            @if(App::getLocale() == 'en')
                                <i class="flag-gb"></i>
                            @else
                                <i class="flag-es"></i>

                            @endif

                            <b style="border-top-color: #fff" class="caret"></b></a>
                        <ul id="menuLanguage" class="dropdown-menu" style="margin-right:-100px;!important;">
                            <li>
                                <a href="/en/{{$url}}">
                                    <i class="flag-gb"></i>
                                    English
                                </a>
                            </li>
                            <li>
                                <a href="/es/{{$url}}">
                                    <i class="flag-es"></i>
                                    Ispaniol
                                </a>
                            </li>

                        </ul>

                        <script type="application/javascript">

                            var open = false;

                            function switchLan() {

                                if (open) {
                                    open = false;
                                    $('#menuLanguage').hide();
                                } else {
                                    open = true;
                                    $('#menuLanguage').show();
                                }

                            }

                        </script>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container -->
</nav>
@yield('content')


<footer class="footer_area">
    <div class="container">
        <div class="footer_row row">
            <div class="col-md-3 col-sm-6 footer_about">
                <h2>@lang('globals.about')</h2>
                <a href="/{{App::getLocale()}}//home/"> <span
                            style="font-weight: bolder;color: #2a9055; font-size: 25px">CATALUÑA</span><span
                            style="font-size: 15px;font-weight: bold;color: #c69500"> CONSTRUCCIÓN</span></a>
                <p>@lang('globals.about_title')</p>
                <ul class="socail_icon">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 footer_about quick">
                <h2>@lang('globals.link')</h2>
                <ul class="quick_link">
                    <li><a href="#"><i class="fa fa-chevron-right"></i>@lang('globals.link1')</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right"></i>@lang('globals.link2')</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right"></i>@lang('globals.link3')</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right"></i>@lang('globals.link4')</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right"></i>@lang('globals.link5')</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right"></i>@lang('globals.link6')</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 footer_about">
                <h2>@lang('globals.twit')</h2>
                <a href="#" class="twitter">Web-group-11: @lang('globals.tw_text')</a>
                <a href="#" class="twitter">Web-group-11: @lang('globals.tw_text')</a>
            </div>
            <div class="col-md-3 col-sm-6 footer_about">
                <h2>@lang('navbar.contact')</h2>
                <address>
                    <p>@lang('globals.contact_title')</p>
                    <ul class="my_address">
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>sim.sargsyan.93@gmail.com</a>
                        </li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>622 133 367</a></li>

                        <li><a target="_blank"
                               href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10068.270292149718!2d2.1732079835339535!3d41.387349864565344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f74d289ec7%3A0x1bc2bb02ffe60803!2zQ2FycmVyIGRlIE1vbnRzacOzLCA0LCAwODAwMiBCYXJjZWxvbmEsINCY0YHQv9Cw0L3QuNGP!5e0!3m2!1sru!2s!4v1567243629904!5m2!1sru!2s"><i
                                        class="fa fa-map-marker" aria-hidden="true"></i>Carrer de Montsió, 4, 08002
                                <span style="color:green;">Barcelona,CATALUÑA</span> </a>
                        </li>
                    </ul>
                </address>
            </div>
        </div>
    </div>
    <div class="copyright_area">
        © Powered by  <a href="">Web-group Technologies</a> 2019.
        All Rights Reserved.

        <a href="" data-toggle="modal" data-target="#fluidModalRightSuccess">
            <div class=" nav nav-btn navbar-fixed-bottom " data-toggle="modal" data-target="#myModal2"
                 style="margin-left: 90%">

                <i class="fa fa-envelope fa-fw fa-3x delay-01s animated wow wobble"
                   data-wow-offset="1" data-wow-iteration="200" ></i>

            </div>
        </a>
    </div>
</footer>
<style>
    .animated:hover{
        color: green;
    }
</style>

<!-- Modal -->
<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog " role="document" style="margin-top: 170px;margin-right: 20px;">
        <div class="modal-content">

            <div class="modal-header" style="background-color: #1e7e34;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color: white"
                                                                                                  aria-hidden="true">&times;</span>
                </button>
                <h4 style="color: white;text-align: center" class="modal-title" id="myModalLabel2">Send your message
                    here</h4>
            </div>

            <div class="modal-body">
                <form action="" class="comment_form">

                    <div class="form-group">
                    <textarea cols="40" rows="5" maxlength="1000" class="form-control" name="text"
                              placeholder="Enter message*"></textarea>
                        <span class="error text-error"></span>

                    </div>


                    <div class="form-group">
                        <label for="name">name</label>
                        <input class="form-control" type="text" name="full_name" id="name" autocomplete="text"
                               placeholder="Enter Fullnmae *">
                        <span class="error full_name-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" autocomplete="text"
                               placeholder="Enter phone">
                        <span class="error phone-error"></span>


                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control" name="email" autocomplete="text"
                               placeholder="Enter email *">
                        <span class="error email-error"></span>

                    </div>
                    <div class="form-group">
                        <button class="btn btn-info btn-block " id="comment_btn">
                        <i style="display: none;color: #4c110f" class="fa fa-spinner fa-x fa-spin loading pull-left"></i>
                            send</button>
                    </div>
                </form>
            </div>

        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->


<!-- jQuery JS -->
<script src="{{asset('assets/js/jquery-1.12.0.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Animate JS -->
<script src="{{asset('assets/vendors/animate/wow.min.js')}}"></script>
<!-- Camera Slider -->
<script src="{{asset('assets/vendors/camera-slider/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/vendors/camera-slider/camera.min.js')}}"></script>
<!-- Isotope JS -->
<script src="{{asset('assets/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendors/isotope/isotope.pkgd.min.js')}}"></script>
<!-- Progress JS -->
<script src="{{asset('assets/vendors/Counter-Up/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/vendors/Counter-Up/waypoints.min.js')}}"></script>
<!-- Owlcarousel JS -->
<script src="{{asset('assets/vendors/owl_carousel/owl.carousel.min.js')}}"></script>
<!-- Stellar JS -->
<script src="{{asset('assets/vendors/stellar/jquery.stellar.js')}}"></script>
<script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
<script type="application/javascript">

    var open = false;

    function switchLan() {

        if (open) {
            open = false;
            $('#menuLanguage').hide();
        } else {
            open = true;
            $('#menuLanguage').show();
        }

    }

</script>
<script>
    let lang = window.location.pathname;
    lang.indexOf(1);

    lang.toLowerCase();

    lang = lang.split("/")[1];

    lang = '/' + lang;

</script>
<!-- Theme JS -->
<script src="{{asset('assets/js/theme.js')}}"></script>

<script src="{{asset('assets/js/auth/auth.js')}}"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCspLg4-TLv1pm7oLnUGSIjnTAlkpjqhX8&callback=initMap"--}}
{{--        async defer></script>--}}


{{--    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>--}}
{{--    <script src="{{asset('assets/js/respond.min.js')}}"></script>--}}
</body>
</html>
