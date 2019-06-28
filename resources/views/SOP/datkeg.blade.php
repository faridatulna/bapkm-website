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
            <a class="ui yellow small label" href="/help/beasiswa">Beasiswa</a>
            <a class="ui yellow small label" href="/help/pep">Pemantauan dan Evaluasi Pembelajaran</a>
            <a class="ui orange small label" href="/help/datkeg">Data dan Kegiatan Bahasiswa</a>
        </div>
    </div>
      <div class="page-header">
          <h1>SOP Pengelolaan Data dan Kegiatan Mahasiswa</h1>
      </div>
      <div style="display:inline-block;width:100%;overflow-y:auto;">

      </div>
  </div>

    <div class="tab">
      @foreach($sop as $data)
      <button class="tablinks" onclick="openCity(event, '{{$data->id}}')" id="defaultOpen">{{$data->title}}</button>
      @endforeach
      <!-- <button class="tablinks" onclick="openCity(event, 'UKM')" id="defaultOpen">Layanan Proposal Kegiatan UKM</button>
      <button class="tablinks" onclick="openCity(event, 'FD')">Layanan Proposal Kegiatan Organisasi Mahasiswa (Fakultas dan Departemen)</button>
      <button class="tablinks" onclick="openCity(event, 'BEMHima')">Layanan Proposal Organisasi Mahasiswa (BEM dan Himadep)</button>
      <button class="tablinks" onclick="openCity(event, 'Sponsor')">Layanan Dana Sponsor bagi Delegasi/Tim/Mahasiswa</button>
      <button class="tablinks" onclick="openCity(event, 'LPJSPJ')">Layanan Pengesahan LPJ dan SPJ</button> -->
    </div>

    @foreach($sop as $data)
    <div id="{{$data->id}}" class="tabcontent">
      <h3 class="ui header">Panduan Penggunaan {{$data->title}}</h3>

      @if($data->fileImg)
      <div class="container mt-4">
        <div class="row">

          <div class="col-md-12">
            <a data-target="#modalIMG{{$data->id}}" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
              <div class="ba-0 tp-s">
                <img class="card-img-top"  style="width:100%;" src="{{ url('Uploaded/SOP/',$data->fileImg) }}" >
              </div>
            </a>
          </div>

        </div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG{{$data->id}}" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
          <div class="modal-content">
            <div class="modal-body mb-0 p-0">
              <img alt="" style="min-width:70vw" align="center" src="{{ url('Uploaded/SOP/',$data->fileImg) }}" >
            </div>
          </div>
        </div>
      </div>

      <p>Klik gambar untuk memperbesar.</p>
      @elseif($data->filePdf)
      <p>Klik <a href="{{ url('Uploaded/SOP/',$data->filePdf) }}">di sini</a> untuk detil panduan.</p>
      @else
      @endif

      @if($data->description)
      <p>
        <h3>Dokumen-Dokumen yang Diperlukan</h3>
        {!!$data->description!!}
      </p>
      @else
      @endif
    </div>
    @endforeach

    <!-- <div id="UKM" class="tabcontent">
      <h3 class="ui header">Panduan Penggunaan Layanan Proposal Kegiatan Unit Kegiatan Mahasiswa (UKM)</h3>
      <p>Berikut adalah prosedur dan dokumen-dokumen yang dibutuhkan untuk mengajukan proposal kegiatan UKM.</p>

      <div class="container mt-4">
      	<div class="row">

      		<div class="col-md-12">
      			<a data-target="#modalIMG" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
      				<div class="ba-0 tp-s">
      					<img class="card-img-top" src="{{ asset('Uploaded/SOP/DATA123.jpg')}}" style="width:100%;">
      				</div>
      			</a>
      		</div>

      	</div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
      	<div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
      		<div class="modal-content">
      			<div class="modal-body mb-0 p-0">
      				<img src="{{ asset('Uploaded/SOP/DATA123.jpg')}}" alt="" style="min-width:70vw" align="center">
      			</div>
      		</div>
      	</div>
      </div>

      <p>Klik gambar untuk memperbesar.</p>

      <p>
        <h3>Dokumen-Dokumen yang Diperlukan</h3>
        <ul>
          <h4>1. Proposal</h4>
          <li>1.1 Proposal UKM: ditandatangani oleh penanggung jawab kegiatan, ketua UKM, dan Pembina UKM.</li>
          <li>1.2 Proposal ormawa: ditandatangani oleh penanggung jawab kegiatan, ketua himpunan mahasiswa departemen,</li>
          <li style="margin-left: 21px;">dan ketua departemen.</li>
          <h4>2. Surat-Surat</h4>
          <li>2.1 Surat permohonan rekomendasi kegiatan.</li>
          <li>2.2 Surat permohonan Dana BPPTN-Badan Hukum atau NON-PNBP.</li>
          <li>2.3 Point 2.1 & 2.2 ditujukan kepada Wakil Rektor Bidang Akademik dan Kemahasiswaan dan ditandatangani oleh:</li>
          <li style="margin-left: 21px;">a. UKM: penanggung jawab kegiatan, ketua UKM, dan pembina UKM dengan stempel basah.</li>
          <li style="margin-left: 21px;">b. Ormawa: penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, dan ketua departemen dengan stempel basah.</li>
          <li>2.4 Surat permohonan dana IKOMA, ditujukan kepada Ketua IKOMA yang ditandatangani oleh penanggungjawab</li>
          <li style="margin-left: 21px;">kegiatan, ketua UKM atau himpunan mahasiswa departemen, pembina UKM atau ketua departemen, serta Wakil Rektor I dengan stempel basah.</li>
        </ul>
      </p>
    </div>

    <div id="FD" class="tabcontent">
      <h3 class="ui header">Panduan Penggunaan Layanan Proposal Kegiatan Organisasi Mahasiswa (Fakultas dan Departemen)</h3>
      <p>Berikut adalah prosedur dan dokumen-dokumen yang dibutuhkan untuk mengajukan proposal kegiatan organisasi mahasiswa (Fakultas dan Departemen).</p>

      <div class="container mt-4">
      	<div class="row">

      		<div class="col-md-12">
      			<a data-target="#modalIMG2" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
      				<div class="ba-0 tp-s">
      					<img class="card-img-top" src="{{ asset('Uploaded/SOP/DATA123.jpg')}}" style="width:100%;">
      				</div>
      			</a>
      		</div>

      	</div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG2" role="dialog" tabindex="-1">
      	<div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
      		<div class="modal-content">
      			<div class="modal-body mb-0 p-0">
      				<img src="{{ asset('Uploaded/SOP/DATA123.jpg')}}" alt="" style="min-width:70vw" align="center">
      			</div>
      		</div>
      	</div>
      </div>

      <p>Klik gambar untuk memperbesar.</p>

      <p>
        <h3>Dokumen-Dokumen yang Diperlukan</h3>
        <ul>
          <h4>1. Proposal</h4>
          <li>Proposal ditandatangani oleh penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, dan ketua departemen.</li>
          <h4>2. Surat-Surat</h4>
          <li>2.1 Surat permohonan rekomendasi kegiatan.</li>
          <li>2.2 Surat permohonan Dana BPPTN-Badan Hukum atau NON-PNBP.</li>
          <li>2.3 Point 2.1 & 2.2 ditujukan kepada Wakil Rektor Bidang Akademik dan Kemahasiswaan dan ditandatangani oleh</li>
          <li style="margin-left: 21px;">penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, dan ketua departemen dengan stempel basah.</li>
          <li>2.4 Surat permohonan dana IKOMA, ditujukan kepada Ketua IKOMA yang ditandatangani oleh penanggung jawab</li>
          <li style="margin-left: 21px;">kegiatan, ketua himpunan mahasiswa departemen, ketua departemen, serta Wakil Rektor I dengan stempel basah.</li>
        </ul>
      </p>
    </div>

    <div id="BEMHima" class="tabcontent">
      <h3 class="ui header">Panduan Penggunaan Layanan Proposal Organisasi Mahasiswa (BEM dan Himadep)</h3>
      <p>Berikut adalah prosedur dan dokumen-dokumen yang dibutuhkan untuk mengajukan proposal organisasi mahasiswa (BEM dan Himadep).</p>

      <div class="container mt-4">
      	<div class="row">

      		<div class="col-md-12">
      			<a data-target="#modalIMG3" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
      				<div class="ba-0 tp-s">
      					<img class="card-img-top" src="{{ asset('Uploaded/SOP/DATA123.jpg')}}" style="width:100%;">
      				</div>
      			</a>
      		</div>

      	</div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG3" role="dialog" tabindex="-1">
      	<div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
      		<div class="modal-content">
      			<div class="modal-body mb-0 p-0">
      				<img src="{{ asset('Uploaded/SOP/DATA123.jpg')}}" alt="" style="min-width:70vw" align="center">
      			</div>
      		</div>
      	</div>
      </div>

      <p>Klik gambar untuk memperbesar.</p>

      <p>
        <h3>Dokumen-Dokumen yang Diperlukan</h3>
        <ul>
          <h4>1. Proposal</h4>
          <h4>2. Surat-Surat</h4>
          <li>2.1 Surat permohonan rekomendasi kegiatan.</li>
          <li>2.2 Surat permohonan Dana DIPA/BPPTN-Badan Hukum atau NON-PNBP.</li>
          <li>2.3 Point 2.1 & 2.2 ditujukan kepada Wakil Rektor Bidang Akademik dan Kemahasiswaan dan ditandatangani oleh</li>
          <li style="margin-left: 21px;">penanggung jawab kegiatan, ketua himpunan mahasiswa departemen, ketua departemen, dan dekan fakultas dengan stempel basah.</li>
          <li>2.4 Surat permohonan dana IKOMA, ditujukan kepada Ketua IKOMA yang ditandatangani oleh penanggung jawab</li>
          <li style="margin-left: 21px;">kegiatan, ketua himpunan mahasiswa departemen, ketua departemen, serta Wakil Rektor I dengan stempel basah.</li>
        </ul>
      </p>
    </div>

    <div id="Sponsor" class="tabcontent">
      <h3 class="ui header">Panduan Penggunaan Layanan Dana Sponsor bagi Delegasi/Tim/Mahasiswa</h3>
      <p>Berikut adalah prosedur dan dokumen-dokumen yang dibutuhkan untuk mengajukan sponsor bagi delegasi/tim/mahasiswa.</p>

      <div class="container mt-4">
      	<div class="row">

      		<div class="col-md-12">
      			<a data-target="#modalIMG4" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
      				<div class="ba-0 tp-s">
      					<img class="card-img-top" src="{{ asset('Uploaded/SOP/DATA4.jpg')}}" style="width:100%;">
      				</div>
      			</a>
      		</div>

      	</div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG4" role="dialog" tabindex="-1">
      	<div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
      		<div class="modal-content">
      			<div class="modal-body mb-0 p-0">
      				<img src="{{ asset('Uploaded/SOP/DATA4.jpg')}}" alt="" style="min-width:70vw" align="center">
      			</div>
      		</div>
      	</div>
      </div>

      <p>Klik gambar untuk memperbesar.</p>

      <p>
        <h3>Dokumen-Dokumen yang Diperlukan</h3>
        <ul>
          <li>1. Bukti transfer dari sponsor.</li>
          <li>2. RBA penggunaan dana sponsor.</li>
          <li>3. Kuitansi bukti penggunaan dana.</li>
          <li>4. Fotokopi paspor.</li>
          <li>5. Bukti tiket dan boarding pass.</li>
          <li>6. Surat tugas dan surat rekomendasi kegiatan dari Wakil Rektor I.</li>
          <li>7. Surat-surat yang terkait dengan pengajuan surat tugas dan surat rekomendasi kegiatan.</li>
        </ul>
      </p>
    </div>

    <div id="LPJSPJ" class="tabcontent">
      <h3 class="ui header">Panduan Penggunaan Layanan Pengesahan Laporan Pertanggungjawaban (LPJ) dan Surat Pertanggungjawaban (SPJ)</h3>
      <p>Berikut adalah prosedur dan dokumen-dokumen yang dibutuhkan untuk mengesahkan LPJ dan SPJ.</p>

      <div class="container mt-4">
      	<div class="row">

      		<div class="col-md-12">
      			<a data-target="#modalIMG5" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
      				<div class="ba-0 tp-s">
      					<img class="card-img-top" src="{{ asset('Uploaded/SOP/DATA5.jpg')}}" style="width:100%;">
      				</div>
      			</a>
      		</div>

      	</div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG5" role="dialog" tabindex="-1">
      	<div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
      		<div class="modal-content">
      			<div class="modal-body mb-0 p-0">
      				<img src="{{ asset('Uploaded/SOP/DATA5.jpg')}}" alt="" style="min-width:70vw" align="center">
      			</div>
      		</div>
      	</div>
      </div>

      <p>Klik gambar untuk memperbesar.</p>

      <p>
        <h3>Dokumen-Dokumen yang Diperlukan</h3>
        <ul>
          <li>1. Proposal LPJ.</li>
          <li>2. Kuitansi SPJ.</li>
        </ul>
      </p>
    </div> -->

</div>


    @endsection
