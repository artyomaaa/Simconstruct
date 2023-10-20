<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="{{asset('assets/js/auth/auth.js')}}"></script>
    <!--Custom styles-->

</head>
<body>
<style>
    /* Made with love by Mutiullah Samim*/
    @import url('https://fonts.googleapis.com/css?family=Numans');

    html, body {
        background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
    }

    .container {
        height: 100%;
        align-content: center;
    }

    .card {
        height: 370px;
        margin-top: auto;
        margin-bottom: auto;
        width: 400px;
        background-color: rgba(0, 0, 0, 0.5) !important;
    }

    .error {
        color: red;
        font-size: 18px;
    }

    .social_icon span {
        font-size: 60px;
        margin-left: 10px;
        color: #FFC312;
    }

    .social_icon span:hover {
        color: white;
        cursor: pointer;
    }

    .card-header h3 {
        color: white;
    }

    .social_icon {
        position: absolute;
        right: 20px;
        top: -45px;
    }

    .input-group-prepend span {
        width: 50px;
        background-color: #FFC312;
        color: black;
        border: 0 !important;
    }

    input:focus {
        outline: 0 0 0 0 !important;
        box-shadow: 0 0 0 0 !important;

    }

    .remember {
        color: white;
    }

    .remember input {
        width: 20px;
        height: 20px;
        margin-left: 15px;
        margin-right: 5px;
    }

    .login_btn {
        color: black;
        background-color: #FFC312;
        width: 100px;
    }

    .login_btn:hover {
        color: black;
        background-color: white;
    }

    .links {
        color: white;
    }

    .links a {
        margin-left: 4px;
    }
</style>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3> Admin Sign In</h3>
                {{--                <div class="d-flex justify-content-end social_icon">--}}
                {{--                    <span><i class="fab fa-facebook-square"></i></span>--}}
                {{--                    <span><i class="fab fa-google-plus-square"></i></span>--}}
                {{--                    <span><i class="fab fa-twitter-square"></i></span>--}}
                {{--                </div>--}}
            </div>
            <div class="card-body">
                <form id="admin_login_form">


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Email" name="email">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="password" name="password">
                    </div>
                    <span class="error password-error"></span>

{{--                    <div class="row align-items-center remember">--}}
{{--                        <input type="checkbox">Remember Me--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <input type="button" value="Login" class="btn float-right login_btn" id="sign_in">
                    </div>
                </form>
            </div>
{{--            <div class="card-footer">--}}
{{--                <div class="d-flex justify-content-center links">--}}
{{--                    Don't have an account?<a href="#">Sign Up</a>--}}
{{--                </div>--}}
{{--                <div class="d-flex justify-content-center">--}}
{{--                    <a href="#">Forgot your password?</a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
</body>
</html>
