<!-- Top Header Area -->
<div class="top-header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-header-content d-flex align-items-center justify-content-between">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="/"><img src="{{ asset('force/img/core-img/logo-KREATIF.png') }}" style="max-width:20vw;" alt="" ></a>
                    </div>

                    <!-- Login Search Area -->
                    <div class="login-search-area d-flex align-items-center">
                        <div class="search-form">
                            <form action="/search-result" method="post" role="search">
                                {{ csrf_field() }}
                                <input type="text" name="q" class="form-control" placeholder="Search">
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
    <div class="classy-nav-container">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="newspaperNav">

                <!-- Logo -->
                <div class="logo">
                    <a href="/"><img class="logo-navbar2" src="{{ asset('force/img/core-img/logo-KREATIF.png') }}" alt="" ></a>
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
                            <li class="nav-link2"><a href="/"><strong>Home</strong></a></li>
                            <li class="nav-link2"><a href="#"><strong>Tentang Kami</strong> </a>
                              <ul class="dropdown" style="margin-top:5px;">
                                <li><a href="{{ route('aboutus.history') }}">Sejarah</a></li>
                                <li><a href="{{ route('aboutus.organigram') }}">Struktur Organisasi</a></li>
                                <li><a href="{{ route('aboutus.profile') }}">Profil</a></li>
                              </ul>
                            </li>
                            <li class="nav-link2"><a href="/article"><strong>Berita</strong></a>
                                <!-- <ul class="dropdown" style="margin-top:5px;">
                                    <li><a href="/article/umum">Umum</a></li>
                                </ul> -->
                            </li>
                            <li class="nav-link2"><a href="/help"><strong>Bantuan</strong></a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
        @foreach( $announce as $announce )
            @if( $cdatetime > $announce->dt_start && $cdatetime < $announce->dt_end )
            <marquee class="running-text" direction="left" scroll-amount="7" behavior="scroll">
                {{ $announce->message }}
            </marquee>
            @else
            @endif
        @endforeach
    </div>
</div>
