<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Home | BAPKM ITS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('Editorial/assets/css/main.css') }}" />
		<link href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><h2 style="margin: 0;"><strong>BAPKM</strong> ITS</h2></a>
									<!-- <ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul> -->
								</header>

							<!-- Banner -->
							<!-- <div id="banner-img">
								<img src="{{ asset('Editorial/images/bapkm.jpg') }}">
							</div> -->
								<section id="banner">
									<div class="content">
										<header>
											<h1 style="color: white;">BAPKM ITS</h1>
											<p style="color: #c1c1c1;">BIRO ADMINISTRASI PEMBELAJARAN DAN KESEJAHTERAAN MAHASISWA</p>
										</header>
										<!-- <p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p> -->
										<ul class="actions">
											<li><a href="/about" class="button big" style="box-shadow: inset 0 0 0 2px #e5e5e5; color: #e5e5e5;">Berita</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/pic10.jpg" alt="" />
									</span>
								</section>

							<!-- Section -->
								<!-- <section>
									<header class="major">
										<h2>Erat lacinia</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-diamond"></span>
											<div class="content">
												<h3>Portitor ullamcorper</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-paper-plane"></span>
											<div class="content">
												<h3>Sapien veroeros</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-rocket"></span>
											<div class="content">
												<h3>Quam lorem ipsum</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-signal"></span>
											<div class="content">
												<h3>Sed magna finibus</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
									</div>
								</section> -->

							<!-- Section -->
								<section style="padding-top: 1.25em;">
									<header class="major">
										<h2 style="padding: 0; margin-bottom: 1em; color: black;">Berita</h2>
									</header>

									<div class="posts">
										@foreach($article as $article)
										<article>
											@if($article->status == 1 )
											<a href="/article-page/{{$article->id}}" class="image"><img src="/files/{{ $article->fileImg}}" alt="" /></a>
											<h3>{{ $article->title}}</h3>
											<p>{{ $article->description}}</p>
											<ul class="actions">
												<li><a href="/article-page/{{$article->id}}" class="button">More</a></li>
											</ul>
											@endif
										</article>
										@endforeach
									</div>
								</section>
						</div>
					</div>

					@include('include.sidebar')

				</div>

		<!-- Scripts -->
			<script src="{{ asset('Editorial/assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('Editorial/assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('Editorial/assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('Editorial/assets/js/util.js') }}"></script>
			<script src="{{ asset('Editorial/assets/js/main.js') }}"></script>
			<!--<script src="{{ asset('Editorial/assets/js/calendar.js') }}"></script>-->

	</body>
</html>
