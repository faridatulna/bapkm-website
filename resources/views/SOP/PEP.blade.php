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
          <h1>SOP Pemantauan dan Evaluasi Pembelajaran</h1>
      </div>
      <div style="display:inline-block;width:100%;overflow-y:auto;">

      </div>
  </div>

    <div class="tab">
      @foreach($sop as $data)
      <button class="tablinks" onclick="openCity(event, '{{$data->id}}')" id="defaultOpen">{{$data->title}}</button>
      @endforeach
      <!-- <button class="tablinks" onclick="openCity(event, 'translate')" id="defaultOpen">Pembuatan Ijazah Bahasa Inggris</button>
      <button class="tablinks" onclick="openCity(event, 'transkrip')">Pencetakan Ulang Transkrip</button>
      <button class="tablinks" onclick="openCity(event, 'transkrip1')">Pencetakan Transkrip Mahasiswa Aktif</button>
      <button class="tablinks" onclick="openCity(event, 'ijazah')">Penggantian Ijazah yang Rusak, Hilang, atau Datanya Salah</button>
      <button class="tablinks" onclick="openCity(event, 'krsm')">Pencetakan KRSM</button> -->
    </div>

    @foreach($sop as $data)
    <div id="{{$data->id}}" class="tabcontent">
      <h3 class="ui header">{{$data->title}}</h3>
      <p>Berikut adalah prosedur dan dokumen-dokumen yang dibutuhkan untuk </p> <p> {{$data->title}}</p>

      @if($data->fileImg)
      <div class="container mt-4">
        <div class="row">

          <div class="col-md-12">
            <a data-target="#modalIMG" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
              <div class="ba-0 tp-s">
                <img class="card-img-top"  style="width:100%;" src="{{ url('Uploaded/PEP/',$data->fileImg) }}">
              </div>
            </a>
          </div>

        </div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
          <div class="modal-content">
            <div class="modal-body mb-0 p-0">
              <img alt="" style="min-width:70vw" align="center" src="{{ url('Uploaded/PEP/',$data->fileImg) }}" >
            </div>
          </div>
        </div>
      </div>

      <p>Klik gambar untuk memperbesar.</p>
      @elseif($data->filePdf)
      <p>Klik <a href="{{ url('Uploaded/PEP/',$data->filePdf) }}">di sini</a> untuk detil panduan.</p>
      @else
      @endif

      <p>
        <h3>Dokumen-Dokumen yang Diperlukan</h3>
        {!!$data->description!!}
      </p>
    </div>
    @endforeach

    <!-- div id="translate" class="tabcontent">
      <h3 class="ui header">Panduan Pembuatan Ijazah Bahasa Inggris</h3>
      <p>Berikut adalah prosedur dan dokumen-dokumen yang dibutuhkan untuk membuat ijazah bahasa Inggris.</p>

      <div class="container mt-4">
      	<div class="row">

      		<div class="col-md-12">
      			<a data-target="#modalIMG" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
      				<div class="ba-0 tp-s">
      					<img class="card-img-top" src="{{ asset('Uploaded/PEP/PEP1.jpg')}}" style="width:100%;">
      				</div>
      			</a>
      		</div>

      	</div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
      	<div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
      		<div class="modal-content">
      			<div class="modal-body mb-0 p-0">
      				<img src="{{ asset('Uploaded/PEP/PEP1.jpg')}}" alt="" style="min-width:70vw" align="center">
      			</div>
      		</div>
      	</div>
      </div>

      <p>Klik gambar untuk memperbesar.</p>

      <p>
        <h3>Dokumen-Dokumen yang Diperlukan</h3>
        <ul>
          <li><i>Hard copy</i> ijazah asli.</li>
        </ul>

        <h3>Biaya</h3>
        <ul>
          <h4>Program Sarjana (S1) dan Diploma (D3)</h4>
          <li>a. Lulusan baru: Rp. 15.000,00/1 lembar asli</li>
          <li>b. Lulusan 1-3 tahun: Rp. 20.000,00/1 lembar asli</li>
          <li>c. Lulusan 3-5 tahun: Rp. 30.000,00/1 lembar asli</li>
          <li>d. Lulusan > 5 tahun: Rp. 50.000,00/1 lembar asli</li>
          <h4>Program Magister (S2) dan Doktor (S3)</h4>
          <li>a. Lulusan baru: Rp. 20.000,00/1 lembar asli</li>
          <li>b. Lulusan 1-3 tahun: Rp. 25.000,00/1 lembar asli</li>
          <li>c. Lulusan 3-5 tahun: Rp. 35.000,00/1 lembar asli</li>
          <li>d. Lulusan > 5 tahun: Rp. 55.000,00/1 lembar asli</li>
        </ul>
      </p>
    </div>

    <div id="transkrip" class="tabcontent">
      <h3 class="ui header">Panduan Pencetakan Transkrip</h3>
      <p>Berikut adalah prosedur dan dokumen-dokumen yang dibutuhkan untuk mencetak ulang transkrip.</p>

      <h4>Untuk lulusan yang kehilangan transkrip:</h4>

      <div class="container mt-4">
      	<div class="row">

      		<div class="col-md-12">
      			<a data-target="#modalIMG2" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
      				<div class="ba-0 tp-s">
      					<img class="card-img-top" src="{{ asset('Uploaded/PEP/PEP2.jpg')}}" style="width:100%;">
      				</div>
      			</a>
      		</div>

      	</div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG2" role="dialog" tabindex="-1">
      	<div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
      		<div class="modal-content">
      			<div class="modal-body mb-0 p-0">
      				<img src="{{ asset('Uploaded/PEP/PEP2.jpg')}}" alt="" style="min-width:70vw" align="center">
      			</div>
      		</div>
      	</div>
      </div>

      <p>Klik gambar untuk memperbesar.</p>

      <h4>Untuk lulusan yang transkripnya rusak:</h4>

      <div class="container mt-4">
      	<div class="row">

      		<div class="col-md-12">
      			<a data-target="#modalIMG3" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
      				<div class="ba-0 tp-s">
      					<img class="card-img-top" src="{{ asset('Uploaded/PEP/PEP3.jpg')}}" style="width:100%;">
      				</div>
      			</a>
      		</div>

      	</div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG3" role="dialog" tabindex="-1">
      	<div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
      		<div class="modal-content">
      			<div class="modal-body mb-0 p-0">
      				<img src="{{ asset('Uploaded/PEP/PEP3.jpg')}}" alt="" style="min-width:70vw" align="center">
      			</div>
      		</div>
      	</div>
      </div>

      <p>Klik gambar untuk memperbesar.</p>

      <p>
        <h3>Dokumen-Dokumen yang Diperlukan</h3>
        <ul>
          <h4>Untuk lulusan yang kehilangan transkrip:</h4>
          <li>1. Surat kehilangan dari kepolisian.</li>
          <li>2. Bukti pendukung untuk keperluan apa transkrip dicetak ulang.</li>
          <h4>Untuk lulusan yang transkripnya rusak:</h4>
          <li>1. Bukti transkrip rusak.</li>
        </ul>
      </p>
    </div>

    <div id="transkrip1" class="tabcontent">
      <h3 class="ui header">Panduan Pencetakan Transkrip untuk Mahasiswa Aktif</h3>
      <p>Berikut adalah prosedur dan dokumen-dokumen yang dibutuhkan untuk mencetak transkrip bagi mahasiswa aktif.</p>

      <div class="container mt-4">
      	<div class="row">

      		<div class="col-md-12">
      			<a data-target="#modalIMG4" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
      				<div class="ba-0 tp-s">
      					<img class="card-img-top" src="{{ asset('Uploaded/PEP/PEP45.jpg')}}" style="width:100%;">
      				</div>
      			</a>
      		</div>

      	</div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG4" role="dialog" tabindex="-1">
      	<div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
      		<div class="modal-content">
      			<div class="modal-body mb-0 p-0">
      				<img src="{{ asset('Uploaded/PEP/PEP45.jpg')}}" alt="" style="min-width:70vw" align="center">
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

    <div id="ijazah" class="tabcontent">
      <h3 class="ui header">Panduan Penggantian Ijazah yang Hilang</h3>
      <p>Berikut adalah prosedur dan dokumen-dokumen yang dibutuhkan untuk mengganti ijazah yang hilang.</p>
      <h4>Untuk lulusan yang ijazahnya hilang atau rusak:</h4>

      <div class="container mt-4">
      	<div class="row">

      		<div class="col-md-12">
      			<a data-target="#modalIMG6" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
      				<div class="ba-0 tp-s">
      					<img class="card-img-top" src="{{ asset('Uploaded/PEP/PEP6.jpg')}}" style="width:100%;">
      				</div>
      			</a>
      		</div>

      	</div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG6" role="dialog" tabindex="-1">
      	<div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
      		<div class="modal-content">
      			<div class="modal-body mb-0 p-0">
      				<img src="{{ asset('Uploaded/PEP/PEP6.jpg')}}" alt="" style="min-width:70vw" align="center">
      			</div>
      		</div>
      	</div>
      </div>
      <br>
      <p>Klik gambar untuk memperbesar.</p>

      <h4>Untuk lulusan yang ijazahnya memiliki kesalahan data:</h4>

      <div class="container mt-4">
      	<div class="row">

      		<div class="col-md-12">
      			<a data-target="#modalIMG7" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
      				<div class="ba-0 tp-s">
      					<img class="card-img-top" src="{{ asset('Uploaded/PEP/PEP7.jpg')}}" style="width:100%;">
      				</div>
      			</a>
      		</div>

      	</div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG7" role="dialog" tabindex="-1">
      	<div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
      		<div class="modal-content">
      			<div class="modal-body mb-0 p-0">
      				<img src="{{ asset('Uploaded/PEP/PEP7.jpg')}}" alt="" style="min-width:70vw" align="center">
      			</div>
      		</div>
      	</div>
      </div>
      <br>
      <p>Klik gambar untuk memperbesar.</p>

      <p>*Jika bukan yang bersangkutan yang mengambil, harus menggunakan surat kuasa bermaterai Rp. 6.000,00 serta fotokopi KTP pemilik dan pengambil.</p>
      <p>
        <h3>Dokumen-Dokumen yang Diperlukan</h3>
        <ul>
          <h4>Untuk lulusan yang kehilangan ijazah:</h4>
          <li>1. <i>Copy</i> ijazah.</li>
          <li>2. Form permohonan surat keterangan pengganti ijazah.</li>
          <li>3. Surat kehilangan yang dikeluarkan oleh kepolisian.</li>
          <h4>Untuk lulusan yang ijazahnya rusak:</h4>
          <li>1. <i>Copy</i> ijazah.</li>
          <li>2. Form permohonan surat keterangan pengganti ijazah.</li>
          <li>3. Fotokopi ijazah yang rusak.</li>
          <h4>Untuk lulusan yang ijazahnya memiliki kesalahan data:</h4>
          <li>1. <i>Copy</i> ijazah.</li>
          <li>2. Form permohonan surat keterangan pengganti ijazah.</li>
          <li>3. Surat pernyataan/keterangan dari sekolah/institusi/perguruan tinggi terkait kesalahan ijazah.</li>
        </ul>
      </p>
    </div>

    <div id="krsm" class="tabcontent">
      <h3 class="ui header">Panduan Pencetakan KRSM</h3>
      <p>Berikut adalah prosedur untuk mencetak KRSM.</p>

      <div class="container mt-4">
      	<div class="row">

      		<div class="col-md-12">
      			<a data-target="#modalIMG8" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
      				<div class="ba-0 tp-s">
      					<img class="card-img-top" src="{{ asset('Uploaded/PEP/PEP8.jpg')}}" style="width:100%;">
      				</div>
      			</a>
      		</div>

      	</div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG8" role="dialog" tabindex="-1">
      	<div class="modal-dialog modal-lg" role="document" style="margin:13vh 15vw;">
      		<div class="modal-content">
      			<div class="modal-body mb-0 p-0">
      				<img src="{{ asset('Uploaded/PEP/PEP8.jpg')}}" alt="" style="min-width:70vw" align="center">
      			</div>
      		</div>
      	</div>
      </div>

      <p>Klik gambar untuk memperbesar.</p>

    </div> -->

</div>


    @endsection
