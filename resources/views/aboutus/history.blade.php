@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>
@stop @extends('layouts.app') @section('content')

<div class="ui container">

    <!-- <div class="ui large breadcrumb">
        <a class="section">Home</a>
        <i class="right chevron icon divider"></i>
        <a class="section">Tentang Kami</a>
        <i class="right chevron icon divider"></i>
        <div class="active section">Sejarah</div>
    </div> -->

    <div class="pusher">
        <div class="ui vertical stripe segment">
            <h1></h1>
            <div class="ui middle aligned stackable grid container">

                <div class="row">
                    <div class="six wide column">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 mb-4">
                                <a><img class="img-fluid z-depth-1" src="{{url('Uploaded/logo large.png')}}" alt="video" data-toggle="modal" data-target="#modal5"></a>
                            </div>
                        </div>

                        <!-- <div class="row">

                        </div> -->
                    </div>
                    <div class="ten wide right floated column">
                        <h2><i>mari mengenal lebih dekat dengan BAPKM </i></h2>
                        <h2 class="ui header">Tahukah Kamu Apa Itu <strong>BAPKM</strong> ?</h3>
                        <p style="font-size: 20px;">BAPKM merupakan Badan Institusi <strong> ITS</strong> yang bergerak pada bidang Administrasi Pembelajaran (AP) dan Kesejahteraan Mahasiswa (Kesma). </p>

                        <h2 class="ui header">Apakah Nama BAPKM Sudah Digunakan Sejak Lama ?</h3>
                        <p style="font-size: 20px;">Yapp, Nama BAPKM sendiri belum lama digunakan tepatnya selama 6 periode BAPKM yang kita kenal saat ini telah mengalami perubahan nama. </p>

                    </div>
                </div>
                <!-- <div class="row">
                  <div class="center aligned column">
                    <a class="ui huge button">Check Them Out</a>
                  </div>
                </div> -->
            </div>
        </div>
    </div>

    <div class="row timeline text-center">
        <div class="col-md-12">
            <div class="page-header">
                <h1>PERUBAHAN NAMA BAPKM DARI MASA KE MASA</h1>
            </div>
            <div style="display:inline-block;width:100%;overflow-y:auto;">

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline5">

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">I</span></div>
                            <div class="timeline-content">
                                <h3 class="title">BAAK</h3>
                                <p class="description subtitle"><strong>Biro Administrasi Akademik dan Kemahasiswaan</strong></p>
                                <p class="description">Pimpinan:</p>
                                <p class="description">
                                    Ir. Sulastri D. S. <i class="fa fa-arrow-right"></i> Dra. Subaidah <i class="fa fa-arrow-right"></i> Drs. Lukman Sulaiman
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">II</span></div>
                            <div class="timeline-content">
                                <h3 class="title">BAAKPSI</h3>
                                <p class="description subtitle"><strong>Biro Administrasi, Akademik, Perencanaan dan Sistem Informasi </strong></p>
                                <p class="description">Pimpinan:</p>
                                <p class="description">
                                    Drs. R. Hari Santoso
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">III</span></div>
                            <div class="timeline-content">
                                <h3 class="title">BAAK</h3>
                                <p class="description subtitle"><strong>Biro Administrasi Akademik dan Kemahasiswaan</strong></p>
                                <p class="description">Pimpinan:</p>
                                <p class="description">
                                    Drs. R. Hari Santoso <i class="fa fa-arrow-right"></i> Drs. Mukayat
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">IV</span></div>
                            <div class="timeline-content">
                                <h3 class="title" style="margin-bottom: 5px;">Badan Akademik</h3>
                                <p class="description">Pimpinan:</p>
                                <p class="description">
                                    Dr. Ismaini Zain, M.Si.
                                </p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">V</span></div>
                            <div class="timeline-content">
                                <h3 class="title">BAKP</h3>
                                <p class="description subtitle"><strong>Biro Administrasi Kemahasiswaan dan Pembelajaran</strong></p>
                                <p class="description">Pimpinan:</p>
                                <p class="description">
                                    Drs. Tri Budi Utama, M.S.M.
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">VI</span></div>
                            <div class="timeline-content">
                                <h3 class="title">BAPKM</h3>
                                <p class="description subtitle"><strong>Biro Administrasi Pembelajaran dan Kesejahteraan Mahasiswa</strong></p>
                                <p class="description">Pimpinan:</p>
                                <p class="description">
                                    Drs. Mukayat <i class="fa fa-arrow-right"></i> Ir. Agus Gunaryo
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui vertical stripe segment">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">    </div>
                <div style="display:inline-block;width:100%;overflow-y:auto;">
                </div>
            </div>
            <div class="col-lg-8 col-md-10 mb-4">
                <a><img class="img-fluid z-depth-1" src="{{ url('Uploaded/Aboutus/gal0.jpg') }}" alt="video" data-toggle="modal" data-target="#modal5"></a>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col"><img class="img-fluid z-depth-1" src="{{ url('Uploaded/Aboutus/gal1.jpg') }}" alt="video" data-toggle="modal" data-target="#modal1"></div>
                    <div class="w-100" style="margin:9px;"></div>
                    <div class="col"><img class="img-fluid z-depth-1" src="{{ url('Uploaded/Aboutus/gal2.jpg') }}" alt="video" data-toggle="modal" data-target="#modal1"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
