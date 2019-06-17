@section('js')
    <script>
        $('.ui.dropdown')
            .dropdown();
    </script>
@stop @extends('layouts.app') @section('content')
    <!--================Header Menu Area =================-->

    <div class="pusher">
        <div class="ui vertical stripe segment">
            <h1 style="margin-left: 215px;">SOP Registrasi dan Data</h1>
            <div class="ui middle aligned stackable grid container">

                <div class="row" style="margin-left: 18px;">
                    <div class="col-12">
                        <h3 class="ui header">Panduan Penggunaan Layanan Surat Mahasiswa</h3>
                        <p>Klik <a href="/lsm">di sini</a> untuk detail.</p>

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

    <!--================Header Menu Area =================-->

    <!--================End News Area =================-->

    @endsection
