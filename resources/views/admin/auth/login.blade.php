<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - {{ config('app.name') }}</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('backend/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('backend/css/style_login.css') }}">
</head>
<body>

    <div class="">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure style="margin-bottom: 0px !important;"><img src="{{ asset('backend/img/signin-image.jpg') }}" alt="sing up image"></figure>
                        <!-- <a href="#" class="signup-image-link">Create an account</a> -->
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="{{ route('admin.login.post') }}" method="POST" class="register-form" id="login-form" role="form">
                            @csrf
                            <div class="form-group">
                                
                                <label class="control-label" for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Email address" autofocus value="{{ old('email') }}">

                            </div>
                            <div class="form-group">

                                <label class="control-label" for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input class="form-control" type="password" id="password" name="password" placeholder="Password">

                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember" id="remember" class="agree-term" />
                                <label for="remember" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>