@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>
<script type="text/javascript">
    (function() {

        var listEl = document.querySelector('.home-grid.products-grid.products-grid--max-4');
        var btnLeftEl = document.querySelector('#left-btn');
        var btnRightEl = document.querySelector('#right-btn');
        var count = 0;

        function slideImages(dir) {
            var totalChildren = listEl.querySelectorAll(".item").length;
            dir === "left" ? ++count : --count;
            listEl.style.left = count * 286 + 'px';
            btnLeftEl.style.display = count < 0 ? "block" : "none";
            // Here, 4 is the number displayed at any given time
            btnRightEl.style.display = count > 4 - totalChildren ? "block" : "none";
        }

        btnLeftEl.addEventListener("click", function(e) {
            slideImages("left");
        });
        btnRightEl.addEventListener("click", function(e) {
            slideImages("right");
        });

    })();
</script>

<!--carousel multi-items-->

@stop @extends('layouts.app') @section('content')

<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="d-flex align-items-center">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($gal as $i=>$data)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$i++}}" class="@if($i == 0) active @endif"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($gal as $i=>$data)
                    <div class="carousel-item @if($i == 0) active @endif">
                        <div class="banner_inner d-flex align-items-center" @if($data->banner) style="background:url({{ url('Uploaded/Banner',$data->banner) }}) no-repeat scroll center center; filter: brightness(85%); background-size: cover;" @endif>
                            <div class="banner_content text-center">
                                <div class="date">
                                </div>
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
                                        {{ $data->filter($data->type)->filter_name }}
                                    </a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('M j, Y', strtotime($data->updated_at)) }}</a>
                                </div>
                                <a href="/article-page/{{$data->id}}" method="post"><h4>{{$data->title}}</h4></a> {{ csrf_field() }}
                                <span class="d-inline-block">
                                      <p class="word-wrap">{!!$data->description!!}</p>
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

                <div class="container">
                    <div class="row">
                        <div class="MultiCarousel" data-items="1.47,2,3.5,3.5" data-slide="1" id="MultiCarousel" data-interval="1000">
                            <div class="MultiCarousel-inner">
                                @foreach($service as $data)
                                <div class="item cube">
                                    <div class="pad15 design" style="background-image:url({{ url('Uploaded/Service',$data->fileImg) }}); background-size: 250px 250px;">
                                        <a href="{{ $data->url }}" target="_blank">
                                            <p class="lead"><strong class="text">{{$data->title}}</strong></p>
                                        </a>
                                    </div>
                                    <a href="{{ url('Uploaded/Service',$data->filePdf) }}">
                                        <div class="card-product-button"><i class="fa fa-book"></i> Panduan</div>
                                    </a>
                                    <!-- <div class="pad15 development" style="background-color: #003A7F;">
                                        <p class="lead" style="margin-top: 11.5vh;"><strong>{{ $data->description }}</strong>
                                        <a href="{{ $data->url }}" target="_blank"><button class="btn btn-info">Link<i class="fa fa-arrow-right"></i></button></a></p>
                                    </div> -->
                                </div>
                                @endforeach
                                <div class="item">
                                    <div class="pad15" style="background-color: transparent;">
                                    </div>
                                </div>
                            </div>
                            <button class="btn bg-light leftLst" data-slide="prev"><i class="fa fa-chevron-left fa-lg text-muted"></i></button>
                            <button class="btn bg-light rightLst" data-slide="next"><i class="fa fa-chevron-right fa-lg text-muted"></i></button>
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
                            @foreach($cal_lastest as $i=>$data)
                            <div class="choice_item">
                                <div class="choice_text">
                                    <div class="date">
                                        <a class="gad_btn" href="">Kalender Akademik</a>
                                        <a><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('M j, Y', strtotime($data->updated_at)) }}</a>
                                    </div>
                                    <div class="row" style="height: 40px;">
                                        <div class="col-xs-3">
                                            <div class="date">
                                                <i class="fa fa-calendar fa-5x" style="color: #003A7F;"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-9">
                                            <a href="{{ url('Uploaded/Article', $data->filePdf) }}"><h4 style="text-transform: uppercase;">{!!$data->title!!}</h4></a>
                                            <a href="{{ url('Uploaded/Article', $data->filePdf) }}">
                                            Lihat Kalender <i class="arrow right icon"></i> 
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <?p $i=0; ?>
                                <div class="news_slider owl-carousel">
                                    @foreach($cal as $i=>$data) @if($i!=0)
                                    <div class="item">
                                        <div class="choice_item">
                                            <div class="choice_text">
                                                <a href="{{ url('Uploaded/Article', $data->filePdf) }}">
                                                    <h4 style="text-transform: uppercase;">{!!$data->title!!}</h4></a>
                                                <div class="date">
                                                    <a><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('M j, Y', strtotime($data->updated_at)) }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else @endif @endforeach
                                </div>

                        </aside>

                        <aside class="r_widgets sosial_widgets">
                            <div class="main_title2">
                                <h2>Quick Links</h2>
                            </div>
                            <div class="content_calendar">
                                <div id="wrapper">
                                    <div class="scrollbar-ql " id="style-7" style="margin-top:10px;">
                                        <ul class="list">
                                            @foreach($links as $data)
                                            <a href="{{ $data->url }}" class="ql">
                                                <li style="border-bottom:1px solid #d9d9d9; "> {{$data->title}} </li>
                                            </a>
                                            @endforeach
                                        </ul>
                                    </div>
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
                                            <div class="content_calendar no-repeat" style="margin-top: 0;">
                                                @foreach($agenda as $data)
                                                <div class="detail-calendar-grey">
                                                    <div class="calendar-grey">
                                                        <h1 style="margin-bottom:0;">{{ date('j', strtotime($data->dateOfEvent)) }}</h1>
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