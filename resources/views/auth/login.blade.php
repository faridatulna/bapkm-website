<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{ asset('admin-page/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <style>
        html,
        body {
            height: 100%;
        }
        
        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><img class="logo-img" width="100px" height="100px" src="{{ asset('force/img/core-img/logo.jpg')}}" alt="logo"><span class="splash-description">Please enter your user information.</span></div>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="card-body">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"">
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                      
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary submit-btn btn-block" type="submit">Login</button>
                    </div>
                </div>
            </form>
            <!-- <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div> -->
            <div>
                <p class="footer-text text-center" style="margin-top: 20px;color: #308ee0">Copyright © {{date('Y')}} bapkm - All rights reserved.</p>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ asset('admin-page/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('admin-page/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>

</html>