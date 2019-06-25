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

<!--================News Area =================-->
<section class="news_area  mt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div>
                    <h1>Hasil Pencarian ? <b><em> @if($query) {{ $query }} @else Not Found @endif </em></b></h1>
                </div>
                <div class="latest_news">
                    @if(isset($details))

                    @foreach($details as $data)
                    <div class="media">
                        <div class="media-body">
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
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('M j, Y', strtotime($data->updated_at)) }}</a>
                                </div>
                                <a href="{{ route('article-single-page', $data->id) }}" method="post"><h4>{{ $data->title }}</h4></a> {{ csrf_field() }}
                                <span class="d-inline-block text-truncate" style="max-width: 150px;">
                                          <p style="overflow-wrap: break-word; word-break: break-word; max-height: 50em; ">{{ $data->description }}</p>
                                        </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                    @if ($details->hasPages()) Halaman <strong>{{ $details->currentPage() }}</strong> dari <strong>{{ $details->lastPage() }}</strong>.
                        <br/> Menampilkan <strong>{{ ((($details->currentPage() -1) * $details->perPage()) + 1) }}</strong> sampai <strong>{{ ((($details->currentPage() -1) * $details->perPage()) + $details->count()) }}</strong> dari <strong>{{ $details->total() }}</strong> data yang ada.
                        <br/> @endif
                        <br> {{ $details->fragment('one')->links() }}

                    @else
                        <h2 class="mt-100"> Kami tidak dapat menemukan pencarian anda , Mohon coba lagi.</h2>
                    @endif
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
                                        <a href="news-details.html"><h4 style="text-transform: uppercase;">{{$data->title}}</h4></a>
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
                                        <a href="news-details.html">
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
                                            <small><i class="fa fa-map-marker"></i> &nbsp; {{$data->place}}</small>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                              </div>
                            
                        </div>

                    </aside>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================End News Area =================-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection