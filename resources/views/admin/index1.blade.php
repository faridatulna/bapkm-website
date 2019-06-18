@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>
@stop @extends('layouts.app-admin') @section('content')

<!--================Home Banner Area =================-->
<section class="home_banner_area">
            <div class="d-flex align-items-center" style="min-height: 350px;position: relative;">
                <div class="container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="banner_inner d-flex align-items-center" style="background-image:url({{url('force/img/banner/banner-wisuda-2015.jpg')}}); background-repeat: no-repeat; background-position: center; filter: brightness(85%); background-size: 100%;">
                                    <div class="banner_content text-center">
                                        <div class="date">
                                            <!-- <a class="gad_btn" href="#">Gadgets</a>
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a> -->
                                        </div>
                                        <!-- <h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner_inner d-flex align-items-center" style="background-image:url({{url('force/img/banner/banner-its3.jpg')}}); background-repeat: no-repeat; background-position: center; filter: brightness(85%); background-size: 100%;">
                                    <div class="banner_content text-center">
                                        <div class="date">
                                            <!-- <a class="gad_btn" href="#">Gadgets</a>
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a> -->
                                        </div>
                                        <!-- <h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner_inner d-flex align-items-center" style="background-image:url({{url('force/img/banner/banner-its2.jpg')}}); background-repeat: no-repeat; background-position: center; filter: brightness(85%); background-size: 100%;">
                                    <div class="banner_content text-center">
                                        <div class="date">
                                            <!-- <a class="gad_btn" href="#">Gadgets</a>
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a> -->
                                        </div>
                                        <!-- <h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Choice Area =================-->
<section class="choice_area mt-50">
    <div class="container">
        <div class="main_title2">
                    <h2>Layanan Kami</h2>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="MultiCarousel" data-items="3.5,3.5,3.5,3.5" data-slide="1" id="MultiCarousel" data-interval="1000">
                            <div class="MultiCarousel-inner">
                                <a href="#">
                                    <div class="item" style="color: white;">
                                        <div class="pad15" style="color: white; background-image:url({{url('force/img/core-img/persuratan.jpg')}}); background-repeat: no-repeat; background-size: 300px 200px; background-position: center;">
                                            <p class="lead" style="color: white; margin-top: 15vh;"><strong>Layanan Persuratan</strong></p>
                                            <!-- <p style="color: white;">₹ 1</p>
                                              <p style="color: white;">₹ 6000</p>
                                              <p style="color: white;">50% off</p> -->
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="item">
                                        <div class="pad15" style="color: white; background-image:url({{url('force/img/core-img/wisuda.jpeg')}}); background-repeat: no-repeat; background-size: 300px 200px; background-position: center;">
                                            <p class="lead" style="color: white; margin-top: 15vh;"><strong>Layanan Wisuda</strong></p>
                                            <!-- <p>₹ 1</p>
                                              <p>₹ 6000</p>
                                              <p>50% off</p> -->
                                        </div>
                                    </div>
                                </a>
                                <div class="item">
                                    <div class="pad15">
                                        <p class="lead">Multi Item Carousel</p>
                                        <p>₹ 1</p>
                                        <p>₹ 6000</p>
                                        <p>50% off</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <p class="lead">Multi Item Carousel</p>
                                        <p>₹ 1</p>
                                        <p>₹ 6000</p>
                                        <p>50% off</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <p class="lead">Multi Item Carousel</p>
                                        <p>₹ 1</p>
                                        <p>₹ 6000</p>
                                        <p>50% off</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pad15">
                                        <p class="lead">Multi Item Carousel</p>
                                        <p>₹ 1</p>
                                        <p>₹ 6000</p>
                                        <p>50% off</p>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary leftLst"><i class="fa fa-angle-left"></i></button>
                            <button class="btn btn-primary rightLst"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
    </div>
</section>
<!--================End Choice Area =================-->

<!--================News Area =================-->
<section class="product_list_area mt-50">
            <div class="container">
                    <div class="col-lg-4">
                        <div class="main_title2">
                            <h2>Kalender Akademik</h2>
                        </div>
                        <div class="choice_item">
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn" href="#">Kalender Akademik</a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                </div>
                                <div class="row" style="height: 40px;">
                                    <div class="col-xs-3">
                                        <div class="date">
                                            <i class="fa fa-calendar fa-5x"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-9">
                                        <a href="news-details.html"><h4>KALENDER AKADEMIK 2019/2020 GENAP</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="main_title2">
                            <h2>Agenda</h2>
                        </div>
                        <div class="content_calendar ">
                            <div class="detail-calendar-grey">
                                <div class="calendar-grey">
                                    <h1 style="margin-top:10px;margin-bottom:0;">30</h1>
                                    <h3 style="margin-top:0;">Jan</h3>
                                </div>
                                <div class="calendar-contain-grey">
                                    <div class="calendar-contain-description-grey">
                                        <a href="https://www.its.ac.id/international/agenda/aun-qa-assesment/" title="AUN-QA Assesment">AUN-QA Assesment</a>
                                        <br>
                                        <small><i class="fa fa-clock-o"></i> &nbsp;08:00 - 00:00 WIB </small>
                                        <br>
                                        <small><i class="fa fa-map-marker"></i> &nbsp; Belum ditentukan</small>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-calendar-grey">
                                <div class="calendar-grey">
                                    <h1 style="margin-top:10px;margin-bottom:0;">30</h1>
                                    <h3 style="margin-top:0;">Jan</h3>
                                </div>
                                <div class="calendar-contain-grey">
                                    <div class="calendar-contain-description-grey">
                                        <a href="https://www.its.ac.id/international/agenda/aun-qa-assesment/" title="AUN-QA Assesment">AUN-QA Assesment</a>
                                        <br>
                                        <small><i class="fa fa-clock-o"></i> &nbsp;08:00 - 00:00 WIB </small>
                                        <br>
                                        <small><i class="fa fa-map-marker"></i> &nbsp; Belum ditentukan</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- <div class="main_title2">
                            <h2>Quick Links</h2>
                        </div>
                        <div class="product_list">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-9.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>Las Vegas How To Have Non Gambling Related Fun</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-10.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>Website Hosting Reviews Free The Best Resource For Website</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-11.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>Compatible Inkjet Cartridge Which One Will You Choose</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-12.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>How To Protect Your Computer Wery Useful Tips</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="main_title2">
                            <h2>Quick Links</h2>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-6">
                                <ul class="list">
                                    <li><a href="http://integra.its.ac.id" class="ql">Integra</a></li>
                                    <li><a href="http://10.103.1.158/i_repot/jurusan.php" class="ql">Laporan Semester</a></li>
                                    <li><a href="http://smits.its.ac.id/" class="ql">SMITS</a></li>
                                    <li><a href="http://10.103.1.10/sk/" class="ql">Pencarian SK</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--================End News Area =================-->

@endsection