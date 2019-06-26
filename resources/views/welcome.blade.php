@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>
@stop @extends('layouts.app') @section('content')

<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="d-flex align-items-center" style="min-height: 350px;position: relative;">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($gal as $i=>$data)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$i++}}" class="@if($i == 0) active @endif"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    <!-- <div class="carousel-item active">
                        <div class="banner_inner d-flex align-items-center" >
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
                    </div> -->
                    @foreach($gal as $i=>$data)
                    <div class="carousel-item @if($i == 0) active @endif">
                        <div class="banner_inner d-flex align-items-center" @if($data->banner) style="background-image:url({{ url('Uploaded/Banner',$data->banner) }}); background-repeat: no-repeat; background-position: center; filter: brightness(85%); background-size: 100%;" @endif>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
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
        <div class="row mt-50">
            <div class="col-lg-8">
                <div class="main_title2">
                    <h2>Berita Terbaru</h2>
                </div>
                <div class="latest_news">

                    <div class="media">
                        <div class="media-body">
                            @foreach($article as $data)
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn text-uppercase" href="#" disabled="">
                                        @if($data->type == 1)
                                        Akademik

                                        @elseif($data->type == 2)
                                        Beasiswa

                                        @elseif($data->type == 3)
                                        Calon Mahasiswa

                                        @elseif($data->type == 4)
                                        Umum

                                        @elseif($data->type == 5)
                                        Wisuda

                                        @elseif($data->type == 6)
                                        Kalender
                                        @endif
                                        </a>
                                    <a><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('M j, Y', strtotime($data->updated_at)) }}</a>
                                </div>
                                <a href="/article-page/{{$data->id}}" method="post"><h4>{{$data->title}}</h4></a> {{ csrf_field() }}
                                <span class="d-inline-block text-truncate" style="overflow: hidden;">
                                      <p>{{$data->description}}</p>
                                </span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="view-more" align="right">
                        <a href="/article">
                            <button class="ui right labeled icon button">
                                <i class="right arrow icon"></i> View More
                            </button>
                        </a>
                    </div>
                </div>

                <div class="main_title2">
                    <h2>Layanan Kami</h2>
                </div>

                <!-- <div class='cube'>
                    <div class='design'>
                        <i class='fa-paper-plane' style='margin-right:2px'></i> Design
                    </div>
                    <div class='development'>
                        <i class='fa-code' style='margin-right:2px'></i>Development
                    </div>
                </div> -->

                <div class="container">
                    <div class="row">
                        <div class="MultiCarousel" data-items="3.5,3.5,3.5,3.5" data-slide="1" id="MultiCarousel" data-interval="1000">
                            <div class="MultiCarousel-inner">
                                @foreach($service as $data)
                                <a href="{{ $data->url }}" target="_blank">
                                    <div class="item cube">
                                        <div class="pad15 design" style="background-image:url({{ url('Uploaded/Product',$data->fileImg) }}); background-size: 300px 200px;" >
                                            <p class="lead" style="font-size: 75%; font-weight: 500; line-height: 1em; margin-top: 60%;"><strong>{{$data->title}}</strong></p>
                                        </div>
                                        <div class="pad15 development" style="background-color: #003A7F;">
                                            <p class="lead" style="margin-top: 11.5vh;"><strong>{{ $data->description }}</strong></p>
                                        </div>
                                    </div>
                                </a>
                                @endforeach()
                                <!-- <a href="http://baak.its.ac.id/wsd/cari.php" target="_blank">
                                    <div class="item cube">
                                        <div class="pad15 design" style="background-image:url({{url('Uploaded/Product/wisuda.jpeg')}}); background-size: 300px 200px;">
                                            <p class="lead" style="font-size: 75%; font-weight: 500; line-height: 1em; margin-top: 60%;"><strong>Layanan Wisuda</strong></p>
                                        </div>
                                        <div class="pad15 development" style="background-color: #003A7F;">
                                          <p class="lead" style="margin-top:11.5vh;">
                                            <strong>Layanan pencarian tempat duduk untuk wisudawan.</strong>
                                          </p>
                                        </div>
                                    </div>
                                </a>
                                <a href="https://servicedesk.its.ac.id/" target="_blank"">
                                    <div class="item cube">
                                        <div class="pad15 design" style="background-image:url( {{ url('Uploaded/Product/sd.jpg') }} );  background-size: 300px 200px; ">
                                            <p class="lead" style="font-size: 75%; font-weight: 500; line-height: 1em; margin-top: 60%;"><strong>Service Desk</strong></p>
                                        </div>
                                        <div class="pad15 development" style="background-color: #003A7F;">
                                          <p class="lead" style="margin-top: 11.5vh;"><strong>Layanan penerimaan keluhan yang terintegrasi dengan semua badan di ITS.</strong></p>
                                        </div>
                                    </div>
                                </a> -->

                                <div class="item">
                                    <div class="pad15">
                                        <!-- <p class="lead">Multi Item Carousel</p>
                                        <p>₹ 1</p>
                                        <p>₹ 6000</p>
                                        <p>50% off</p> -->
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary leftLst"><i class="fa fa-angle-left"></i></button>
                            <button class="btn btn-primary rightLst"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right_sidebar">
                    <aside class="r_widgets news_widgets">
                        <div class="main_title2">
                            <h2>Kalender Akademik</h2>
                        </div>
                        @foreach($cal_lastest as $data)
                        <div class="choice_item">
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn" href="#">Kalender Akademik</a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('M j, Y', strtotime($data->updated_at)) }}</a>
                                </div>
                                <div class="row" style="height: 40px;">
                                    <div class="col-xs-3">
                                        <div class="date">
                                            <i class="fa fa-calendar fa-5x"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-9">
                                        <a href="{{ url('Uploaded/Article', $data->filePdf) }}"><h4 style="text-transform: uppercase;">{{$data->title}}</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="news_slider owl-carousel no-repeat">
                            @foreach($cal as $i=>$data) 
                            @if($i > 1)
                            <div class="item">
                                <div class="choice_item">
                                    <div class="choice_text">
                                        <a href="{{ url('Uploaded/Article', $data->filePdf) }}">
                                            <h4 style="text-transform: uppercase;">{{$data->title}}</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('M j, Y', strtotime($data->updated_at)) }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else 
                            @endif 
                            @endforeach
                        </div>
                    </aside>

                    <aside class="r_widgets sosial_widgets">
                        <div class="main_title2">
                            <h2>Quick Links</h2>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-6">
                                <ul class="list">
                                    @foreach($links as $data)
                                    <li><a href="{{ $data->url }}" class="ql">{{$data->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </aside>

                    <aside class="r_widgets add_widgets">
                        <div class="main_title2">
                            <h2>Agenda</h2>
                        </div>
                        <div class="content_calendar ">
                            <div id="wrapper">
                                <div class="scrollbar" id="style-7">
                                    <div class="force-overflow">
                                        <div class="content_calendar no-repeat">
                                            @foreach($agenda as $data)
                                            <div class="detail-calendar-grey">
                                                <div class="calendar-grey">
                                                    <h1 style="margin-top:10px;margin-bottom:0;">{{ date('j', strtotime($data->dateOfEvent)) }}</h1>
                                                    <h3 style="margin-top:0;">{{ date('M', strtotime($data->dateOfEvent)) }}</h3>
                                                </div>
                                                <div class="calendar-contain-grey">
                                                    <div class="calendar-contain-description-grey">
                                                        <a href="https://www.its.ac.id/international/agenda/aun-qa-assesment/" title="AUN-QA Assesment">{{$data->title}}</a>
                                                        <br>
                                                        <small><i class="fa fa-clock-o"></i> &nbsp;
                                                            {{ date('h:ia', strtotime($data->fromTime)) }} - {{ date('h:ia', strtotime($data->totime)) }}
                                                        </small>
                                                        <br>
                                                        <small><i class="fa fa-map-marker"></i> &nbsp; {{$data->place}}
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>

                    <aside class="r_widgets add_widgets text-center">
                        <img class="img-fluid" src="img/blog/add-1.jpg" alt="">
                    </aside>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================End News Area =================-->

@endsection