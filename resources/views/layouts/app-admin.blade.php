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
    <link rel="stylesheet" href="{{ asset('adminlte/css/select2.css')}}">
    <link rel="stylesheet" href="{{ asset('adminlte/css/dataTables.bootstrap4.min.css')}}">

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script> -->

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
                <ul class="navbar-nav ml-auto navbar-right-top navbar-dark">
                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(Auth::user()->gambar)
                              <img src="{{ url('Uploaded/Admin', Auth::user()->gambar) }}" alt="" class="user-avatar-md rounded-circle">
                            @else
                              <img src="{{ url('admin-page/assets/images/avatar-1.jpg') }}" alt="" class="user-avatar-md rounded-circle">
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name">{{Auth::user()->name}}</h5>
                                <span class="status"></span><span class="ml-2"></span>
                            </div>
                            <a class="dropdown-item" href="{{route('admin.user.edit', Auth::user()->id)}}"><i class="fas fa-user mr-2"></i>Edit Profile</a>
                            <!-- <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a> -->
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-power-off mr-2"></i>Sign Out
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                </form>
                            </a>
                            <!-- <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a> -->
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
        <div class="footer " style="position: fixed; bottom: 0px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="float-right">
                        Copyright © {{date('Y')}} bapkm - All rights reserved.
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
    <!-- <script src="{{ asset('admin-page/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script> -->
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

    <!-- /*databs*/ -->
        <script src="{{asset('adminlte/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('adminlte/js/dataTables.bootstrap4.min.js')}}"></script>
      <script src="{{asset('adminlte/js/sweetalert2.all.js')}}"></script>
      <script src="{{asset('adminlte/js/select2.min.js')}}"></script>

    

     @include('sweetalert::alert')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    @section('js')

    @show
</body>

</html>