@section('js')
    <script>
        $('.ui.dropdown')
            .dropdown();
    </script>
@stop @extends('layouts.app') @section('content')
    <!--================Header Menu Area =================-->

    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
            <div class="d-flex align-items-center" style="min-height: 350px;position: relative;">
                <div class="container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="banner_inner d-flex align-items-center" style="background-image:url({{url('force/img/banner/wisuda-2015.jpg')}}); background-repeat: no-repeat; background-position: center; filter: brightness(85%);">
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
                            <div class="carousel-item">
                                <div class="banner_inner d-flex align-items-center" style="background-image:url({{url('force/img/banner/its3.jpg')}}); background-repeat: no-repeat; background-position: center; filter: brightness(85%);">
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
                            <div class="carousel-item">
                                <div class="banner_inner d-flex align-items-center" style="background-image:url({{url('force/img/banner/its2.jpg')}}); background-repeat: no-repeat; background-position: center; filter: brightness(85%);">
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
            <div class="row">
                <div class="col-lg-8">
                    <div class="main_title2">
                        <h2>Berita Terbaru</h2>
                    </div>
                    <div class="latest_news">
                        @foreach($article as $data)
                        <div class="media">
                            <!-- <div class="d-flex">
                                    <img class="img-fluid" src="{{ asset('force/img/blog/l-news/l-news-1.jpg') }}" alt="">
                                </div> -->
                            <div class="media-body">
                                <div class="choice_text">
                                    <div class="date">
                                        <a class="gad_btn text-uppercase" href="#" disabled="">
                                            @if( $data->jenis == 0 ) Umum
                                            @elseif( $data->jenis == 1 ) Beasiswa
                                            @else UKM
                                            @endif
                                        </a>
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{ $data->tgl_post }}</a>
                                    </div>
                                    <a href="{{ route('article-single-page', $data->id) }}" method="post"><h4>{{ $data->title }}</h4></a>
                                        {{ csrf_field() }}
                                    <span class="d-inline-block text-truncate" style="max-width: 150px;">
                                      <!-- <p style="overflow-wrap: break-word; word-break: break-word; max-height: 50em; ">{{ $data->description }}</p> -->
                                      <p>deskripsi artikel . url = aa.com | download : pdf.pdf</p>
                                    </span>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        <div class="view-more" align="right">
                            <button class="ui right labeled icon button">
                                <i class="right arrow icon"></i> View More
                            </button>
                        </div>
                    </div>

                    <div class="main_title2">
                        <h2>Layanan Kami</h2>
                    </div>

                    <div class="latest_news">
                      <div class="container">
        <div class="row">
          <div class="MultiCarousel" data-items="3.5,3.5,3.5,3.5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                  <div class="MultiCarousel-inner">
                    <a href="#">
                      <div class="item" style="color: white;">
                          <div class="pad15" style="color: white; background-image:url({{url('force/img/core-img/persuratan.jpg')}}); background-repeat: no-repeat; background-size: 300px 200px; background-position: center; filter: brightness(75%);">
                              <p class="lead">Multi Item Carousel</p>
                              <p>₹ 1</p>
                              <p>₹ 6000</p>
                              <p>50% off</p>
                          </div>
                      </div>
                    </a>
                      <div class="item">
                          <div class="pad15" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{url('force/img/wisuda-content.png')}}); background-repeat: no-repeat; background-size: 300px 200px; background-position: center; color: white;filter: brightness(75%);">
                              <p class="lead">Multi Item Carousel</p>
                              <p>₹ 1</p>
                              <p>₹ 6000</p>
                              <p>50% off</p>
                          </div>
                      </div>
                          <!-- <div class="item">
                              <div class="pad15">
                                  <p class="lead">Multi Item Carousel</p>
                                  <p>₹ 1</p>
                                  <p>₹ 6000</p>
                                  <p>50% off</p>
                              </div>
                          </div>
                          <div class="item">
                              <div class="pad15">
                                  <p class="lead">Multi Item Carousel</p>
                                  <p>₹ 1</p>
                                  <p>₹ 6000</p>
                                  <p>50% off</p>
                              </div>
                          </div>
                              <div class="item">
                                  <div class="pad15">
                                      <p class="lead">Multi Item Carousel</p>
                                      <p>₹ 1</p>
                                      <p>₹ 6000</p>
                                      <p>50% off</p>
                                  </div>
                              </div>
                              <div class="item">
                                  <div class="pad15">
                                      <p class="lead">Multi Item Carousel</p>
                                      <p>₹ 1</p>
                                      <p>₹ 6000</p>
                                      <p>50% off</p>
                                  </div>
                              </div>
                                  <div class="item">
                                      <div class="pad15">
                                          <p class="lead">Multi Item Carousel</p>
                                          <p>₹ 1</p>
                                          <p>₹ 6000</p>
                                          <p>50% off</p>
                                      </div>
                                  </div>
                                  <div class="item">
                                      <div class="pad15">
                                          <p class="lead">Multi Item Carousel</p>
                                          <p>₹ 1</p>
                                          <p>₹ 6000</p>
                                          <p>50% off</p>
                                      </div>
                                  </div>
                                      <div class="item">
                                          <div class="pad15">
                                              <p class="lead">Multi Item Carousel</p>
                                              <p>₹ 1</p>
                                              <p>₹ 6000</p>
                                              <p>50% off</p>
                                          </div>
                                      </div>
                                      <div class="item">
                                          <div class="pad15">
                                              <p class="lead">Multi Item Carousel</p>
                                              <p>₹ 1</p>
                                              <p>₹ 6000</p>
                                              <p>50% off</p>
                                          </div>
                                      </div> -->
                  </div>
                  <button class="btn btn-primary leftLst"><</button>
                  <button class="btn btn-primary rightLst">></button>
              </div>
        </div>
        </div>
                    </div>
                    <!-- <div class="tavel_food mt-100">
                            <div class="main_title2">
                                <h2>Travel and food</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row choice_small_inner">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="choice_item small">
                                                <img class="img-fluid" src="img/blog/popular-post/pp-4.jpg" alt="">
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
                                                <img class="img-fluid" src="img/blog/popular-post/pp-5.jpg" alt="">
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
                                                <img class="img-fluid" src="img/blog/popular-post/pp-6.jpg" alt="">
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
                                                <img class="img-fluid" src="img/blog/popular-post/pp-7.jpg" alt="">
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
                                        <img class="img-fluid" src="img/blog/popular-post/pp-8.jpg" alt="">
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
                        </div> -->
                    <!-- <div class="wedding_megazin mt-100">
                            <div class="main_title2">
                                <h2>Wedding adventure</h2>
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
                        </div> -->
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
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End News Area =================-->

    <!--================Product List Area =================-->
    <!-- <section class="product_list_area p_100">
            <div class="container">
                <div class="row product_list_inner">
                    <div class="col-lg-4">
                        <div class="main_title2">
                            <h2>Best Product Deals</h2>
                        </div>
                        <div class="product_list">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>Video Games Playing With Imagination That surprise you</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>A Discount Toner Cartridge Is Better Than Ever And You Will Save</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>Microsoft Patch Management For Home Users</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>Asus Laptops Are Still Part Of The Dell Family</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="main_title2">
                            <h2>Tech Culture</h2>
                        </div>
                        <div class="product_list">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>Will The Democrats Be Able To Reverse The Online Gambling Ban</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-6.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>For Women Only Your Computer Usage Could Cost You Your Job</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-7.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>Converter Ipod Video Taking Portable Video Viewing To A Whole Level</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-8.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>Sony Laptops Are Still Part Of The Sony Family</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="main_title2">
                            <h2>Brilliant Ideas</h2>
                        </div>
                        <div class="product_list">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-9.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>Las Vegas How To Have Non Gambling Related Fun</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-10.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>Website Hosting Reviews Free The Best Resource For Website</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-11.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>Compatible Inkjet Cartridge Which One Will You Choose</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/product/product-12.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="#"><h4>How To Protect Your Computer Wery Useful Tips</h4></a>
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
            </div>
        </section> -->
    <!--================End Product List Area =================-->

    <!--================ start footer Area  =================-->

    <!--================ End footer Area  =================-->




    @endsection
