<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <meta charset="utf-8"> @section('css')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{ asset('admin-page/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <title>ADMIN - BAPKM</title>
    <!--asset2-->

    <!-- <link rel="stylesheet" href="{{ asset('force/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('force/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/lightbox/simpleLightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/jquery-ui/jquery-ui.css') }}">

    <link rel="stylesheet" href="{{ asset('force/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('force/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('force/css/responsive.css') }}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('force/bower_components/semantic-ui-calendar/dist/calendar.min.css') }}" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <meta charset="utf-8"> -->

    @show
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
</head>

<body>
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="index.html">ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                <span class="status"></span><span class="ml-2">Available</span>
                            </div>
                            <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->

    <div class="nav-left-sidebar sidebar-dark">
        @section('navbar') @include('include.navbar-admin') @show
    </div>

    <div class="dashboard-wrapper">
        @yield('content')

        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="float-right">
                        Copyright © 2019 BAPKM ITS
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end footer -->
    </div>

    <!-- Optional JavaScript -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{ asset('admin-page/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('admin-page/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('admin-page/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{ asset('admin-page/assets/libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{ asset('admin-page/assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{ asset('admin-page/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- morris js -->
    <script src="{{ asset('admin-page/assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{ asset('admin-page/assets/vendor/charts/morris-bundle/morris.js')}}"></script>
    <!-- chart c3 js -->
    <script src="{{ asset('admin-page/assets/vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{ asset('admin-page/assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{ asset('admin-page/assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
    <script src="{{ asset('admin-page/assets/libs/js/dashboard-ecommerce.js')}}"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    @section('js') @show
</body>

</html>