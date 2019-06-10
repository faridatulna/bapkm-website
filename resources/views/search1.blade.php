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
							    <h2>Hasil Pencarian</h2>
						    </div>
        				<div class="latest_news">
        					<div class="media">
        						<!-- <div class="d-flex">
        							<img class="img-fluid" src="{{ asset('force/img/blog/l-news/l-news-1.jpg') }}" alt="">
        						</div> -->
        						<div class="media-body">
        							<div class="choice_text">
    										<div class="date">
    											<a class="gad_btn date-info" href="#">BEASISWA</a>
    											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
    										</div>
    										<a href="news-details.html"><h4>DFacts Why Inkjet Printing Is Very Appealing Compared To Ordinary Printing</h4></a>
    										<p>Having a baby can be a nerve wracking experience for new parents not the nine months of pregnancy, I’m talking about</p>
									    </div>
        						</div>
        					</div>
        					<div class="media">
        						<!-- <div class="d-flex">
        							<img class="img-fluid" src="{{ asset('force/img/blog/l-news/l-news-2.jpg') }}" alt="">
        						</div> -->
        						<div class="media-body">
        							<div class="choice_text">
										    <div class="date">
											    <a class="gad_btn" href="#">UMUM</a>
											    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
										    </div>
										    <a href="news-details.html"><h4>DFacts Why Inkjet Printing Is Very Appealing Compared To Ordinary Printing</h4></a>
										    <p>Having a baby can be a nerve wracking experience for new parents not the nine months of pregnancy, I’m talking about</p>
									    </div>
        						</div>
        					</div>
        				</div>

        			</div>
        			<div class="col-lg-4">
        				<div class="right_sidebar">

        					<aside class="r_widgets add_widgets">
                    <div class="main_title2">
        							<h2>Agenda</h2>
        						</div>
                    <div  class="content_calendar ">
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

                    <div class="main_title2">

        						</div>

        					</aside>


        					<!-- <aside class="r_widgets">
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
                  </aside> -->
        					<!-- </aside>
        					<aside class="r_widgets newsleter_widgets">
        						<div class="main_title2">
        							<h2>Newsletter</h2>
        						</div>
        						<div class="nsl_inner">
        							<i class="fa fa-envelope"></i>
        							<h4>Subscribe to our Newsletter</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua adipisicing</p>
									<div class="form-group d-flex flex-row">
										<div class="input-group">
											<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
										</div>
										<a href="#" class="bbtns">Subcribe</a>
									</div>
        						</div>
        					</aside> -->
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