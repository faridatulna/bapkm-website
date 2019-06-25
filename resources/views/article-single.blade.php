@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>
@stop @extends('layouts.app') @section('content')

<!--================News Area =================-->
<section class="news_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt-50">
                <div class="main_blog_details">
                    <a href="#"><h4>
                        {{$data->title}}
                    </h4></a>
                    <div class="user_details">
                        <div class="float-left">
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
                        </div>
                        <div class="float-right">
                            <div class="media">
                                <div class="media-body">
                                    <h5>by Admin</h5>
                                    <p>{{date('M j, Y', strtotime($data->updated_at))}}</p>
                                    <!-- <p>12 Dec, 2017 11:21 am</p> -->
                                </div>
                                <div class="d-flex">
                                    <img src="img/blog/user-img.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>{{$data->description}}</p>

                    <img class="img-fluid" src="https://dummyimage.com/600x400/000/fff" alt="">

                    <blockquote class="blockquote">
                        <div class="row">
                            <div class="col-3">
                                <h3 class="mb-0">
                                    <form action="donwload/{{$data->filePdf}}/">
                                        <button class="btn btn-secondary btn-sm"><i class="fa fa-download"></i> Unduh File</button>
                                    </form>
                                </h3>
                            </div>
                        </div>

                    </blockquote>
                    <div class="news_d_footer">
                    </div>
                </div>
                <div class="navigation-area">
                    <div class="row">
                        @if($datas->count() >= 1 && $data->id == 1 )
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            <div class="detials">
                                <p>Next Post</p>
                                <a href="/article-page/{{$data->id+1}}"><h4>{{$next->title}}</h4></a>
                            </div>
                            <div class="arrow">
                                <a href="/article-page/{{$data->id+1}}"><span class="lnr text-white lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        @elseif($datas->count() > 1 && $data->id == $datas->count())
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="arrow">
                                <a href="/article-page/{{$data->id-1}}"><span class="lnr text-white lnr-arrow-left"></span></a>
                            </div>
                            <div class="detials">
                                <p>Prev Post</p>
                                <a href="/article-page/{{$data->id-1}}"><h4>{{$prev->title}}</h4></a>
                            </div>
                        </div>
                        
                        @else
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="arrow">
                                <a href="/article-page/{{$data->id-1}}"><span class="lnr text-white lnr-arrow-left"></span></a>
                            </div>
                            <div class="detials">
                                <p>Prev Post</p>
                                <a href="/article-page/{{$data->id-1}}"><h4>{{$prev->title}}</h4></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            <div class="detials">
                                <p>Next Post</p>
                                <a href="/article-page/{{$data->id+1}}"><h4>{{$next->title}}</h4></a>
                            </div>
                            <div class="arrow">
                                <a href="/article-page/{{$data->id+1}}"><span class="lnr text-white lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right_sidebar">

                    <aside class="r_widgets add_widgets text-center mt-50">
                        <img class="img-fluid" src="img/blog/add-1.jpg" alt="">
                    </aside>

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

<!--================Choice Area =================-->
<!-- <section class="choice_area mt-50 mb-50">
    <div class="container">
        <div class="main_title2">
            <h2>Berita Terakhir</h2>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="choice_item">
                    <img class="img-fluid" src="img/blog/popular-post/pp-9.jpg" alt="">
                    <div class="choice_text">
                        <div class="date">
                            <a class="gad_btn" href="#">Gadgets</a>
                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                        </div>
                        <a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
                        <p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="choice_item">
                    <img class="img-fluid" src="img/blog/popular-post/pp-10.jpg" alt="">
                    <div class="choice_text">
                        <div class="date">
                            <a class="gad_btn" href="#">Gadgets</a>
                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                        </div>
                        <a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
                        <p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="choice_item small">
                    <img class="img-fluid" src="img/blog/popular-post/pp-11.jpg" alt="">
                    <div class="choice_text">
                        <a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
                        <div class="date">
                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="choice_item small">
                    <img class="img-fluid" src="img/blog/popular-post/pp-12.jpg" alt="">
                    <div class="choice_text">
                        <a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
                        <div class="date">
                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="choice_item small">
                    <img class="img-fluid" src="img/blog/popular-post/pp-13.jpg" alt="">
                    <div class="choice_text">
                        <a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
                        <div class="date">
                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="choice_item small">
                    <img class="img-fluid" src="img/blog/popular-post/pp-14.jpg" alt="">
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
    </div>
</section> -->
<!--================End Choice Area =================-->

@endsection