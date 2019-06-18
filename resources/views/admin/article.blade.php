@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();

    $('.trigger.example .accordion')
  .accordion({
    selector: {
      trigger: '.title .icon'
    }
  })
;
</script>
@stop @extends('layouts.app') @section('content')

<!--================Choice Area =================-->
<section class="choice_area mt-50 mb-50">
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
                    <div class="ui yellow labels"> <!-- /*label*/ -->
                        <a class="ui small label">Akademik</a>
                        <a class="ui small label">Beasiswa</a>
                        <a class="ui small label">Administrasi</a>
                        <a class="ui small label">Wisuda</a>
                        <a class="ui small label">Alumni</a>
                        <a class="ui small label">Registrasi</a>
                    </div>
                  </div>
                </div>
                <div class="latest_news">

                    <div class="media">
                        <div class="media-body">
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn text-uppercase" href="#" disabled="">
                                            Umum
                                        </a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>11/6/2019</a>
                                </div>
                                <a href="#" method="post"><h4>Denah Wisuda 119</h4></a>
                                <span class="d-inline-block text-truncate" style="overflow: hidden;">
                                      <p>deskripsi artikel . url = aa.com | download : pdf.pdf</p>
                                    </span>
                            </div>
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn text-uppercase" href="#" disabled="">
                                            Calon Mahasiswa
                                        </a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>10/6/2019</a>
                                </div>
                                <a href="#" method="post"><h4>Pengumuman SNMPTN 2019</h4></a>
                                <span class="d-inline-block text-truncate" style="overflow: hidden;">
                                      <p>deskripsi artikel . url = aa.com | download : pdf.pdf</p>
                                    </span>
                            </div>
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn text-uppercase" href="#" disabled="">
                                            Calon Mahasiswa
                                        </a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>09/6/2019</a>
                                </div>
                                <a href="#" method="post"><h4>Informasi Bagi Calon Mahasiswa Baru PKM 2019</h4></a>
                                <span class="d-inline-block text-truncate" style="overflow: hidden;">
                                      <p>deskripsi artikel . url = aa.com | download : pdf.pdf</p>
                                    </span>
                            </div>
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn text-uppercase" href="#" disabled="">
                                            Umum
                                        </a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>11/6/2019</a>
                                </div>
                                <a href="#" method="post"><h4>Denah Wisuda 119</h4></a>
                                <span class="d-inline-block text-truncate" style="overflow: hidden;">
                                      <p>deskripsi artikel . url = aa.com | download : pdf.pdf</p>
                                    </span>
                            </div>
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn text-uppercase" href="#" disabled="">
                                            Calon Mahasiswa
                                        </a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>10/6/2019</a>
                                </div>
                                <a href="#" method="post"><h4>Pengumuman SNMPTN 2019</h4></a>
                                <span class="d-inline-block text-truncate" style="overflow: hidden;">
                                      <p>deskripsi artikel . url = aa.com | download : pdf.pdf</p>
                                    </span>
                            </div>
                            <div class="choice_text">
                                <div class="date">
                                    <a class="gad_btn text-uppercase" href="#" disabled="">
                                            Calon Mahasiswa
                                        </a>
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>09/6/2019</a>
                                </div>
                                <a href="#" method="post"><h4>Informasi Bagi Calon Mahasiswa Baru PKM 2019</h4></a>
                                <span class="d-inline-block text-truncate" style="overflow: hidden;">
                                      <p>deskripsi artikel . url = aa.com | download : pdf.pdf</p>
                                    </span>
                            </div>
                        </div>
                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-circle pg-blue justify-content-center">
                            <li class="page-item disabled"><a class="page-link">First</a></li>
                            <li class="page-item disabled">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link">1</a></li>
                            <li class="page-item"><a class="page-link">2</a></li>
                            <li class="page-item"><a class="page-link">3</a></li>
                            <li class="page-item"><a class="page-link">4</a></li>
                            <li class="page-item"><a class="page-link">5</a></li>
                            <li class="page-item">
                                <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link">Last</a></li>
                        </ul>
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
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                </div>
                                <div class="row" style="height: 40px;">
                                    <div class="col-xs-3">
                                        <div class="date">
                                            <i class="fa fa-calendar fa-5x"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-9">
                                        <a href="news-details.html"><h4>KALENDER AKADEMIK 2019/2020 GENAP</h4></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="news_slider owl-carousel no-repeat">
                            <div class="item">
                                <div class="choice_item">
                                    <div class="choice_text">
                                        <a href="news-details.html"><h4>KALENDER AKADEMIK 1</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="choice_item">
                                    <img src="img/blog/popular-post/pp-3.jpg" alt="">
                                    <div class="choice_text">
                                        <a href="news-details.html"><h4>KALENDER AKADEMIK 2</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="choice_item">
                                    <img src="img/blog/popular-post/pp-3.jpg" alt="">
                                    <div class="choice_text">
                                        <a href="news-details.html"><h4>KALENDER AKADEMIK 3</h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

@endsection