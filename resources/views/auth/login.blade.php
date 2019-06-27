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
            background: url("Uploaded/Admin/admin-page2.jpg") ;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        .overlay{
            padding-top: 100px;
            padding-bottom: 40px;
            background: rgba(39,62,84,0.82);
            overflow: hidden;
            width: 100%;height: 100%;
        }

    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="overlay">
        <div class="splash-container">
            <div class="card">
                <div class="card-header text-center" style="background-color: #e6e6f2;"><img class="logo-img" width="100px" height="100px" src="{{ asset('Uploaded/logo.png')}}" alt="logo"><span class="splash-description">Please enter your user information.</span></div>
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="card-body">

                        <div class="form-group">
                            <input id="login" type="text" class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" name="login" value="{{ old('username') ?: old('email') }}" placeholder="Username/Email" required autofocus>
                          
                            @if ($errors->has('username') || $errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
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
                    <p class="footer-text text-center" style="margin-top: 20px;color: #308ee0">Copyright © {{date('Y')}} bapkm.its.ac.id</p>
                </div>
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