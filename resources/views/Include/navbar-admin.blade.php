

<div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
                <!-- <li class="nav-divider">
                    Dashboard
                </li> -->
                <li class="nav-item ">
                    <a class="nav-link active" href="/admin" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                    <!-- <div id="submenu-1" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                <div id="submenu-1-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html">E Commerce Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-product.html">Product List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                </li>
                <li class="nav-divider">
                    Master Data
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Artikel <span class="badge badge-secondary">New</span></a>
                    <div id="submenu-7" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.article.index') }}">Pengumuman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.event.index') }}">Agenda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.calendar.index') }}">Kalender</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.link.index') }}">QuickLinks</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-file "></i>Produk BAPKM</a>
                    <div id="submenu-9" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.sop.index')}}" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10">SOP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.service.index')}}" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Layanan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-divider">
                    Halaman
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-home"></i> Home </a>
                    <div id="submenu-6" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.home.carousel') }}">Carousel</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item" hidden>
                    <a class="nav-link" href="{{ route('admin.aboutus.history') }}" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-6"><i class="fas fa-fw fa-columns"></i> Tentang Kami </a>
                    <div id="submenu-8" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('admin.aboutus.history') }}" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"></i>Sejarah</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('admin.aboutus.organigram') }}" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10">Struktur Organisasi</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('admin.aboutus.profile') }}" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Profil</a>
                          </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/"><i class="fas fa-globe"></i></i> View website </a>
                </li>

            </ul>
        </div>
    </nav>
</div>

<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->
