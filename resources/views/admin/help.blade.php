@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>
@stop @extends('layouts.app') @section('content')

<div class="col-12" style="margin: 20px 30%;">
    <div class="row">

        <a href="/regdat">
            <div class="helpcards ui cards" style="margin-right: 20px;">

                <div class="card" style="border-radius: 20px;">
                    <div class="content">
                        <div class="header" align="center">

                            Registrasi dan Data</div>
                        <br>
                        <img src="{{ asset('force/img/core-img/test.png') }}" width="50%" style="margin-left:60px;">
                    </div>
                    <a href="#">
                    </a>
                </div>
            </div>
        </a>

        <div class="helpcards ui cards" style="margin-top: 0 !important">

            <div class="card" style="border-radius: 20px;">
                <div class="content">
                    <div class="header" align="center">Pengelolaan Beasiswa</div>
                    <br>
                    <img src="{{ asset('force/img/core-img/book.png') }}" width="50%" style="margin-left:60px;">
                </div>
                <a href="#">
                </a>
            </div>

        </div>
    </div>

    <div class="row" style="margin-top: 20px;">
        <div class="helpcards ui cards" style="margin-right: 20px;">

            <div class="card" style="border-radius: 20px;">
                <div class="content">
                    <div class="header" align="center">Pemantauan dan Evaluasi Pembelajaran</div>
                    <br>
                    <img src="{{ asset('force/img/core-img/exam.png') }}" width="50%" style="margin-left:60px;">
                </div>
                <a href="#">
                </a>
            </div>
        </div>

        <div class="helpcards ui cards">

            <div class="card" style="border-radius: 20px;">
                <div class="content">
                    <div class="header" align="center">Pengelolaan Data Kegiatan Mahasiswa</div>
                    <br>
                    <img src="{{ asset('force/img/core-img/cultural.png') }}" width="50%" style="margin-left:60px;">
                </div>
                <a href="#">
                </a>
            </div>

        </div>

    </div>
</div>

@endsection