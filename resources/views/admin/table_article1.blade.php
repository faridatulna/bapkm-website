<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('admin-page/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        
        <!-- left sidebar -->
        <!-- ============================================================== -->
       @include('admin.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- card masonary  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="masonary">
                                    <h3 class="section-title">Card Masonary</h3>
                                    <p>Cards can be organized into Masonry-like columns with just CSS by wrapping them in card-columns.</p>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card-columns">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('admin-page/assets/images/card-img.jpg') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Card title</h3>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                        <div class="card-footer">
                                            <p>
                                                <button class="btn btn-warning">Edit</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end card masonary  -->
                        <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!--  sidebar nav fixed  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                        <div class="sidebar-nav-fixed">
                            <ul class="list-unstyled">
                                <!-- <li><a href="#overview" class="active">Overview</a></li>
                                <li><a href="#cards">Cards</a></li>
                                <li><a href="#image-card">Card Images</a></li>
                                <li><a href="#headerfooter">Header & Footer</a></li>
                                <li><a href="#cardaction">Card Action<span class="badge badge-secondary ml-1">Fresh</span></a></li>
                                <li><a href="#cardfooterlink">Card With Footer Link <span class="badge badge-secondary ml-1">New</span></a></li>
                                <li><a href="#c-nav">Card Navigation</a></li>
                                <li><a href="#masonary">Card Masonary</a></li>
                                <li><a href="#card-list">Card List Group</a></li>
                                <li><a href="#card-variance">Card Variance</a></li> -->
                                <li><a href="#top">Back to Top</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!--  end sidebar nav fixed  -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ asset('admin-page/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin-page/assets/libs/js/main-js.js') }}"></script>
   
</body>
 
</html>