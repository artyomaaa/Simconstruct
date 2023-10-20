<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Title --}}
    <title>Blog | @yield('title')</title>
    {{-- Bootstrap Core CSS --}}
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- jQuery UI --}}
    @yield('style')
    {{-- MetisMenu CSS --}}
    <link href="{{ asset('assets/admin/css/metisMenu.min.css') }}" rel="stylesheet">
    {{-- Custom CSS --}}
    <link href="{{ asset('assets/admin/css/sb-admin-2.css') }}" rel="stylesheet">
    {{-- Custom Fonts --}}
    <link href="{{ asset('assets/admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    {{-- Admin --}}
    <link href="{{ asset('assets/admin/css/admin-style.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        {{-- Navbar header --}}
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul class="nav navbar-top-links navbar-right" style="margin-left: 150px">

                <li cllis="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <
                    <ul class="dropdown-menu dropdown-user" style="margin-left: 50px;margin-top: 0px">
                        <li>
                            <a class="dropdown-item" href="{{route('logout')}}">
                                <i class="fa fa-sign-out fa-fw"></i>{{ __('Logout') }}
                            </a>

                        </li>
                    </ul>
                </li>
            </ul>
            {{--            <a class="navbar-brand" href="">IT-TALENTS <i class="fa fa-code"></i></a>--}}
        </div>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    @if(Auth::user()->role =='Admin')
                        <li>
                            <a href="{{route('user.index')}}"><i class="fa fa-tachometer fa-fv"></i>
                                Dashboard</a>
                        </li>
                    @endif

                    <li>
                        <a href="{{route('slider')}}"><i class="fa fa-photo fa-fw"></i> Slider</a>
                    </li>
                    <li>
                        <a href="{{route('comment-list')}}"><i class="fa fa-comments fa-fw"></i> Comments<span
                                    class="pull-right  "
                                    style="background-color:lightgrey;border-radius: 5px;color:greenyellow">{{\App\Comment::count()}}</span></a>
                    </li>
                    <li>
                        <a href="{{route('project_list')}}"><i class="fa fa-sitemap fa-fw"></i> Projects</a>
                    </li>
                    <li>
                        <a href="{{route('project_image')}}"><i class="fa fa-list-alt fa-fw"></i> Project_images</a>
                    </li>
                    <li>
                        <a href="{{route('offer')}}"><i class="fa fa-group fa-fw"></i> Offers </a>
                    </li>
                    {{--                    <li>--}}
                    {{--                        <a href=""><span class="glyphicon glyphicon-tasks"></span>--}}
                    {{--                            Services</a>--}}
                    {{--                    </li>--}}



                    {{--                    <li>--}}
                    {{--                        <a href=""><i class="fa fa-creative-commons fa-fw"></i>--}}
                    {{--                            Profession</a>--}}
                    {{--                    </li>--}}
                    {{--                    <li>--}}
                    {{--                        <a href="#"><i class="fa fa-trash fa-fw"></i></i> All trash<span--}}
                    {{--                                    class="fa arrow"></span></a>--}}
                    {{--                        <ul class="nav nav-second-level">--}}
                    {{--                            <li>--}}
                    {{--                                <a href="">Slider</a>--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                <a href="">Services</a>--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                <a href="">Team</a>--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                <a href="">Categories</a>--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                <a href="">Projects</a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                </ul>
            </div>
        </div>
        {{-- Sidebar --}}
        {{-- Log out form drop down --}}


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">
                        @yield('page-name')
                    </h2>
                </div>
            </div>
            @if ($errors->any())
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
            {{-- Content --}}
            @include('all_messges_error')
            @yield('content')
            {{-- Content --}}
        </div>

    </nav>
</div>

{{-- jQuery --}}
<script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
{{-- CKeditor --}}

{{-- jQuery UI --}}
@yield('script')
{{-- Bootstrap Core JavaScript --}}
<script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
{{-- Bootstrap filestyle --}}
<script src="{{ asset('assets/admin/js/bootstrap-filestyle.min.js') }}"></script>
{{-- Metis Menu Plugin JavaScript --}}
<script src="{{ asset('assets/admin/js/metisMenu.min.js') }}"></script>
{{-- Custom Theme JavaScript --}}
<script src="{{ asset('assets/admin/js/sb-admin-2.js') }}"></script>
{{-- Admin script --}}
<script src="{{ asset('assets/admin/js/admin-script.js') }}"></script>
<script src="{{asset('assets/js/auth/auth.js')}}"></script>
</body>
</html>