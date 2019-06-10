<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>BAPKM ITS</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('force/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('force/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('force/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('force/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('force/vendors/lightbox/simpleLightbox.css') }}">
        <link rel="stylesheet" href="{{ asset('force/vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('force/vendors/animate-css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('force/vendors/jquery-ui/jquery-ui.css') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('force/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('force/css/style2.css') }}">
        <link rel="stylesheet" href="{{ asset('force/css/responsive.css') }}">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    		<link href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('force/bower_components/semantic-ui-calendar/dist/calendar.min.css') }}" />
<script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
  <meta charset="utf-8">
    </head>
    <body>

        <!--================Header Menu Area =================-->
        <header class="header-area">

            <!-- Top Header Area -->
            <div class="top-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="top-header-content d-flex align-items-center justify-content-between">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('force/img/core-img/logo.png') }}" style="max-width:5vw;" alt=""></a>
                                </div>

                                <!-- Login Search Area -->
                                <div class="login-search-area d-flex align-items-center">
                                    <!-- Login -->
                                    <div class="login d-flex">
                                      <div class="ui dropdown item">
                                        <a style="margin-right: 1vw;">ID<i style="margin-left: 0.3vw;"class="fa fa-angle-down"></i></a>
                                        <div class=" ui inverted yellow menu">
                                          <div class="item">
                                             <a href="#">Bahasa Indonesia</a>
                                          </div>
                                          <div class="item">
                                             <a href="#">English</a>
                                          </div>
                                        </div>
                                      </div>
                                        <a href="integra.its.ac.id">myITS</a>
                                    </div>
                                    <!-- Search Form -->
                                    <div class="search-form">
                                        <form action="#" method="post">
                                            <input type="search" name="search" class="form-control" placeholder="Search">
                                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navbar Area -->
            <div class="newspaper-main-menu" id="stickyMenu">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">
                        <!-- Menu -->
                        <nav class="classy-navbar justify-content-between" id="newspaperNav">

                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                            </div>

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul>
                                        <li class="nav-link"><a href="#"><strong>Home</strong></a></li>
                                        <li class="nav-link"><a href="#"><strong>Tentang Kami</strong></a>
                                            <div class="megamenu">
                                                <ul class="single-mega cn-col-4">
                                                  <li class="title">Administrasi Pembelajaran</li>
                                                  <li><a href="index.html" class="sub-link">Visi</a></li>
                                                  <li class="sub-link"><a href="catagories-post.html">Misi</a></li>
                                                  <li class="sub-link"><a href="single-post.html">Struktur Organisasi</a></li>
                                                </ul>
                                                <ul class="single-mega cn-col-4">
                                                  <li class="title">Kesejahteraan Mahasiswa</li>
                                                  <li class="sub-link"><a href="index.html">Visi</a></li>
                                                  <li class="sub-link"><a href="catagories-post.html">Misi</a></li>
                                                  <li class="sub-link"><a href="single-post.html">Struktur Organisasi</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-link"><a href="#"><strong>Pengumuman</strong></a>
                                            <ul class="dropdown" style="margin-top:5px;">
                                                <li><a href="index.html">Umum</a></li>
                                                <li><a href="catagories-post.html">Beasiswa</a></li>
                                                <li><a href="single-post.html">UKM</a></li>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
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

        				<div>
							    <h2 style="border-bottom: 3px solid #F4BA23">TENTANG KAMI</h2>
						    </div>

        				<div class="latest_news">
        					<div class="media">
        						<!-- <div class="d-flex">
        							<img class="img-fluid" src="{{ asset('force/img/blog/l-news/l-news-1.jpg') }}" alt="">
        						</div> -->
        						<div class="media-body">
        							<div class="choice_text">
                        <!-- <img class="img-fluid" src="{{ asset('force/img/a.jpg') }}" alt=""> -->
                        <p align="justify">
                          <strong>Institut Teknologi Sepuluh Nopember (ITS) Surabaya</strong> telah resmi berstatus Perguruan Tinggi Negeri Berbadan Hukum (PTN-BH) terhitung sejak 17 Oktober 2014.
                          Perubahan status secara resmi tersebut termuat dalam Peraturan Pemerintah (PP) No. 81 Tahun 2014 yang tercantum dalam surat Dirjen Dikti No: 299/E.EI/OT/2014.
                          <br>
                          <br>
                          Perubahan status ITS menjadi PTN-BH ini dilihat berdasarkan capaian prestasi ITS yang telah mampu memenuhi kriteria PTN-BH. Dari segi mutu misalnya, akreditasi institusi, program studi dan internasionalisasi, ITS menduduki peringkat keempat di Indonesia.
                          Takhanya itu, dari segi tata kelola seperti <i>compliance</i>, ITS menempati posisi kelima. Sedangkan dari penerapan Uang Kuliah tunggal (UKT) dan program Afirmasi Pendidikan Tinggi (ADik) ITS juga dinilai bagus dalam pelaksanaannya.
                          <br>
                          <br>
                          Perubahan bentuk Perguruan Tinggi Negeri (PTN) menjadi bentuk Perguruan Tinggi Negeri Berbadan Hukum (PTN-BH) adalah perubahan yang sangat fundamental.
                          Perubahan ini tidak terjadi dengan sendirinya, tetapi melalui proses yang bertahap dan berkesinambungan.
                          <br>
                          <br>
                          Sejalan dengan tuntutan perubahan bidang akademik dan sekaligus mewujudkan peningkatan kualitas layanan bidang akademik, maka Biro Administrasi Pembelajaran dan Kesejahteraan Mahasiswa (BAPKM) mengadakan acara Raker 2017 pada tanggal 24-26 November 2017 bertempat di Malang.
                          Pada Raker 2017, BAPKM mencoba untuk mengembangkan diri melalui program pengembangan yang berbasis pada peningkatan kualitas layanan.
                          Disamping itu juga tetap menjalankan program rutin yang sudah menjadi kegiatan pokok dengan lebih meningkatkan kualitas di bidang kreativitas SDM untuk mencari atau membuat program baru sebagai upaya efektif dan efisien terhadap setiap program kegiatan.
                        </p>

                        <section style="margin-top: 30px;">
        									<header class="major">
        										<h2 style="padding: 0; margin-bottom: 0.5em; color: black;">Visi</h2>
        									</header>
        									<p align="justify">
        										Evaluasi merupakan upaya menghimpun dan mengolah data yang terpercaya dan dapat dipergunakan sebagai landasan tindakan manajemen untuk mengelola kelangsungan institusi.
        										Dari beberapa tipe evaluasi yang dilaksanakan, evaluasi diri merupakan tipe yang banyak diadopsi dan direkomendasikan untuk dilaksanakan dalam mengevaluasi hasil kerja institusi.
        										Pada dasarnya, evaluasi diri merupakan proses pengukuran secara kuantitatif yang membandingkan prestasi yang telah dicapai dengan tujuan yang diinginkan.
        										<br><br>
        										<strong>Biro Administrasi Pembelajaran dan Kesejahteraan Mahasiswa (BAPKM)</strong>, sebagai unit yang berkewajiban memberikan pelayanan kepada <i>stakeholder</i> secara profesional, menetapkan standar pelayanan administrasi pembelajaran dan kesejahteraan mahasiswa yang mengacu pada prinsip relevansi dan efisiensi.
        										Oleh karena itu, semangat kreatif dan inovatif juga terus dikembangkan oleh seluruh karyawan BAPKM.
        										<br><br>
        										Program pengembangan tersebut diatas diusulkan agar daya dukung Biro Administrasi Pembelajaran dan Kesejahteraan Mahasiswa (BAPKM) sebagai unit pelayanan administrasi akademik bisa berfungsi dengan baik, yaitu terciptanya kerapian manajemen, <i>excellent service</i>,
        										tercapainya tingkat relevansi yang tinggi, serta sebagai sentral data akademik yang akurat, dinamis, dan terpercaya, sehingga dapat digunakan oleh <i>stakeholder</i> dalam proses pengambilan keputusan.
        										<br><br>
        										Sesuai dengan paradigma baru pengembangan pendidikan tinggi yang berorientasi pada prinsip kemandirian, maka Visi BAPKM adalah:
        										<br><strong>“Menjadikan BAPKM sebagai unit penunjang utama dengan mengedepankan layanan administrasi yang <i>excellent</i>”.</strong>
        									</p>
        								</section>

        								<section style="margin-top: 30px;">
        									<header class="major">
        										<h2 style="padding: 0; margin-bottom: 0.5em; color: black;">Misi</h2>
        									</header>
        									<p align="justify">
        										Misi BAPKM adalah menyelenggarakan pelayanan administrasi yang cepat dan akurat yang berbasis pada teknologi; melaksanakan tugas dengan penuh rasa tanggung jawab, menjaga moral dan senantiasa mengedepankan etika;
        											dan meningkatkan professional dan akuntabilitas dalam penyelenggaraan pelayanan.
        									</p>
        								</section>

        								<section style="margin-top: 30px;">
        									<header class="major">
        										<h2 style="padding: 0; margin-bottom: 0.5em; color: black;">Tujuan</h2>
        									</header>
        									<p align="justify">
        										Peningkatan kualitas dalam pengelolaan administrasi akademik perlu terus menerus dilakukan dengan tujuan agar mampu memenuhi tuntutan perubahan ke depan ITS untuk dapat mengelola organisasi secara berkualitas, akuntabel, dan berdaya saing;
        											tercapainya SDM yang berdedikasi tinggi;
        											terbentuknya kinerja yang produktif, relevan, dan efisien;
        											terselenggaranya pelayanan yang mampu memberikan kepuasan dan kenyamanan <i>stakeholder</i>;
        											mengembangkan layanan dengan menggunakan teknologi sistem informasi manajemen sehingga tercipta informasi layanan yang terakses setiap saat, lengkap, dan terbuka.
        									</p>
        								</section>
									    </div>
        						</div>
        					</div>
        				</div>
        			</div>

              <div class="col-lg-4">
        				<div class="right_sidebar">
        					<aside class="r_widgets add_widgets">

                    <img src="{{ asset('force/img/its2.jpg') }}" alt="" class="about">
                    <img src="{{ asset('force/img/its3.jpg') }}" alt="" class="about">

        					</aside>
        				</div>
        			</div>

        		</div>
        	</div>
        </section>
        <!--================ start footer Area  =================-->
        <footer class="footer-area">
            <div class="container">
                <div class="row f_widgets_inner">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget ab_widgets">
                           <h2 style="color: white; padding:0;">BAPKM ITS</h2>
                           <hr style="border: 1.5px solid #F4BA23; width: 40%;">
                           <p style="color: #f4f4f4;">Biro Administrasi Pembelajaran dan Kesejahteraan Mahasiswa</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="f_title">
                            	<h3>Kontak Kami</h3>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                  <ul class="contact">
                                    <li><i class="ficon fa fa-envelope-o"></i><a href="mailto:baakcare@its.ac.id" class="mail">baakcare@its.ac.id</a></li>
                                    <li><i class="ficon fa fa-phone"></i>(031) 5923619</li>
                                    <li><i class="ficon fa fa-home"></i>Jalan Raya ITS, Kampus ITS Sukolilo, Surabaya 60117</li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                   	<!-- <div class="col-lg-12">
                   		<div class="f_boder"></div>
                   	</div> -->
                    <p class="col-lg-8 col-md-8 footer-text m-0" style="color: #dddddd;" align="center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true" style="color: #F4BA23;"></i> by <a href="https://colorlib.com" target="_blank" style="color: #F4BA23;">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('force/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('force/js/popper.js') }}"></script>
        <script src="{{ asset('force/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('force/js/stellar.js') }}"></script>
        <script src="{{ asset('force/vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ asset('force/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('force/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('force/vendors/isotope/isotope-min.js') }}"></script>
        <script src="{{ asset('force/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('force/vendors/jquery-ui/jquery-ui.js') }}"></script>
        <script src="{{ asset('force/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('force/js/mail-script.js') }}"></script>
        <script src="{{ asset('force/js/theme.js') }}"></script>
        <script src="{{ asset('force/js/jquery/jquery-2.2.4.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('force/js/bootstrap/popper.min.js') }}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('force/js/bootstrap/bootstrap.min.js') }}"></script>
        <!-- All Plugins js -->
        <script src="{{ asset('force/js/plugins/plugins.js') }}"></script>
        <!-- Active js -->
        <script src="{{ asset('force/js/active.js') }}"></script>
        <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
        <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
        <script>
        $('.ui.dropdown')
.dropdown();
        </script>
    </body>
</html>
