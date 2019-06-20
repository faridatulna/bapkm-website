@section('js')
    <script>
        $('.ui.dropdown')
            .dropdown();
    </script>

@stop @extends('layouts.app') @section('content')
    <!--================Header Menu Area =================-->

<div class="ui container ">
  <div class="col-md-12">
      <div class="page-header">
          <h1>SOP Registrasi dan Data</h1>
      </div>
      <div style="display:inline-block;width:100%;overflow-y:auto;">

      </div>
  </div>

    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'beasiswa')" id="defaultOpen">Layanan Surat Mahasiswa</button>
    </div>

    <div id="beasiswa" class="tabcontent">
      <h3 class="ui header">Panduan Penggunaan Layanan Surat Mahasiswa</h3>
      <p>Klik <a href="{{ asset('files/Regdat/REGDAT.pdf')}}">di sini</a> untuk detil panduan.</p>
    </div>

</div>


    @endsection
