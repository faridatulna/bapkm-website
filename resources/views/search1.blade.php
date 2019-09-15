@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>
@stop @extends('layouts.app') @section('content')

<section class="news_area  mt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div>

                    <h2>Hasil Pencarian ? <b><em> {{ $searchResults->count() }} hasil ditemukan untuk pencarian"{{ request('q') }}"</em></b></h2>
                </div>
                <div class="latest_news">
                    @if( $searchResults->count() > 0)

                    @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                    <div class="media">
                        <div class="media-body">
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn" href="#" disabled="">
                                    </a>
                                </div>
                                @foreach($modelSearchResults as $searchResult)
                                <ul>
                                    <li>
                                        <a href="{{ $searchResult->url }}" method="post"><h4>{!! $searchResult->title !!}</h4></a> {{ csrf_field() }}
                                    </li>
                                </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @else
                        <h2 class="mt-100"> Kami tidak dapat menemukan pencarian anda , Mohon coba lagi.</h2>
                    @endif

                </div>
            </div>
            <div class="col-lg-4">
                <div class="right_sidebar mt-50">

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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@endsection
