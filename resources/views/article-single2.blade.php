@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>
@stop @extends('layouts.app') @section('content')
<!--================Header Menu Area =================-->

<!--================Header Menu Area =================-->

<!--================Home Banner Area =================-->
<!-- <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="banner_content text-center">
                                    <div class="date">
                                        <a class="gad_btn" href="#">Gadgets</a>
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                    </div>
                                    <h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner_content text-center">
                                    <div class="date">
                                        <a class="gad_btn" href="#">Gadgets</a>
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                    </div>
                                    <h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner_content text-center">
                                    <div class="date">
                                        <a class="gad_btn" href="#">Gadgets</a>
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                    </div>
                                    <h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
<!--================End Home Banner Area =================-->

<!--================Choice Area =================-->
<!-- <section class="choice_area p_120">
            <div class="container">
                <div class="main_title2">
                    <h2>Editor’s Choice</h2>
                </div>
                <div class="row choice_inner">
                    <div class="col-lg-3 col-md-6">
                        <div class="choice_item">
                            <img class="img-fluid" src="img/blog/choice/choice-1.jpg" alt="">
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn" href="#">Gadgets</a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                </div>
                                <a href="news-details.html"><h4>Myspace Layouts The Missing Element already</h4></a>
                                <p>Planning to visit Las Vegas or any other vacational resort where casinos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="choice_item">
                            <img class="img-fluid" src="img/blog/choice/choice-2.jpg" alt="">
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn" href="#">Gadgets</a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                </div>
                                <a href="news-details.html"><h4>Myspace Layouts The Missing Element already</h4></a>
                                <p>Planning to visit Las Vegas or any other vacational resort where casinos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="choice_item">
                            <img class="img-fluid" src="img/blog/choice/choice-3.jpg" alt="">
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn" href="#">Gadgets</a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                </div>
                                <a href="news-details.html"><h4>Myspace Layouts The Missing Element already</h4></a>
                                <p>Planning to visit Las Vegas or any other vacational resort where casinos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="choice_item">
                            <img class="img-fluid" src="img/blog/choice/choice-4.jpg" alt="">
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn" href="#">Gadgets</a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                </div>
                                <a href="news-details.html"><h4>Myspace Layouts The Missing Element already</h4></a>
                                <p>Planning to visit Las Vegas or any other vacational resort where casinos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
<!--================End Choice Area =================-->

<!--================News Area =================-->
<section class="news_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div>
                    <h2>{{ $data->title }}</h2>
                </div>

                <div class="latest_news">
                    <div class="media">
                        <!-- <div class="d-flex">
                                    <img class="img-fluid" src="{{ asset('force/img/blog/l-news/l-news-1.jpg') }}" alt="">
                                </div> -->
                        <div class="media-body">
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn date-info" href="#">
                                            @if( $data->jenis == 0 ) Umum
                                            @elseif( $data->jenis == 1 ) Beasiswa
                                            @else UKM
                                            @endif
                                            </a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{ $data->tgl_post }}</a>
                                </div>
                                <div>
                                    <!-- @if($data->fileImg)
                                            <img class="img-fluid" src="{{url('files/', $data->fileImg)}}" alt="image"/>
                                        @else
                                            <img class="img-fluid" src="{{ url('files/default.jpg') }}" alt="image"/>
                                        @endif -->

                                    <!-- <img class="img-fluid" src="{{ asset('force/img/a.jpg') }}" alt=""> -->
                                    <p>{{ $data->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="right_sidebar">
                    <!-- <aside class="r_widgets news_widgets">
                                    <div class="main_title2">
                                        <h2>Most Popular News</h2>
                                    </div>
                                    <div class="choice_item">
                                        <img class="img-fluid" src="img/blog/popular-post/pp-1.jpg" alt="">
                                        <div class="choice_text">
                                            <div class="date">
                                                <a class="gad_btn" href="#">Gadgets</a>
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                            </div>
                                            <a href="news-details.html"><h4>Dealing With Technical Support with 10 Useful Tips</h4></a>
                                            <p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights</p>
                                        </div>
                                    </div>
                                    <div class="news_slider owl-carousel">
                                        <div class="item">
                                            <div class="choice_item">
                                                <img src="img/blog/popular-post/pp-2.jpg" alt="">
                                                <div class="choice_text">
                                                    <a href="news-details.html"><h4>Dealing With Technical Support 10 with Useful Tips around</h4></a>
                                                    <div class="date">
                                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="choice_item">
                                                <img src="img/blog/popular-post/pp-3.jpg" alt="">
                                                <div class="choice_text">
                                                    <a href="news-details.html"><h4>An Ugly Myspace Profile Will Sure Ruin Your Reputation</h4></a>
                                                    <div class="date">
                                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="choice_item">
                                                <img src="img/blog/popular-post/pp-2.jpg" alt="">
                                                <div class="choice_text">
                                                    <a href="news-details.html"><h4>Dealing With Technical Support 10 with Useful Tips around</h4></a>
                                                    <div class="date">
                                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="choice_item">
                                                <img src="img/blog/popular-post/pp-3.jpg" alt="">
                                                <div class="choice_text">
                                                    <a href="news-details.html"><h4>An Ugly Myspace Profile Will Sure Ruin Your Reputation</h4></a>
                                                    <div class="date">
                                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="choice_item">
                                                <img src="img/blog/popular-post/pp-2.jpg" alt="">
                                                <div class="choice_text">
                                                    <a href="news-details.html"><h4>Dealing With Technical Support 10 with Useful Tips around</h4></a>
                                                    <div class="date">
                                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="choice_item">
                                                <img src="img/blog/popular-post/pp-3.jpg" alt="">
                                                <div class="choice_text">
                                                    <a href="news-details.html"><h4>An Ugly Myspace Profile Will Sure Ruin Your Reputation</h4></a>
                                                    <div class="date">
                                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside> -->

                    <aside class="r_widgets">
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
                    </aside>

                    <aside class="r_widgets add_widgets">
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

                        <div class="main_title2">

                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ start footer Area  =================-->

<!--================ End footer Area  =================-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
