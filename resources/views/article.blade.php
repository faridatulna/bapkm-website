@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();

    $('.trigger.example .accordion')
        .accordion({
            selector: {
                trigger: '.title .icon'
            }
        });
</script>
@stop @extends('layouts.app') @section('content')

<!--================Choice Area =================-->
<!-- <section class="choice_area mt-50 mb-50">
    <div class="container">
        <div class="main_title2">
            <h2>Berita Terbaru</h2>
        </div>
        <div class="row choice_inner">
            <div class="col-lg-6">
                <div class="row choice_small_inner">
                    <div class="col-lg-6 col-sm-6">
                        <div class="choice_item small">
                            <img class="img-fluid" src="{{asset('force/img/blog/popular-post/pp-4.jpg')}}" alt="">
                            <div class="choice_text">
                                <a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
                                <div class="date">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="choice_item small">
                            <img class="img-fluid" src="{{asset('force/img/blog/popular-post/pp-5.jpg')}}" alt="">
                            <div class="choice_text">
                                <a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
                                <div class="date">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="choice_item small">
                            <img class="img-fluid" src="{{asset('force/img/blog/popular-post/pp-6.jpg')}}" alt="">
                            <div class="choice_text">
                                <a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
                                <div class="date">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="choice_item small">
                            <img class="img-fluid" src="{{asset('force/img/blog/popular-post/pp-7.jpg')}}" alt="">
                            <div class="choice_text">
                                <a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
                                <div class="date">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choice_item">
                    <img class="img-fluid" src="{{ asset('force/img/blog/popular-post/pp-8.jpg')}}" alt="">
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
            </div>
        </div>
    </div>
</section> -->
<section class="choice_area mt-50 mb-50">
    <div class="container">
        <div class="main_title2">
            <h2>Berita Terbaru</h2>
        </div>
        <div class="row choice_inner">
            @foreach($news as $data)
            <div class="col-lg-3 col-md-6">
                <div class="choice_item">
                    <!-- <img class="img-fluid" src="img/blog/choice/choice-1.jpg" alt=""> -->
                    <div class="choice_text">
                        <div class="date">
                            <a class="gad_btn" href="#">
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
                        <a href="/article-page/{{$data->id}}"><h4>{{$data->title}}</h4></a>
                        <p>{{$data->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--================End Choice Area =================-->

<!--================News Area =================-->
<section class="news_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ui accordion">
                    <div class="title active">
                        <i class="dropdown icon"></i>Filter
                    </div>
                    <div class="content active">
                        <div class="ui yellow labels">
                            <!-- /*label*/ -->
                            <a class="ui small label" href="/article/akademik">Akademik</a>
                            <a class="ui small label" href="/article/beasiswa">Beasiswa</a>
                            <a class="ui small label" href="/article/camaba">Calon Mahasiswa</a>
                            <a class="ui small label" href="/article/umum">Umum</a>
                            <a class="ui small label" href="/article/wisuda">Wisuda</a>
                        </div>
                    </div>
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

                    <nav aria-label="Page navigation example">
                        @if ($article->hasPages()) Halaman <strong>{{ $article->currentPage() }}</strong> dari <strong>{{ $article->lastPage() }}</strong>.
                        <br/> Menampilkan <strong>{{ ((($article->currentPage() -1) * $article->perPage()) + 1) }}</strong> sampai <strong>{{ ((($article->currentPage() -1) * $article->perPage()) + $article->count()) }}</strong> dari <strong>{{ $article->total() }}</strong> data yang ada.
                        <br/> @endif
                        <br> {{ $article->fragment('one')->links() }}
                    </nav>
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

                    <aside class="r_widgets add_widgets text-center">
                        <img class="img-fluid" src="img/blog/add-1.jpg" alt="">
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

@endsection