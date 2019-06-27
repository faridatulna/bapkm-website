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
                    <h2 class="pageheader-title">Master Data - Pengumuman</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Master Data - Artikel</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
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

                        <button class="btn-primary btn" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambah</button>

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
                                    <th scope="col">Judul</th>
                                    <th scope="col">Tanggal Post</th>
                                    <th scope="col">Tipe Artikel</th>
                                    <th scope="col" colspan="3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = ($datas->currentpage()-1)* $datas->perpage() + 1;?>

                                @foreach($datas as $data)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$data->title}}</td>
                                    <td>{{ date('M j, Y h:ia', strtotime($data->updated_at)) }}</td>
                                    <td>
                                        @if($data->type == 1)
                                        <button class="btn btn-rounded btn-sm" style="background-color: #053a8e; color:#fff;" disabled="">Akademik</button>
                                        @elseif($data->type == 2)
                                        <button class="btn btn-rounded btn-sm" style="background-color: #5b048e; color:#fff;" disabled="">Beasiswa</button>
                                        @elseif($data->type == 3)
                                        <button class="btn btn-rounded btn-sm" style="background-color: #158701; color:#fff;" disabled="">Calon Mahasiswa</button>
                                        @elseif($data->type == 4)
                                        <button class="btn btn-rounded btn-sm" style="background-color: #5b048e; color:#fff;" disabled="">Umum</button>
                                        @elseif($data->type == 5)
                                        <button class="btn btn-rounded btn-sm" style="background-color: #158701; color:#fff;" disabled="">Wisuda</button>
                                        @elseif($data->type == 6)
                                        <button class="btn btn-rounded btn-sm" style="background-color: #158701; color:#fff;" disabled="">Kalender</button>
                                        @endif

                                        <td>
                                            <a href="/article-page/{{$data->id}}"><button class="btn btn-primary fa fa-eye" ></button></a>
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

                                            <form action="{{ route('admin.article.update', $data->id) }}" method="post" enctype="multipart/form-data">{{ csrf_field() }} {{ method_field('put') }}
                                                
                                                <div class="modal-body">
                                                    <ul style="color: red;font-size: 0.75rem;">
                                                        <li class="fa fa-asterisk">
                                                            <em> Form Wajib diisi </em>
                                                        </li>
                                                    </ul>

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="card">
                                                            <div class="card-header p-4">
                                                                <h2 class="pt-2 d-inline-block">
                                                                    <label for="title">Judul</label>
                                                                    <input id="title" type="text" class="form-control" name="title" value="{{ $data->title }}" required> @if ($errors->has('title'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('title') }}</strong>
                                                                    </span> @endif
                                                                </h2>

                                                                <div class="float-right">
                                                                    <h3 class="mb-0">
                                                                        <label for="type">Jenis Artikel</label>
                                                                        <select class="form-control" name="type" required="">
                                                                            <option value="1" @if($data->type == 1) selected @endif>Akademik</option>
                                                                            <option value="2" @if($data->type == 2) selected @endif>Beasiswa</option>
                                                                            <option value="3" @if($data->type == 3) selected @endif>Calon Mahasiswa</option>
                                                                            <option value="4" @if($data->type == 4) selected @endif>Umum</option>
                                                                            <option value="5" @if($data->type == 5) selected @endif>Wisuda</option>
                                                                            <!-- <option value="6" @if($data->type == 6) selected @endif>Kalender</option> -->
                                                                        </select>
                                                                    </h3> Update Date: {{ date('M j, Y h:ia', strtotime($data->updated_at)) }}</div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        {!! Form::label('description', 'Deskripsi') !!} {!! Form::textarea('description',$data->description, array('class' => 'form-control')) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-4">
                                                                    <div class="col-sm-6">
                                                                        <label for="email" class="col-md-4 control-label">File Pdf</label>
                                                                        <div class="col-md-12">
                                                                            <input type="file" name="filePdf">
                                                                            <a href="{{ url('Uploaded/Article',$data->filePdf) }}" target="_blank"> <i class="fa fa-download"></i> File Pdf</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="url" class="col-md-4 control-label">Url</label>
                                                                        <div class="col-md-12">
                                                                            <input id="url" type="url" class="form-control" name="url" value="{{ $data->url }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-4">
                                                                    <div class="col-sm-6">
                                                                        <label class="col-md-4 control-label">Gambar</label>
                                                                        <div class="col-md-10">
                                                                            <img width="300" height="250" @if($data->fileImg) src="{{ asset('Uploaded/Article/'.$data->fileImg) }}" @endif />
                                                                            <input type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg">
                                                                            <input type="hidden" name="hidden_image" value="{{$data->fileImg}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                                <h5 class="modal-title" id="del{{ $data->id}}"><strong>Hapus Artikel</strong></h5>
                                                <button class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {!! Form::open(array('route' => array('admin.article.destroy', $data->id), 'method' => 'delete')) !!}

                                                Anda Yakin Ingin Menghapus data ??
                                            </div>
                                            <div class="modal-footer pull-right" style="margin-right: 12px;">
                                                {!! Form::button('<i class="fa fa-times-square"></i>'. 'Close', array('type' => 'close', 'class' => 'btn btn-secondary', 'data-dismiss' => 'modal' ))!!}
                                                {!! Form::button('<i class="fa fa-trash"></i>'. 'Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))!!}
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--show-->
                                <!-- <div class="modal fade" id="show{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="show{{ $data->id }}">Form Edit</h5>
                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </a>
                                            </div>
                                                <div class="modal-body">
                                                    <ul style="color: red;font-size: 0.75rem;">
                                                        <li class="fa fa-asterisk">
                                                            <em> Form Wajib diisi </em>
                                                        </li>
                                                    </ul>

                                                    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="card">
                                                            <div class="card-header p-4">
                                                                 <h1 class="pt-2 d-inline-block">{{ $data->title}}</h1>
                                                               
                                                                <div class="float-right"> <h3 class="mb-0">
                                                                    @if($data->type == 1)
                                                                    <button class="btn btn-rounded btn-sm" style="background-color: #053a8e; color:#fff;" disabled="">Akademik</button>
                                                                    @elseif($data->type == 2)
                                                                    <button class="btn btn-rounded btn-sm" style="background-color: #5b048e; color:#fff;" disabled="">Beasiswa</button>
                                                                    @elseif($data->type == 3)
                                                                    <button class="btn btn-rounded btn-sm" style="background-color: #158701; color:#fff;" disabled="">Calon Mahasiswa</button>
                                                                    <button class="btn btn-rounded btn-sm" style="background-color: #053a8e; color:#fff;" disabled="">Akademik</button>
                                                                    @elseif($data->type == 4)
                                                                    <button class="btn btn-rounded btn-sm" style="background-color: #5b048e; color:#fff;" disabled="">Umum</button>
                                                                    @elseif($data->type == 5)
                                                                    <button class="btn btn-rounded btn-sm" style="background-color: #158701; color:#fff;" disabled="">Wisuda</button>
                                                                    @elseif($data->type == 6)
                                                                    <button class="btn btn-rounded btn-sm" style="background-color: #158701; color:#fff;" disabled="">Kalender</button>
                                                                    @endif
                                                                </h3>
                                                                {{ $data->postDate}}</div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row mb-4">
                                                                    <div class="col-sm-12">
                                                                        <p>{{ $data->description }}</p>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-4">
                                                                    <div class="col-sm-12">
                                                                        @if($data->fileImg)
                                                                            <img src="{{url('Uploaded/Article', $data->fileImg)}}" width="700px" max-width="700px" max-height="400px" height="400px" alt="image" style="margin-right: 10px;" />
                                                                        @else
                                                                            
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer bg-white">
                                                                <div class="col-sm-12">
                                                                    @if($data->filePdf)
                                                                        <a src="{{url('Uploaded/Article', $data->fileImg)}}"><i class="fa fa-download"> Unduh File PDF </i></a>
                                                                    @else
                                                                        
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                

                                        </div>
                                    </div>
                                </div> -->

                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-warning">
                            <i class="fa fa-exclamation-triangle"></i> Data Pengumuman tidak ditemukan</div>
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
                    <form method="POST" action="{{ route('admin.article.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <ul style="color: red;font-size: 0.75rem;">
                                <li class="fa fa-asterisk">
                                    <em> Form Wajib diisi </em>
                                </li>
                            </ul>

                            <div class="form-group required {{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="col-md-6 control-label">Jenis Artikel</label>
                                <div class="col-md-11">
                                    <select class="form-control" name="type" required="">
                                        <option value="1">Akademik</option>
                                        <option value="2">Beasiswa</option>
                                        <option value="3">Calon Mahasiswa</option>
                                        <option value="4">Umum</option>
                                        <option value="5">Wisuda</option>
                                        <option value="6">Kalender</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label for="title" class="col-md-6 control-label">Judul</label>
                                        <div class="col-md-11">
                                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Judul Artikel" required> @if ($errors->has('title'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span> @endif
                                        </div>

                                    </div>

                                    <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                        <label for="url" class="col-md-6 control-label">Url</label>
                                        <div class="col-md-11">
                                            <input id="Url" type="url" name="url" class="form-control" placeholder="Url/Tautan (ex: https://www.its.ac.id/)"> @if ($errors->has('url'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('url') }}</strong>
                                            </span> @endif
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                        <div class="col-11">
                                            {!! Form::label('description', 'Deskripsi') !!} {!! Form::textarea('description',null, array('class' => 'form-control','placeholder'=>'Artikel ini tentang ... ')) !!} @if ($errors->has('description'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span> @endif
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div class="col-md-10">
                                            <img width="300" height="250" />
                                            <input type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">File Pdf</label>
                                        <div class="col-md-10">
                                            <input type="file" class="uploads form-control" name="filePdf" accept=".pdf">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="submit">Add</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>

                </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection