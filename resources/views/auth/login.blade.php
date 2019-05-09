<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('admin-page/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
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
            <div class="card-header text-center"><h1>Admin</h1><span class="splash-description">Please enter your user information.</span></div>
            <!-- <h1>Login Form</h1> -->
            <div class="card-body">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="email" name="email" input=old{email} type="email" placeholder="Email" required="">
                        @if ($errors->has('email'))
                            @foreach ($errors->get('email') as $error)
                            <h5 class="alert alert-danger">{{ $error }}</h5>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password">
                         @if ($errors->has('password'))
                            @foreach ($errors->get('password') as $error)
                            <h5 class="alert alert-danger">{{ $error }}</h5>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ asset('admin-page/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
 
</html>