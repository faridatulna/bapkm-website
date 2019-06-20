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
          <h1>SOP Pengelolaan Data dan Kegiatan Mahasiswa</h1>
      </div>
      <div style="display:inline-block;width:100%;overflow-y:auto;">

      </div>
  </div>

    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'UKM')" id="defaultOpen">Layanan Proposal Kegiatan UKM</button>
      <button class="tablinks" onclick="openCity(event, 'FD')">Layanan Proposal Kegiatan Organisasi Mahasiswa (Fakultas dan Departemen)</button>
      <button class="tablinks" onclick="openCity(event, 'BEMHima')">Layanan Proposal Organisasi Mahasiswa (BEM dan Himadep)</button>
      <button class="tablinks" onclick="openCity(event, 'Sponsor')">Layanan Dana Sponsor bagi Delegasi/Tim/Mahasiswa</button>
      <button class="tablinks" onclick="openCity(event, 'LPJSPJ')">Layanan Pengesahan LPJ dan SPJ</button>
    </div>

    <div id="UKM" class="tabcontent">
      <h3 class="ui header">Panduan Penggunaan Layanan Proposal Kegiatan Unit Kegiatan Mahasiswa (UKM)</h3>
      <p>Berikut adalah prosedur dan dokumen-dokumen yang dibutuhkan untuk mengajukan proposal kegiatan UKM.</p>
      <p><img src="{{ asset('files/Data/DATA123.jpg')}}"></p>

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

      <p><img src="{{ asset('files/Data/DATA123.jpg')}}"></p>

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
      <p><img src="{{ asset('files/Data/DATA123.jpg')}}"></p>

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
      <p><img src="{{ asset('files/Data/DATA4.jpg')}}"></p>

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
      <p><img src="{{ asset('files/Data/DATA5.jpg')}}"></p>

      <p>
        <h3>Dokumen-Dokumen yang Diperlukan</h3>
        <ul>
          <li>1. Proposal LPJ.</li>
          <li>2. Kuitansi SPJ.</li>
        </ul>
      </p>
    </div>

</div>


    @endsection
