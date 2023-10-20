@extends('home.layouts')
@section('content')
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h1>Contact Us</h1>
        <ol class="breadcrumb">
            <li><a href="/{{App::getLocale()}}/home/">@lang('navbar.home')</a></li>
            <li><a href="/{{App::getLocale()}}/contact-us/" class="active">@lang('navbar.contact')</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Map -->
    <div class="contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10068.270292149718!2d2.1732079835339535!3d41.387349864565344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f74d289ec7%3A0x1bc2bb02ffe60803!2zQ2FycmVyIGRlIE1vbnRzacOzLCA0LCAwODAwMiBCYXJjZWxvbmEsINCY0YHQv9Cw0L3QuNGP!5e0!3m2!1sru!2s!4v1567243629904!5m2!1sru!2s"
                width="800" height="600" frameborder="0" style="" allowfullscreen=""></iframe>
        <!-- End Map -->
    </div>
    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>@lang('globals.contact_info')</h2>
                    <p>@lang('globals.contact_text1')</p>
                    <p>@lang('globals.contact_text2')</p>
                    <div class="location">
                        <div class="location_laft">
                            <a class="f_location" href="#">@lang('globals.contact_location')</a>
                            <a href="#">phone</a>
                            <a href="#">fax</a>
                            <a href="#">email</a>
                        </div>
                        <div class="address">
                            <a href="#">Carrer de Montsió, 4, 08002<br> Barcelona, CATALUÑA </a>
                            <a href="#"> 622 133 367 </a>
                            <a href="#">xxxxxxxxxxxxxxxx</a>
                            <a href="#">sim.sargsyan.93@gmail.com</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 contact_info send_message">
                    <h2>@lang('globals.contact_mes_title')</h2>
                    <form class="form-inline contact_box comment_form">
                        <input type="text" name="full_name" class="form-control input_box"
                               placeholder=" @lang('input.name') *">
                        <span class="error full_name-error"></span>
                        <input type="email" name="email" class="form-control input_box"
                               placeholder=" @lang('input.email') *">
                        <span class="error email-error"></span>
                        <input type="text" name="phone" class="form-control input_box"
                               placeholder="@lang('input.phone') *">
                        <span class="error phone-error"></span>
                        <textarea class="form-control input_box" name="text"
                                  placeholder="@lang('input.text')"></textarea>
                        <span class="error text-error"></span>

                        <button type="button" class="btn btn-default"
                                id="message_btn">
                            <i style="display: none;" class="fa fa-spinner fa-spin loading"></i>
                            @lang('globals.contact_btn')</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

@endsection

