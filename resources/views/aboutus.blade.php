@section('js')
    <script>
        $('.ui.dropdown')
            .dropdown();
    </script>
@stop @extends('layouts.app') @section('content')

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
        @endsection
