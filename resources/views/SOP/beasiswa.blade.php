@section('js')
    <script>
        $('.ui.dropdown')
            .dropdown();
    </script>

@stop @extends('layouts.app') @section('content')
    <!--================Header Menu Area =================-->

<div class="ui container ">
  <div class="col-md-12">
    <div class="content active" style="margin: 20px 0;">
        <div class="ui labels">
            <!-- /*label*/ -->
            <a class="ui yellow small label" href="/help/regdat">Registrasi dan Data</a>
            <a class="ui orange small label" href="/help/beasiswa">Beasiswa</a>
            <a class="ui yellow small label" href="/help/pep">Pemantauan dan Evaluasi Pembelajaran</a>
            <a class="ui yellow small label" href="/help/datkeg">Data dan Kegiatan Bahasiswa</a>
        </div>
    </div>
      <div class="page-header">
          <h1>SOP Pengelolaan Beasiswa</h1>
      </div>
      <div style="display:inline-block;width:100%;overflow-y:auto;">

      </div>
  </div>

    <div class="tab">
      @foreach($sop as $data)
      <button class="tablinks" onclick="openCity(event, '{{$data->id}}')" id="defaultOpen">{{$data->title}}</button>
      @endforeach
      <!-- <button class="tablinks" onclick="openCity(event, 'beasiswa')" id="defaultOpen">Pengajuan Beasiswa</button> -->
    </div>
    @foreach($sop as $data)
    <div id="{{$data->id}}" class="tabcontent">
      <h3 class="ui header">Panduan {{$data->title}}</h3>

      @if($data->fileImg)
      <div class="container mt-4">
        <div class="row">

          <div class="col-md-12">
            <a data-target="#modalIMG{{$data->id}}" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
              <div class="ba-0 tp-s">
                <img class="card-img-top"  style="width:100%;" src="{{ url('Uploaded/Beasiswa/',$data->fileImg) }}" >
              </div>
            </a>
          </div>

        </div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG{{$data->id}}" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
          <div class="modal-content">
            <div class="modal-body mb-0 p-0">
              <img alt="" style="min-width:70vw" align="center" src="{{ url('Uploaded/Beasiswa/',$data->fileImg) }}" >
            </div>
          </div>
        </div>
      </div>

      <p>Klik gambar untuk memperbesar.</p>
      @elseif($data->filePdf)
      <p>Klik <a href="{{ url('Uploaded/Beasiswa/',$data->filePdf) }}">di sini</a> untuk detil panduan.</p>
      @else
      @endif

      @if($data->description)
      <p>
        {!!$data->description!!}
      </p>
      @else
      @endif
    </div>
    @endforeach
    <!-- <div id="beasiswa" class="tabcontent">
      <h3 class="ui header">Panduan Pengajuan Beasiswa</h3>
      <p>Berikut adalah prosedur dan dokumen-dokumen yang dibutuhkan untuk mengajukan beasiswa.</p>

      <div class="container mt-4">
      	<div class="row">

      		<div class="col-md-12">
      			<a data-target="#modalIMG" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
      				<div class="ba-0 tp-s">
      					<img class="card-img-top" src="{{ asset('Uploaded/Beasiswa/BEASISWA1.jpg')}}" style="width:100%;">
      				</div>
      			</a>
      		</div>

      	</div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
      	<div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
      		<div class="modal-content">
      			<div class="modal-body mb-0 p-0">
      				<img src="{{ asset('Uploaded/Beasiswa/BEASISWA1.jpg')}}" alt="" style="min-width:70vw" align="center">
      			</div>
      		</div>
      	</div>
      </div>

      <p>Klik gambar untuk memperbesar.</p>

      <p>
        <ul>
          <li>*Persyaratan biasanya terdiri dari:</li>
          <li>1. Formulir pendaftaran</li>
          <li>2. <i>Curriculum vitae</i> (daftar riwayat hidup) terbaru</li>
          <li>3. Pas foto berwarna ukuran 4x6</li>
          <li>4. Transkrip nilai</li>
          <li>5. Surat keterangan gaji orang tua</li>
          <li>6. Surat keterangan tidak mampu (opsional)</li>
          <li>7. Surat rekomendasi</li>
          <li>8. TOEFL</li>
          <li>9. Surat pernyataan</li>
          <li>10. <i>Copy cover</i> buku tabungan</li>
        </ul>
      </p>
    </div> -->

</div>


@endsection
