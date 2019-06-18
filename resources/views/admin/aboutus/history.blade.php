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
            <h1>Mengenal Lebih Dekat Dengan BAPKM </h1>
            <div class="ui middle aligned stackable grid container">

                <div class="row">
                    <div class="six wide column">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 mb-4">
                                <a><img class="img-fluid z-depth-1" src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Logo-Free.jpg" alt="video" data-toggle="modal" data-target="#modal5"></a>
                            </div>
                        </div>

                        <!-- <div class="row">

                        </div> -->
                    </div>
                    <div class="ten wide right floated column">
                        <h3 class="ui header">We Help Companies and Companions</h3>
                        <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
                        <h3 class="ui header">We Make Bananas That Can Dance</h3>
                        <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>

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
                            <div class="timeline-icon"><span class="year">2017</span></div>
                            <div class="timeline-content">
                                <h3 class="title">BAKPM</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices, luctus nunc ut, commodo enim. Vivamus sem erat.
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2010</span></div>
                            <div class="timeline-content">
                                <h3 class="title">BAKP</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices, luctus nunc ut, commodo enim. Vivamus sem erat.
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2002</span></div>
                            <div class="timeline-content">
                                <h3 class="title">BADAN AKADEMIK</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices, luctus nunc ut, commodo enim. Vivamus sem erat.
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">2000</span></div>
                            <div class="timeline-content">
                                <h3 class="title">BAAK</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices, luctus nunc ut, commodo enim. Vivamus sem erat.
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">1998</span></div>
                            <div class="timeline-content">
                                <h3 class="title">BAAKPSI</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices, luctus nunc ut, commodo enim. Vivamus sem erat.
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <div class="timeline-icon"><span class="year">1990</span></div>
                            <div class="timeline-content">
                                <h3 class="title">BAAK</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices, luctus nunc ut, commodo enim. Vivamus sem erat.
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
                <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-5.jpg" alt="video" data-toggle="modal" data-target="#modal5"></a>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col"><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video" data-toggle="modal" data-target="#modal1"></div>
                    <div class="w-100" style="margin:9px;"></div>
                    <div class="col"><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video" data-toggle="modal" data-target="#modal1"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection