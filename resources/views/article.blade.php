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
<section class="choice_area mt-50 mb-50">
    <div class="container">
        <div class="main_title2">
            <h2>Berita Terbaru</h2>
        </div>
        <div class="row choice_inner">
            @foreach($news as $data)
            <div class="col-lg-3 col-md-6">
                <div class="choice_item">
                    <div class="choice_text">
                        <div class="date">
                            <a class="gad_btn" href="#">
                                {{ $data->filter($data->type)->filter_name }}
                            </a>
                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('M j, Y', strtotime($data->updated_at)) }}</a>
                        </div>
                        <a href="/article-page/{{$data->id}}"><h4>{{$data->title}}</h4></a>
                        <p class="word-wrap">{!!$data->description!!}</p>
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
                        <i class="dropdown icon"></i>Kategori
                    </div>
                    <div class="content active">
                        <div class="ui yellow labels"> 
                              <button class="ui small label option" id="fid0" value="0">Semua</button>
                              <!-- <a class="ui small label option" href="/article">Semua</a> -->
                            @foreach( $filter as $filter )
                              <button class="ui small label option" id="fid{{$filter->id}}" value="{{$filter->id}}">{{$filter->filter_name}}</button>
                              <!-- <a class="ui small label option" href="/article/{{$filter->id}}">{{$filter->filter_name}}</a> -->
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="latest_news">

                    <div class="media">
                        @if( $datas->count() )
                        <div class="media-body">
                          <div id="product">
                            @foreach($datas as $data)
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn text-uppercase" href="#" disabled="">
                                        {{ $data->filter($data->type)->filter_name }}
                                    </a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('M j, Y', strtotime($data->updated_at)) }}</a>
                                </div>
                                <a href="/article-page/{{$data->id}}" method="post"><h4>{!! $data->title !!}</h4></a> {{ csrf_field() }}
                                <span class="d-inline-block">
                                      <p class="word-wrap">{!!$data->description!!}</p>
                                </span>
                            </div>
                            @endforeach
                          </div>
                        </div>
                        @else
                        <br></br>
                        <div class="alert alert-warning" >
                            <h4> Informasi belum ditambahkan pada laman berikut ini :) </h4></div>
                        @endif
                    </div>

                    <nav aria-label="Page navigation example">
                       @if ($datas->hasPages()) Halaman <strong>{{ $datas->currentPage() }}</strong> dari <strong>{{ $datas->lastPage() }}</strong>.
                        <br/> Menampilkan <strong>{{ ((($datas->currentPage() -1) * $datas->perPage()) + 1) }}</strong> sampai <strong>{{ ((($datas->currentPage() -1) * $datas->perPage()) + $datas->count()) }}</strong> dari <strong>{{ $datas->total() }}</strong> data yang ada.
                        <br/> @endif
                        <br> {{ $datas->fragment('one')->links() }}
                    </nav>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="right_sidebar">
                  <aside class="r_widgets news_widgets">
                      <div class="main_title2">
                          <h2>Kalender Akademik</h2>
                      </div>
                      <div class="choice_item">
                          <div class="choice_text">
                              <div class="date">
                                  <a class="gad_btn" href="#">Kalender Akademik</a>
                                  <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('M j, Y', strtotime($cal_lastest->updated_at)) }}</a>
                              </div>
                              <div class="row" style="height: 40px;">
                                  <div class="col-xs-3">
                                      <div class="date">
                                          <i class="fa fa-calendar fa-5x"></i>
                                      </div>
                                  </div>
                                  <div class="col-xs-9">
                                      <a href="{{ url('Uploaded/Article', $cal_lastest->filePdf) }}"><h4 style="text-transform: uppercase;">{!!$cal_lastest->title!!}</h4></a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="news_slider owl-carousel no-repeat">
                          @foreach($cal as $i=>$data)
                          <div class="item">
                              <div class="choice_item">
                                  <div class="choice_text">
                                      <a href="{{ url('Uploaded/Article', $data->filePdf) }}">
                                          <h4 style="text-transform: uppercase;">{!!$data->title!!}</h4></a>
                                      <div class="date">
                                          <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('M j, Y', strtotime($data->updated_at)) }}</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          @endforeach
                      </div>
                  </aside>

                    <aside class="r_widgets add_widgets text-center">
                        <!-- <img class="img-fluid" src="img/blog/add-1.jpg" alt=""> -->
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
                                                        <a href="#">{{$data->title}}</a>
                                                        <br>
                                                        <small><i class="fa fa-clock-o"></i> &nbsp; {{ date('h:i A', strtotime($data->fromTime)) }} - {{ date('h:i A', strtotime($data->totime)) }}
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
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End News Area =================-->

@endsection