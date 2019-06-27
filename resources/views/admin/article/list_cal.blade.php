@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>
@stop @extends('layouts.app-admin') @section('content')

<div class="dashboard-main-wrapper">

    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Master Data - Artikel</h2>
                    <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Master Data - Artikel</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="cal">
            <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <!-- <h5 class="card-header">Kalendar</h5> -->
                    <div class="col-lg-12">
                        @if (Session::has('message'))
                        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu1" style="margin-top:10px;">{{ Session::get('message') }}</div>
                        @endif
                    </div>

                    <div class="card-body">
                        <button class="btn-primary btn fa fa-plus mb-4" data-toggle="modal" data-target="#addcal"><i class="fa fa-add"></i> Tambah</button>
                        @if($datas->count())
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kalender</th>
                                    <th scope="col">Tanggal Post</th>
                                    <th scope="col">File PDF</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = ($datas->currentpage()-1)* $datas->perpage() + 1;?>
                                    @foreach($datas as $data)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{ $data->title}}</td>
                                        <td>{{ date('M j, Y hi: a',strtotime('$data->uploaded_at')) }}</td>
                                        <td><a @if($data->filePdf) href="{{ url('Uploaded/Article', $data->filePdf) }}" @endif> <i class="fa fa-download"></i> File PDF</a></td>
                                        <td>
                                            <button class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#editcal{{ $data->id }}"></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#delcal{{ $data->id }}"></button>
                                        </td>
                                    </tr>

                                    <!--edit-->
                                    <div class="modal fade" id="editcal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editcal{{ $data->id }}">Form Edit</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>
                                                <form action="{{ route('admin.calendar.update', $data->id) }}" method="post" enctype="multipart/form-data">{{ csrf_field() }} {{ method_field('put') }}

                                                <div class="modal-body">
                                                    <ul style="color: red;font-size: 0.75rem;">
                                                        <li class="fa fa-asterisk">
                                                            <em> Form Wajib diisi </em>
                                                        </li>
                                                    </ul>

                                                    <input type="text" class="form-control" name="type" hidden="" value="6">
                                                    <input type="file" class="uploads form-control" name="fileImg" hidden="" value="">
                                                    <input type="text" class="form-control" name="url" hidden="" value="">

                                                    <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                                        <label for="title" class="col-md-6 control-label">Judul</label>
                                                        <div class="col-md-12">
                                                            <input id="title" type="text" class="form-control" name="title" value="{{ $data->title }}" placeholder="{{$data->title}}" required> @if ($errors->has('title'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('title') }}</strong>
                                                            </span> @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="col-md-4 control-label">File Pdf</label>
                                                        <div class="col-md-12">
                                                            <input type="file" name="filePdf">
                                                            <a href="{{ url('Uploaded/Article',$data->filePdf) }}" target="_blank"> <i class="fa fa-download"></i> File Pdf</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" id="submit">Update</button>
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                </div>

                                            </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!--del-->
                                    <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="delcal{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="delcal{{ $data->id}}"><strong>Hapus Artikel</strong></h5>
                                                    <button class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::open(array('route' => array('admin.calendar.destroy', $data->id), 'method' => 'delete')) !!} Anda Yakin Ingin Menghapus data ??
                                                </div>
                                                <div class="modal-footer pull-right" style="margin-right: 12px;">
                                                    {!! Form::button('<i class="fa fa-times-square"></i>'. 'Close', array('type' => 'close', 'class' => 'btn btn-secondary', 'data-dismiss' => 'modal' ))!!} {!! Form::button('<i class="fa fa-trash"></i>'. 'Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))!!} {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-warning">
                            <i class="fa fa-exclamation-triangle"></i> Data Kalender tidak ditemukan</div>
                        @endif
                    </div>
                    <div class="card-footer">
                        @if ($datas->hasPages()) Halaman <strong>{{ $datas->currentPage() }}</strong> dari <strong>{{ $datas->lastPage() }}</strong>.
                        <br/> Menampilkan <strong>{{ ((($datas->currentPage() -1) * $datas->perPage()) + 1) }}</strong> sampai <strong>{{ ((($datas->currentPage() -1) * $datas->perPage()) + $datas->count()) }}</strong> dari <strong>{{ $datas->total() }}</strong> data yang ada.
                        <br/> @endif
                        <br> {{ $datas->fragment('one')->links() }}
                    </div>

                </div>

            </div>

        </div>

        <!--add cal-->
        <div class="modal fade" id="addcal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addcal">Form Tambah</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <form method="POST" action="{{ route('admin.calendar.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <ul style="color: red;font-size: 0.75rem;">
                                <li class="fa fa-asterisk">
                                    <em> Form Wajib diisi </em>
                                </li>
                            </ul>

                            <input type="text" class="form-control" name="type" hidden="" value="6">
                            <input type="file" class="uploads form-control" name="fileImg" hidden="" value="">
                            <input type="text" class="form-control" name="url" hidden="" value="">

                            <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-6 control-label">Judul</label>
                                <div class="col-12">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Judul" required> @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span> @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">File Pdf</label>
                                <div class="col-12">
                                    <input type="file" class="uploads form-control" name="filePdf" accept=".pdf">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>

                </div>
                </form>
            </div>
        </div>

    </div>

    @endsection