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
                    <h2 class="pageheader-title">Master Data - Agenda</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Master Data - Agenda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Agenda</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="event">
            <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <div class="card-header">

                        <button class="btn-primary btn" data-toggle="modal" data-target="#addevent"><i class="fa fa-plus"></i> Tambah</button>

                    </div>
                    <div class="col-lg-12">
                        @if (Session::has('message'))
                        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                        @endif
                    </div>
                    <div class="card-body">
                        @if($event->count())
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Agenda</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Waktu </th>
                                    <th scope="col">Tempat </th>

                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = ($event->currentpage()-1)* $event->perpage() + 1;?>
                                    @foreach($event as $data)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{ $data->title}}</td>
                                        <td>{{ date('M j, Y', strtotime($data->dateOfEvent)) }}</td>
                                        <td>{{ date('h:ia', strtotime($data->fromTime)) }} - {{ date('h:ia', strtotime($data->toTime)) }}</td>
                                        <td>{{ $data->place}}</td>
                                        <td>
                                            <button class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#editevent{{ $data->id }}"></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#delevent{{ $data->id }}"></button>
                                        </td>
                                    </tr>
                                    <!-- /*modal edit & del*/ -->
                                    <!--edit-->
                                    <div class="modal fade" id="editevent{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editevent{{ $data->id }}">Form Edit</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>
                                                {!!Form::model($data,['method'=>'PATCH', 'action'=>['EventController@update',$data->id ]]) !!}

                                                <div class="modal-body">
                                                    <ul class="list-unstyled">
                                                       <li class="required-text"><em> Form wajib diisi <span>*</span></em></li>
                                                    </ul>

                                                    <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                                        <label for="title" class="col-md-6 control-label">Nama Agenda<span class="required-text"> *</span></label>
                                                        <div class="col-md-12">
                                                            <input id="title" type="text" class="form-control" name="title" value="{{ $data->title }}" placeholder="{{ $data->title }}" required> @if ($errors->has('title'))
                                                            <span class="help-block">
                                                                    <strong>{{ $errors->first('title') }}</strong>
                                                                </span> @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group required {{ $errors->has('dateOfEvent') ? ' has-error' : '' }}">
                                                        <label for="date" class="col-md-6 control-label">Tanggal Pelaksanaan<span class="required-text"> *</span></label>
                                                        <div class="col-md-6">
                                                            <input id="date" type="date" class="form-control" name="dateOfEvent" value="{{ date('m/d/y', strtotime($data->dateOfEvent)) }}" placeholder="{{ date('m/d/y', strtotime($data->dateOfEvent)) }}" required> @if ($errors->has('dateOfEvent'))
                                                            <span class="help-block">
                                                                    <strong>{{ $errors->first('dateOfEvent') }}</strong>
                                                                </span> @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group required {{ $errors->has('time') ? ' has-error' : '' }}">
                                                        <label for="time" class="col-md-6 control-label">Waktu Pelaksanaan<span class="required-text"> *</span></label>
                                                        <div class="d-flex">
                                                            <div class="col-lg-6">
                                                                <label for="start-time" >Mulai</label>
                                                                <input id="fromTime" type="time" class="form-control" name="fromTime" value="{{ $data->fromTime }}" required> @if ($errors->has('fromTime'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('fromTime') }}</strong>
                                                                </span> @endif
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="end-time" >Sampai</label>
                                                                <input id="toTime" type="time" class="form-control" name="toTime" value="{{ $data->toTime }}" required> @if ($errors->has('toTime'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('toTime') }}</strong>
                                                                </span> @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group required {{ $errors->has('place') ? ' has-error' : '' }}">
                                                        <label for="place" class="col-md-12 control-label">Tempat Pelaksanaan<span class="required-text">( Optional )</span></label>
                                                        <div class="col-md-12">
                                                            <input id="place" type="place" class="form-control" name="place" value="{{ $data->place }}" placeholder="{{$data->place}}" required> @if ($errors->has('place'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('place') }}</strong>
                                                            </span> @endif
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary" id="submit">Update</button>
                                                        <button type="reset" class="btn btn-danger">Reset</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            {!! Form::close()!!}
                                        </div>
                                    </div>

                                    <!--del-->
                                    <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="delevent{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="delevent{{ $data->id}}"><strong>Hapus Agenda</strong></h5>
                                                    <button class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::open(array('route' => array('admin.event.destroy', $data->id), 'method' => 'delete')) !!} Anda Yakin Ingin Menghapus data ??
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
                            <i class="fa fa-exclamation-triangle"></i> Data Agenda tidak ditemukan</div>
                        @endif
                    </div>
                    <div class="card-footer">
                        @if ($event->hasPages()) Halaman <strong>{{ $event->currentPage() }}</strong> dari <strong>{{ $event->lastPage() }}</strong>.
                        <br/> Menampilkan <strong>{{ ((($event->currentPage() -1) * $event->perPage()) + 1) }}</strong> sampai <strong>{{ ((($event->currentPage() -1) * $event->perPage()) + $event->count()) }}</strong> dari <strong>{{ $event->total() }}</strong> data yang ada.
                        <br/> @endif
                        <br> {{ $event->fragment('one')->links() }}
                </div>

            </div>

        </div>

        <!--add event-->
        <div class="modal fade" id="addevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="add">Form Tambah</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <form method="POST" action="{{ route('admin.event.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <ul class="list-unstyled">
                                <li class="required-text"><em> Form wajib diisi <span>*</span></em></li>
                            </ul>

                            <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-6 control-label">Nama Agenda<span class="required-text"> *</span></label>
                                <div class="col-12">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Contoh: upacara 17 agustus" required> @if ($errors->has('title'))
                                    <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span> @endif
                                </div>
                            </div>

                            <div class="form-group required {{ $errors->has('dateOfEvent') ? ' has-error' : '' }}">
                                <label for="dateOfEvent" class="col-md-6 control-label">Tanggal Pelaksanaan<span class="required-text"> *</span></label>
                                <div class="col-12">
                                    <input id="dateOfEvent" type="date" class="form-control" name="dateOfEvent" placeholder="Judul Artikel" >
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="dateOfEvent" class="col-md-6 control-label">Waktu Pelaksanaan<span class="required-text"> *</span></label>
                                <div class="d-flex">
                                    <div class="col-lg-6">
                                        <label for="start-time">Mulai</label>
                                        <input id="fromTime" type="time" class="form-control" name="fromTime" placeholder="Mulai" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="end-time">Akhir</label>
                                        <input id="toTime" type="time" class="form-control" name="toTime" placeholder="Akhir" required>
                                    </div>
                                </div>


                            </div>

                            <div class="form-group required {{ $errors->has('place') ? ' has-error' : '' }}">
                                <label for="place" class="col-12 control-label">Tempat Pelaksanaan<span class="optional-text">( Optional )</span></label>
                                <div class="col-12">
                                    <input id="place" type="text" class="form-control" name="place" placeholder="contoh: stadion ITS" >
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection
