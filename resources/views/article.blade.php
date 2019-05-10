<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pengumuman | BAPKM ITS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('Editorial/assets/css/main.css') }}" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><h2 style="margin: 0;"><strong>Pengumuman</strong></h2></a>
								</header>
									<span class="image object">
										<img src="images/its.jpg" alt="" />
									</span>

                		<section style="padding-top: 1.25em;">
                					<div class="posts">
										@foreach($article as $article)
										<article>
											<a href="/article-page/{{$article->id}}" class="image"><img src="/files/{{ $article->fileImg}}" alt="" /></a>
											<h3>{{ $article->title}}</h3>
											<p>{{ $article->description}}</p>
											<ul class="actions">
												<li><a href="/article-page/{{$article->id}}" class="button">More</a></li>
											</ul>
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
