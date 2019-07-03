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
                    <h2 class="pageheader-title">Produk BAPKM - SOP</h2>
                    <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Produk BAPKM - SOP</a></li>
                                <li class="breadcrumb-item active" aria-current="page">SOP</li>
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

                        <button class="btn-primary btn" data-toggle="modal" data-target="#add" onclick=><i class="fa fa-plus"></i>&nbsp Tambah</button>

                    </div>
                    <div class="col-lg-12">
                        @if (Session::has('message'))
                        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                        @endif
                    </div>

                        <div class="card-body">

                            @if($datas->count())
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama SOP</th>
                                        <th scope="col">Terakhir Update</th>
                                        <th scope="col">Tipe SOP</th>
                                        <th scope="col" colspan="3">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = ($datas->currentpage()-1)* $datas->perpage() + 1;?>
                                    @foreach($datas as $data)

                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{$data->title}}</td>
                                        <td>{{ $data->updated_at }}</td>
                                        <td>
                                            @if($data->type == 1)
                                            <button class="btn btn-rounded btn-sm" style="background-color: #053a8e; color:#fff;" disabled="">SOP-RD</button>
                                            @elseif($data->type == 2)
                                            <button class="btn btn-rounded btn-sm" style="background-color: #5b048e; color:#fff;" disabled="">SOP-PEP</button>
                                            @elseif($data->type == 3)
                                            <button class="btn btn-rounded btn-sm" style="background-color: #158701; color:#fff;" disabled="">SOP-BEASISWA</button>
                                            @elseif($data->type == 4)
                                            <button class="btn btn-rounded btn-sm" style="background-color: #053a8e; color:#fff;" disabled="">SOP-PDKM</button>
                                            @else @endif

                                            <td>
                                                <button class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#show{{ $data->id }}"></button>
                                            </td>
                                            <td>
                                                <button class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#edit{{ $data->id }}"></button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#del{{ $data->id }}"></button>
                                            </td>
                                    </tr>
                                    <!--edit-->
                                    <div class="modal fade" id="edit{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="edit{{ $data->id }}">Form Edit</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>
                                                <form action="{{ route('admin.sop.update', $data->id) }}" method="post" enctype="multipart/form-data">{{ csrf_field() }} {{ method_field('put') }}

                                                <div class="modal-body">
                                                    <ul style="color: red;font-size: 0.75rem;">
                                                        <li class="fa fa-asterisk">
                                                            <em> Form Wajib diisi </em>
                                                        </li>
                                                    </ul>

                                                    <div class="row">
                                                        <div class="col-4 form-group required {{ $errors->has('type') ? ' has-error' : '' }}">
                                                            <label for="type" class="col-md-6 control-label">Jenis SOP</label>
                                                            <div class="col-md-12">
                                                                <select class="form-control" name="type" required="">
                                                                    <option value="1" @if($data->type == 1) selected @endif>SOP-RD</option>
                                                                    <option value="2" @if($data->type == 2) selected @endif>SOP-PEP</option>
                                                                    <option value="3" @if($data->type == 3) selected @endif>SOP-BEASISWA</option>
                                                                    <option value="4" @if($data->type == 4) selected @endif>SOP-PDKM</option>option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-8 form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                                            <label for="title" class="col-md-6 control-label">Nama SOP</label>
                                                            <div class="col-md-12">
                                                                <input id="title" type="text" class="form-control" name="title" value="{{ $data->title }}" placeholder="Nama Sop" required> @if ($errors->has('title'))
                                                                <span class="help-block">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                    </span> @endif
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                                        <div class="col-12">
                                                            <img @if($data->fileImg) src="{{ url('Uploaded/SOP', $data->fileImg) }}" width="700px" max-width="700px" max-height="400px" height="400px" alt="image" style="margin-right: 10px;" />

                                                            <input type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
                                                            <!-- <img width="725" height="250" @if($data->fileImg) src="{{ url('Uploaded/Images/Product',$data->fileImg) }}" @endif /> -->
                                                            <!-- <input type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff" value="{{$data->fileImg}}"> -->
                                                        </div>
                                                    </div>

                                                    <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                                        <div class="col-md-12">
                                                            <label for="description">Deskripsi</label>
                                                            <textarea name="description" id="summernote{{$data->id}}" style="visibility: hidden; display: none;">{!! $data->description !!}</textarea>
                                                            <!-- {!! Form::label('description', 'Deskripsi') !!} {!! Form::textarea('description',$data->description, array('class' => 'form-control', 'required')) !!} -->
                                                        </div>
                                                        <script>
                                                            $('#summernote{{$data->id}}').summernote({
                                                                tabsize: 3,
                                                                height: 100
                                                            });
                                                        </script>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6 form-group">
                                                            <label for="email" class="col-md-6 control-label">File Pdf</label>
                                                            <div class="col-md-12">
                                                                <input type="file" class="uploads form-control" name="filePdf" accept=".pdf">
                                                                @if($data->filePdf)
                                                                    <a href="{{ url('Uploaded/SOP/'. $data->filePdf) }}"> <i class="fa fa-download"></i> File Pdf Sudah Ada</a>
                                                                @else @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-6 form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                                            <label for="url" class="col-md-6 control-label">Url</label>
                                                            <div class="col-md-12">
                                                                <input id="Url" type="url" name="url" class="form-control" placeholder="Url/Tautan (ex: https://www.its.ac.id/)" value="{{ $data->url }}"> @if ($errors->has('url'))
                                                                <span class="help-block">
                                                            <strong>{{ $errors->first('url') }}</strong>
                                                    </span> @endif
                                                            </div>
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
                                    <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="del{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="del{{ $data->id}}"><strong>Hapus SOP</strong></h5>
                                                    <button class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::open(array('route' => array('admin.article.destroy', $data->id), 'method' => 'delete')) !!} Anda Yakin Ingin Menghapus data ??
                                                </div>
                                                <div class="modal-footer pull-right" style="margin-right: 12px;">
                                                    {!! Form::button('<i class="fa fa-times-square"></i>'. 'Close', array('type' => 'close', 'class' => 'btn btn-secondary', 'data-dismiss' => 'modal' ))!!} {!! Form::button('<i class="fa fa-trash"></i>'. 'Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))!!} {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--show-->
                                    <div class="modal fade" id="show{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="show{{ $data->id }}">Form Lihat</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="card">
                                                            <div class="card-header p-4">
                                                                <h2 class="pt-1 d-inline-block">{{ $data->title}}</h2>

                                                                <div class="float-right">
                                                                    <h3 class="mb-0">
                                                                    @if($data->type == 1)
                                                                    <button class="btn btn-rounded btn-sm" style="background-color: #053a8e; color:#fff;" disabled="">SOP-RD</button>
                                                                    @elseif($data->type == 2)
                                                                    <button class="btn btn-rounded btn-sm" style="background-color: #5b048e; color:#fff;" disabled="">SOP-PEP</button>
                                                                    @elseif($data->type == 3)
                                                                    <button class="btn btn-rounded btn-sm" style="background-color: #158701; color:#fff;" disabled="">SOP-BEASISWA</button>
                                                                    @elseif($data->type == 4)
                                                                    <button class="btn btn-rounded btn-sm" style="background-color: #053a8e; color:#fff;" disabled="">SOP-PDKM</button>

                                                                    @endif
                                                                </h3> {{ date('M j ,Y', strtotime($data->updated_at)) }}</div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row mb-4">
                                                                    <div class="col-sm-12">
                                                                        @if($data->fileImg)
                                                                          <img src="{{url('Uploaded/SOP/', $data->fileImg)}}" width="700px" max-width="700px" max-height="400px" height="400px" alt="image" style="margin-right: 10px;" />
                                                                        @else @endif

                                                                    </div>
                                                                </div>
                                                                <div class="row mb-4">
                                                                    <div class="col-sm-12" id="summernote_show">
                                                                        {!! $data->description !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer bg-white">
                                                                <div class="col-sm-12">
                                                                    @if($data->filePdf)
                                                                    <a src="{{url('Uploaded/SOP/', $data->filePdf)}}"><i class="fa fa-download"> Unduh File PDF </i></a> @else @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <div class="alert alert-warning">
                                <i class="fa fa-exclamation-triangle"></i> Data SOP tidak ditemukan</div>
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

        <!--add-->
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="add">Form Tambah</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <form method="POST" action="{{ route('admin.sop.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <ul style="color: red;font-size: 0.75rem;">
                                <li class="fa fa-asterisk">
                                    <em> Form Wajib diisi </em>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-4 form-group required {{ $errors->has('type') ? ' has-error' : '' }}">
                                    <label for="type" class="col-md-6 control-label">Jenis SOP</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="type" required="">
                                            <option value=" ">Pilih jenis SOP</option>
                                            <option value="1">SOP-RD</option>
                                            <option value="2">SOP-PEP</option>
                                            <option value="3">SOP-BEASISWA</option>
                                            <option value="4">SOP-PDKM</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-8 form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title" class="col-md-6 control-label">Nama Sop</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Nama Sop" required> @if ($errors->has('title'))
                                        <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span> @endif
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                <div class="col-12">
                                    <img width="725" height="250" />
                                    <input type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="summernote_add" style="visibility: hidden; display: none;"></textarea>
                                </div>
                                <script>
                                    $('#summernote_add').summernote({
                                        placeholder: 'SOP ini tentang ... ',
                                        tabsize: 3,
                                        height: 100
                                    });
                                </script>
                            </div>

                            <div class="row">
                                <div class="col-6 form-group">
                                    <label for="email" class="col-md-6 control-label">File Pdf</label>
                                    <div class="col-md-12">
                                        <input type="file" class="uploads form-control" name="filePdf" accept=".pdf">
                                    </div>
                                </div>
                                <div class="col-6 form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                    <label for="url" class="col-md-6 control-label">Url</label>
                                    <div class="col-md-12">
                                        <input id="Url" type="url" name="url" class="form-control" placeholder="Url/Tautan (ex: https://www.its.ac.id/)"> @if ($errors->has('url'))
                                        <span class="help-block">
                                                        <strong>{{ $errors->first('url') }}</strong>
                                                </span> @endif
                                    </div>
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
</div>

@endsection
