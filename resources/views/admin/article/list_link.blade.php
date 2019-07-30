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
                    <h2 class="pageheader-title">Master Data - Quicklinks</h2>
                    <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Master Data - Artikel</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Quicklinks</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="links">
            <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addlinks"><i class="fa fa-plus"></i>&nbsp Tambah</button>
                    </div>

                    <div class="col-lg-12">
                        @if (Session::has('message'))
                        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu3" style="margin-top:10px;">{{ Session::get('message') }}</div>
                        @endif
                    </div>

                    <div class="card-body">

                        @if($links->count())
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Link</th>
                                    <th scope="col">Url (https://www.its.ac.id)</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = ($links->currentpage()-1)* $links->perpage() + 1;?>
                                    @foreach($links as $data)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{ $data->title}}</td>
                                        <td>{{ $data->url }}</td>
                                        <td>
                                            <button class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#editlinks{{ $data->id }}"></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#dellinks{{ $data->id }}"></button>
                                        </td>
                                    </tr>
                                    <!-- /*modal edit & del*/ -->
                                    <!--edit-->
                                    <div class="modal fade" id="editlinks{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editlinks{{ $data->id }}">Form Edit</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>
                                                {!!Form::model($data,['method'=>'PATCH', 'action'=>['QuicklinkController@update',$data->id ]]) !!}

                                                <div class="modal-body">
                                                  <ul class="list-unstyled">
                                                       <li class="required-text"><em> Form wajib diisi <span>*</span></em></li>
                                                    </ul>

                                                    <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                                        <label for="title" class="col-md-6 control-label">Nama Link<span class="required-text"> *</span></label>
                                                        <div class="col-md-12">
                                                            <input id="title" type="text" class="form-control" name="title" value="{{ $data->title }}" placeholder="Nama Link (contoh: integra)" required> @if ($errors->has('title'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('title') }}</strong>
                                                            </span> @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group required {{ $errors->has('date') ? ' has-error' : '' }}">
                                                        <label for="url" class="col-md-4 control-label">Url<span class="required-text"> *</span></label>
                                                        <div class="col-md-12">
                                                            <input id="url" type="url" class="form-control" name="url" value="{{ $data->url }}">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" id="submit">Update</button>
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                </div>

                                            </div>
                                            {!! Form::close()!!}
                                        </div>
                                    </div>

                                    <!--del-->
                                    <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="dellinks{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="dellinks{{ $data->id}}"><strong>Hapus Quicklinks</strong></h5>
                                                    <button class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::open(array('route' => array('admin.link.destroy', $data->id), 'method' => 'delete')) !!} Anda Yakin Ingin Menghapus data ??
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
                            <i class="fa fa-exclamation-triangle"></i> Data Quick Links tidak ditemukan</div>
                        @endif
                    </div>

                    <div class="card-footer">
                        @if ($links->hasPages()) Halaman <strong>{{ $links->currentPage() }}</strong> dari <strong>{{ $links->lastPage() }}</strong>.
                        <br/> Menampilkan <strong>{{ ((($links->currentPage() -1) * $links->perPage()) + 1) }}</strong> sampai <strong>{{ ((($links->currentPage() -1) * $links->perPage()) + $links->count()) }}</strong> dari <strong>{{ $links->total() }}</strong> data yang ada.
                        <br/> @endif
                        <br> {{ $links->fragment('one')->links() }}
                    </div>
                </div>

            </div>
        </div>

        <!--add links-->
        <div class="modal fade" id="addlinks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="add">Form Tambah</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <form method="POST" action="{{ route('admin.link.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <ul class="list-unstyled">
                                <li class="required-text"><em> Form wajib diisi <span>*</span></em></li>
                            </ul>

                            <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-6 control-label">Nama Link<span class="required-text"> *</span></label>
                                <div class="col-12">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Nama Link (contoh: integra)" required> @if ($errors->has('title'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span> @endif
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                <label for="url" class="col-md-6 control-label">Url<span class="required-text"> *</span></label>
                                <div class="col-12">
                                    <input id="Url" type="url" name="url" class="form-control" placeholder="Url/Tautan (contoh: https://www.its.ac.id/)"> @if ($errors->has('url'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('url') }}</strong>
                                        </span> @endif
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
