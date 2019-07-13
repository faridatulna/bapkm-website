@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>
<script>
function showForm() {
  var x = document.getElementById("comment-div");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function likeArticle(x) {
  x.classList.toggle("fa-thumbs-up");
}
</script>

@stop @extends('layouts.app') @section('content')

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
                    <div class="news_d_footer">
                        <a><i onclick="likeArticle(this)" class="iconlike fa fa-thumbs-o-up fa-2x"></i>4 people like this</a>
                        <a onclick="showForm()" class="button justify-content-center ml-auto"><i class="fa fa-comments-o fa-2x"></i>Komentar</a>
                        <!-- <div class="news_socail ml-auto">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                        </div> -->
                    </div>
                </div>

                <div class="navigation-area mt-50">
                    <div class="row">
                        @if($datas->count() >= 1 && $data->id == 1 )
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">

                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            <div class="detials">
                                <p>Next Post</p>
                                <a href="/article-page/{{$next->id}}"><h4>{!!$next->title!!}</h4></a>
                            </div>
                            <div class="arrow">
                                <a href="/article-page/{{$next->id}}"><span class="lnr text-white lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        @elseif( $datas->count() > 1 && $data->id == $datas->max('id') )
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="arrow">
                                <a href="/article-page/{{$prev->id}}"><span class="lnr text-white lnr-arrow-left"></span></a>
                            </div>
                            <div class="detials">
                                <p>Prev Post</p>
                                <a href="/article-page/{{$prev->id}}"><h4>{!!$prev->title!!}</h4></a>
                            </div>
                        </div>

                        @else
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="arrow">
                                <a href="/article-page/{{$prev->id}}"><span class="lnr text-white lnr-arrow-left"></span></a>
                            </div>
                            <div class="detials">
                                <p>Prev Post</p>
                                <a href="/article-page/{{$prev->id}}"><h4>{!!$prev->title!!}</h4></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            <div class="detials">
                                <p>Next Post</p>
                                <a href="/article-page/{{$next->id}}"><h4>{!!$next->title!!}</h4></a>
                            </div>
                            <div class="arrow">
                                <a href="/article-page/{{$next->id}}"><span class="lnr text-white lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="comment-form">
                    <h4>Leave a Reply</h4>
                    <form>
                        <div class="form-group form-inline">
                            <div class="form-group col-lg-6 col-md-6 name">
                                <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter Name'">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 email">
                                <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter email address'">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Subject'">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Messege'" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <button action="" class="primary-btn submit_btn">Post Comment</button>
                        </div>
                    </form>
                </div>

                <div id="comment-div" class="comments-area" hidden="">
                    <h4>05 Comments</h4>
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/blog/c1.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Emilly Blunt</a></h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                    <p class="comment">
                                        Never say goodbye till the end comes!
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                <a href="" class="btn-reply text-uppercase">reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list left-padding">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/blog/c2.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Elsie Cunningham</a></h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                    <p class="comment">
                                        Never say goodbye till the end comes!
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                <a href="" class="btn-reply text-uppercase">reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list left-padding">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/blog/c3.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Annie Stephens</a></h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                    <p class="comment">
                                        Never say goodbye till the end comes!
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                <a href="" class="btn-reply text-uppercase">reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/blog/c4.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">Maria Luna</a></h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                    <p class="comment">
                                        Never say goodbye till the end comes!
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                <a href="" class="btn-reply text-uppercase">reply</a>
                            </div>
                        </div>
                    </div>
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