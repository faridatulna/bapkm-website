@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>

<script>
function showForm() {
  var x = document.getElementById("comment-form");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

$(".iconlike.fa").click(function() {
  $(this).toggleClass("fa-heart fa-heart-o");
});

</script>

@stop @extends('layouts.app') 
<style>
    .comment-list .comment-list {
        margin-left: 40px
    }
</style>
@section('content')

<!--================News Area =================-->
<section class="news_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt-50">
                <div class="main_blog_details">
                    <h4>
                        {!!$data->title!!}
                    </h4>
                    <div class="user_details">
                        <div class="float-left">
                            <a class="gad_btn">
                                {{ $data->filter($data->type)->filter_name }}
                            </a>
                        </div>
                        <div class="float-right">
                            <div class="media">
                                <div class="media-body">
                                    <h5>by Admin</h5>
                                    <p>{{date('M j, Y', strtotime($data->updated_at))}}</p>
                                </div>
                                <div class="d-flex">
                                    <img src="img/blog/user-img.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="word-wrap">{!!$data->description!!}</p>
                    @if( $data->fileImg )
                    <img class="img-fluid" src="{{ url('Uploaded/Article', $data->fileImg )}}" alt=""> @else
                    <!-- <img class="img-fluid" src="https://dummyimage.com/600x400/000/fff" alt=""> -->
                    @endif

                    <blockquote class="blockquote">
                        <div class="row">
                            <div class="col-3">
                                <h3 class="mb-0">
                                    <a href="{{ url('Uploaded/Article', $data->filePdf )}}">
                                        <button class="btn btn-secondary btn-sm"><i class="fa fa-download"></i> Unduh File</button>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </blockquote>
                </div>

                <div class="navigation-area mt-50">
                    <div class="row">
                        @if($datas->count() >= 1 && $data->id == 1 )
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">

                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            <div class="detials">
                                <p style="text-align: right;"><span></span> Next Post <span class="lnr lnr-arrow-right"></span> </p>
                                <a href="/article-page/{{$next->id}}"><h4>{!!$next->title!!}</h4></a>
                            </div>
                        </div>
                        @elseif( $datas->count() > 1 && $data->id == $datas->max('id') )
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="detials">
                                <p><span class="lnr lnr-arrow-left"></span> Prev Post</p>
                                <a href="/article-page/{{$prev->id}}"><h4>{!!$prev->title!!}</h4></a>
                            </div>
                        </div>

                        @else
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="detials">
                                <p><span class="lnr lnr-arrow-left"></span> Prev Post</p>
                                <a href="/article-page/{{$prev->id}}"><h4>{!!$prev->title!!}</h4></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            <div class="detials">
                                <p style="text-align: right;"><span></span> Next Post <span class="lnr lnr-arrow-right"></span> </p>
                                <a href="/article-page/{{$next->id}}"><h4>{!!$next->title!!}</h4></a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="main_blog_details">
                    <div class="news_d_footer">
                        <a>{{$data->viewer}} kali dilihat</a>
                        <a onclick="showForm()" class="iconlike justify-content-center ml-auto">
                            <i class="fa fa-comments-o"></i>Tambahkan Komentar</a>
                    </div>
                </div>

                <div class="comment-form" id="comment-form" style="display: none;">
                    <h4>Leave a Comment</h4>
                    <form method="post" action="{{ route('comment.add') }}">
                        {{ csrf_field() }}
                        <div class="form-group form-inline">
                            <div class="form-group col-lg-6 col-md-6 name">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter Name'" required="">
                                <input type="hidden" name="article_id" value="{{ $data->id }}" />
                                <!-- <input type="hidden" name="user_id" value="10" /> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control mb-10" rows="5" name="body" placeholder="Message" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Message'" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <button class="primary-btn submit_btn">Post Comment</button>
                        </div>
                    </form>
                </div>

                <div class="comments-area">
                    <h4>{{$data->commentsCount($data->id)->where('status',1)->count()}} Komentar</h4>
                    @include('partials._comment_replies', ['comments' => $data->comments, 'article_id' => $data->id])
                </div>
                <div class="comment-foot">
                    @if(session()->has('status'))
                        <div class="alert alert-primary">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ session()->get('status') }}
                        </div>
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