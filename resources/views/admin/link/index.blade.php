@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable({
            "iDisplayLength": 5
        });

    });
</script>

@stop @extends('layouts.app-admin') @section('content')

<div class="page-header">
    <!-- <h4><strong>Tabel Quick Links</strong></h4> -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <h4><strong>Tabel Quick Links <i class="fa fa-angle-right" style="margin-left: 4px;margin-right: 4px;"></i> </strong></h4> 
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Tabel Quick Links</strong></li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-2">
        <button class="btn btn-primary btn-rounded btn-fw" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambah Quick Link</button>
    </div>
    <div class="col-lg-12">
        @if (Session::has('message'))
        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
        @endif
    </div>
</div>

<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive" style="justify-content: center;">
                    <table class="table table-striped" id="table">
                        <thead>
                            <tr>
                                <th>Judul Url</th>
                                <th>Url</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->url }}</td>

                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{ $data->id}}"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#del{{ $data->id}}"><i class="fa fa-trash"></i></button>
                                        </form>
  
                                    </div>
                                </td>
                            </tr>

                            <!--add modal-->
                            <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="add"><strong>Tambah Quick Link</strong></h5>
                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <ul style="color: red;font-size: 0.75rem;">
                                            <li class="fa fa-asterisk">
                                                <em> Form Wajib diisi </em>
                                            </li>
                                        </ul>
                                        <form method="POST" action="{{ route('admin.link.store') }}" enctype="multipart/form-data">{{ csrf_field() }}
                                            <div class="modal-body">
                                            
                                                <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                                    <label for="title" class="col-md-6 control-label">Judul Url</label>
                                                    <div class="col-md-12">
                                                        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Judul Url (ex: website snmptn)" required> @if ($errors->has('title'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span> @endif
                                                    </div>
                                                </div>

                                                <div class="form-group required {{ $errors->has('url') ? ' has-error' : '' }}">
                                                    <label for="url" class="col-md-6 control-label">Url</label>
                                                    <div class="col-md-12">
                                                        <input id="url" type="text" class="form-control" name="url" value="{{ old('url') }}" placeholder="ex: www.snmptn.co.id" required> @if ($errors->has('url'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('url') }}</strong>
                                                        </span> @endif
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="modal-footer pull-right" style="margin-right: 12px;">
                                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>

                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!--edit modal-->
                            <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="edit{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="edit{{ $data->id}}"><strong>Edit Quick Link</strong></h5>
                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {!!Form::model($data,['method'=>'PATCH', 'action'=>['LinksController@update',$data->id ]]) !!}
                                            
                                            <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                                <div class="col-md-12">
                                                    {!! Form::label('title', 'Judul Url') !!} {!! Form::text('title', $data->title, array('class' => 'form-control','placeholder'=>'Judul Url', 'required')) !!}
                                                </div>
                                            </div>
                                            <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                                <div class="col-md-12" >
                                                    {!! Form::label('url', 'Url') !!} {!! Form::text('url', $data->url, array('class' => 'form-control','placeholder'=>'Url', 'required')) !!}
                                                </div>
                                               
                                            </div>
                                        </div>

                                        <div class="modal-footer pull-right" style="margin-right: 12px;">
                                            {!! Form::button('<i class="fa fa-times-square"></i>'. 'Close', array('type' => 'close', 'class' => 'btn btn-secondary btn', 'data-dismiss' => 'modal' ))!!} {!! Form::button('<i class="fa fa-check-square"></i>'. 'Update', array('type' => 'submit', 'class' => 'btn btn-primary btn'))!!} {!! Form::close()!!}
                                        </div>

                                    </div>
                                </div>
                            </div>

                             <!--delete modal-->
                            <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="del{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="del{{ $data->id}}"><strong>Hapus Quick Link</strong></h5>
                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        {!! Form::open(array('route' => array('admin.link.destroy', $data->id), 'method' => 'delete')) !!}

                                        Anda Yakin Ingin Menghapus data ??
                                        </div>
                                        <div class="modal-footer pull-right" style="margin-right: 12px;">
                                            {!! Form::button('<i class="fa fa-times-square"></i>'. 'Close', array('type' => 'close', 'class' => 'btn btn-secondary', 'data-dismiss' => 'modal' ))!!}
                                            {!! Form::button('<i class="fa fa-trash"></i>'. 'Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))!!}
                                            {!! Form::close() !!}
                                        </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                @endforeach
                </tbody>
                </table>
            </div>
            {{-- {!! $datas->links() !!} --}}
        </div>
    </div>
</div>
</div>
@endsection