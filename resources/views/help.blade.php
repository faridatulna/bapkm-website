@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>
@stop @extends('layouts.app') @section('content')


<div class="container">

    <div class="row">
        <div class="column">
          <div class="card" hidden=""></div>
        </div>
        <div class="column">
          <a href="/help/regdat">
            <div class="helpcards ui cards">
              <div class="card" style="border-radius: 20px;">
                <div class="content">
                  <div class="header" align="center">Registrasi dan Data</div>
                  <br>
                  <img src="{{ asset('force/img/core-img/test.png') }}" width="50%" style="margin-left:60px;">
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="column">
          <a href="/help/beasiswa">
            <div class="helpcards ui cards">
              <div class="card" style="border-radius: 20px;">
                <div class="content">
                  <div class="header" align="center">Pengelolaan Beasiswa</div>
                  <br>
                  <img src="{{ asset('force/img/core-img/book.png') }}" width="50%" style="margin-left:60px;">
                </div>

              </div>

            </div>
          </a>
        </div>
        <div class="column">
          <div class="card" hidden=""></div>
        </div>
    </div>
      
    <div class="row">
        <div class="column">
          <div class="card" hidden=""></div>
        </div>
        <div class="column">
          <a href="/help/pep">
            <div class="helpcards ui cards">
              <div class="card" style="border-radius: 20px;">
                <div class="content">
                  <div class="header" align="center">Pemantauan dan Evaluasi Pembelajaran</div>
                  <br>
                  <img src="{{ asset('force/img/core-img/exam.png') }}" width="50%" style="margin-left:60px;">
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="column">
          <a href="/help/datkeg">
            <div class="helpcards ui cards">
              <div class="card" style="border-radius: 20px;">
                <div class="content">
                  <div class="header" align="center">Pengelolaan Data Kegiatan Mahasiswa</div>
                  <br>
                  <img src="{{ asset('force/img/core-img/cultural.png') }}" width="50%" style="margin-left:60px;">
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="column">
          <div class="card" hidden=""></div>
        </div>
      </div>

</div>

@endsection
