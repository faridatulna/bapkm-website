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
                    <h2 style="margin: 0;"><strong>{{ $article->title}}</strong></h2>
                </header>

                <section style="padding-top: 1.25em;">
                    <article>
                            <span class="image object">
      							                 <img src="/files/{{ $article->fileImg}}" alt="" />
      						          </span>
                        <p>{{ $article->description}}</p>
                    </article>
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
