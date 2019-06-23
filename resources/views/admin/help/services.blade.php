@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $(".users").select2();
    });
</script>

<script type="text/javascript">
    function readURL() {
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(input).prev().attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function() {
        $(".uploads").change(readURL)
        $("#f").submit(function() {
            // do ajax submit or just classic form submit
            //  alert("fake subminting")
            return false
        })
    })
</script>

@stop @extends('layouts.app-admin') @section('content')

<div class="dashboard-main-wrapper">

    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Produk BAPKM - Layanan</h2>
                    <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Produk BAPKM - Layanan</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Layanan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <div class="card-header">

                        <button class="btn-primary btn fa fa-plus" data-toggle="modal" data-target="#add" onclick=><i class="fa fa-add"></i> Tambah</button>

                    </div>
                    <div class="col-lg-12">
                        @if (Session::has('message'))
                        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                        @endif
                    </div>

                    <div class="card-body">
                        <?php $i=1; ?>
                            @if($datas->count())
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <!-- <td></td> -->
                                        <th scope="col">Jenis Layanan</th>
                                        <th scope="col">Laman Layanan</th>
                                        <th scope="col">Tanggal Post</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($datas as $data)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <!-- <td>
                                          @if($data->fileImage) 
                                          <img src="{{ url('Uploaded/Image/Product', $data->fileImg ) }}" alt="image" style="margin-right: 10px;" >
                                          @else
                                              <img src="" alt="image" style="margin-right: 10px;" />

                                          @endif

                                        </td> -->
                                        <td>{{$data->title}}</td>
                                        <td>{{$data->url}}</td>
                                        <td>{{ $data->created_at }}</td>

                                        <td>
                                            <button class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#edit{{ $data->id }}"></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#del{{ $data->id }}"></button>
                                        </td>
                                    </tr>

                                    <!--edit-->
                                    <div class="modal fade" id="edit{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="edit{{ $data->id }}">Form Edit</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>
                                                {!!Form::model($data,['method'=>'PATCH', 'action'=>['ServiceController@update',$data->id ]]) !!}

                                                <div class="modal-body">
                                                    <ul style="color: red;font-size: 0.75rem;">
                                                        <li class="fa fa-asterisk">
                                                            <em> Form Wajib diisi </em>
                                                        </li>
                                                    </ul>

                                                    <div class="form-group required {{ $errors->has('type') ? ' has-error' : '' }}">
                                                        <label for="url" class="col-md-6 control-label">Url</label>
                                                        <div class="col-md-12">
                                                            <input id="Url" type="url" name="url" class="form-control" placeholder="Url/Tautan (ex: https://www.its.ac.id/)" value="{{ $data->url }}"> @if ($errors->has('url'))
                                                            <span class="help-block">
                                                            <strong>{{ $errors->first('url') }}</strong>
                                                    </span> @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                                        <label for="title" class="col-md-6 control-label">Judul</label>
                                                        <div class="col-md-12">
                                                            <input id="title" type="text" class="form-control" name="title" value="{{ $data->title }}" placeholder="Judul Artikel" required> @if ($errors->has('title'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('title') }}</strong>
                                                                  </span> @endif
                                                        </div>

                                                    </div>

                                                    <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                                    <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                                    <div class="col-12">
                                                        <img width="430" height="250" @if($data->fileImg) src="{{ url('Uploaded/Images/Product',$data->fileImg) }}" @endif />
                                                        <input type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff" value="{{ old('fileImg') }}">
                                                        <input type="text" class="uploads form-control" name="fileImg" disabled accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff" @if($data->fileImg) value="{{ $data->fileImg }}" @endif >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-md-6 control-label">File Pdf</label>
                                                    <div class="col-md-12">
                                                        <input type="file" class="uploads form-control" name="filePdf" accept=".pdf" @if($data->filePdf) value="{{ url('Uploaded/PDF/Product', $data->filePdf) }}" @endif>
                                                        <input type="text" class="uploads form-control" name="filePdf" disabled accept=".pdf" @if($data->filePdf) value="{{ url('Uploaded/PDF/Product',$data->filePdf) }}" @endif >
                                                    </div>
                                                </div>

                                                <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                                    <div class="col-md-12">
                                                        {!! Form::label('description', 'Deskripsi') !!} {!! Form::textarea('description',$data->description, array('class' => 'form-control')) !!}
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
                                    <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="del{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="del{{ $data->id}}"><strong>Hapus Layanan</strong></h5>
                                                    <button class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::open(array('route' => array('admin.product.service.destroy', $data->id), 'method' => 'delete')) !!} Anda Yakin Ingin Menghapus data ??
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
                                <i class="fa fa-exclamation-triangle"></i> Data Layanan tidak ditemukan</div>
                            @endif
                    </div>
                    <div class="card-footer">
                        {{ $datas->links() }}
                    </div>

                </div>

            </div>
        </div>

        <!--add-->
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="add">Form Tambah</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <form method="POST" action="{{ route('admin.product.service.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <ul style="color: red;font-size: 0.75rem;">
                                <li class="fa fa-asterisk">
                                    <em> Form Wajib diisi </em>
                                </li>
                            </ul>

                            <div class="form-group required {{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="url" class="col-md-6 control-label">Url</label>
                                <div class="col-md-12">
                                    <input id="Url" type="url" name="url" class="form-control" placeholder="Url/Tautan (ex: https://www.its.ac.id/)"> @if ($errors->has('url'))
                                    <span class="help-block">
                                                        <strong>{{ $errors->first('url') }}</strong>
                                                </span> @endif
                                </div>
                            </div>

                            <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-6 control-label">Judul</label>
                                <div class="col-md-12">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Judul Artikel" required> @if ($errors->has('title'))
                                    <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span> @endif
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                <div class="col-12">
                                    <img width="430" height="250" />
                                    <input type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-6 control-label">File Pdf</label>
                                <div class="col-md-12">
                                    <input type="file" class="uploads form-control" name="filePdf" accept=".pdf">
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                <div class="col-md-12">

                                    {!! Form::label('description', 'Deskripsi') !!} {!! Form::textarea('description',null, array('class' => 'form-control','placeholder'=>'SOP ini tentang ... ')) !!} @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span> @endif
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
    </div>

    @endsection