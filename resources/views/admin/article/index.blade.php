@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $(".users").select2();
    });

    $(document).ready(function() {
        $("body").tooltip({ selector: '[data-toggle=tooltip]' });
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

                        <button class="btn-primary btn" data-toggle="modal" data-target="#add" data-toggle="tooltip" title="Tambah"><i class="fa fa-plus"></i>&nbsp Tambah</button>

                    </div>
                    <div class="col-lg-12">
                        @if (Session::has('message'))
                        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                        @endif
                    </div>

                    <div class="card-body">
                        @if($datas->count())
                        <div class="row">
                            <?php $i = ($datas->currentpage()-1)* $datas->perpage() + 1;?>

                                @foreach($datas as $data)
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="post-thumbnail">
                                        <div class="post-header">
                                            <span class="badge badge-info" disabled="">{{ $data->filter($data->type)->filter_name }}</span>

                                            <button class="btn btnlike float-right" data-toggle="modal" data-target="#mcomment{{ $data->id }}" style="padding: 0px;"><i class="fas fa-fw fa-bell" data-toggle="tooltip" title="Manage Komentar"></i>
                                                @if( $data->comments_data($data->id)->where('status',0)->count() > 0 )
                                                <span class="indicator"></span>
                                                @else
                                                @endif
                                            </a>

                                        </div>
                                        <div class="post-img-head">
                                            <div class="post-img">
                                                <img src="{{ url('admin-page/assets/images/eco-product-img-1.png')}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-content-head">
                                                <div class="justify-content-between d-flex">
                                                    <a> <i class="fas fa-eye"></i> {{ $data->viewer }} </a>
                                                    <a class="btn btnlike" href="{{ route('admin.article.show', $data->id) }}" data-toggle="tooltip" title="Lihat Komentar" ><i class="fas fa-comment"></i> {{ $data->commentsCount($data->id)->count() }} </a>
                                                </div>
                                                <h3 class="post-title">{{ $data->title }}</h3>
                                                <div class="">{{ date('M j, Y h:i A ', strtotime($data->updated_at)) }}</div>
                                            </div>
                                            <div class="post-btn justify-content-between d-flex" >
                                                <a href="/article-page/{{$data->id}}" data-toggle="tooltip" title="Lihat Artikel"> 
                                                    <button class="btn btn-primary fas fa-external-link-alt"></button>
                                                    
                                                </a>
                                                <button class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#edit{{ $data->id }}" data-toggle="tooltip" title="Edit">
                                                </button>
                                                <button class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#del{{ $data->id }}" data-toggle="tooltip" title="Hapus">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                        </div>
                        @else
                        <div class="alert alert-warning">
                            <span></span>
                            <span><i class="fa fa-exclamation-triangle"></i> Data Pengumuman tidak ditemukan</span>
                        </div>
                        @endif
                    </div>
                    <div class="card-footer float-right">
                        @if ($datas->hasPages()) Halaman <strong>{{ $datas->currentPage() }}</strong> dari <strong>{{ $datas->lastPage() }}</strong>.
                        <br/> Menampilkan <strong>{{ ((($datas->currentPage() -1) * $datas->perPage()) + 1) }}</strong> sampai <strong>{{ ((($datas->currentPage() -1) * $datas->perPage()) + $datas->count()) }}</strong> dari <strong>{{ $datas->total() }}</strong> data yang ada.
                        <br/> @endif
                        <br> {{ $datas->fragment('one')->links() }}
                    </div>

                </div>

            </div>
        </div>

        @foreach($datas as $data)
        <!--edit-->
        <div class="modal fade" id="edit{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edit{{ $data->id }}">Form Edit</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>

                    <form action="{{ route('admin.article.update', $data->id) }}" method="post" enctype="multipart/form-data">{{ csrf_field() }} {{ method_field('put') }}

                        <div class="modal-body">
                            <ul class="list-unstyled">
                                <li class="required-text"><em> Form wajib diisi <span>*</span></em></li>
                            </ul> 

                            <div class="form-group required {{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="col-md-12 control-label">Jenis Artikel<span class="required-text"> *</span></label>
                                <div class="col-md-12">
                                    <select class="form-control" name="type" required="">
                                        @foreach ($filter as $select)
                                            <option value="{{ $select->id }}" @if($data->type == $select->id) selected @endif>{{ $select->filter_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                                    <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label for="title" class="col-md-12 control-label">Judul<span class="required-text"> *</span></label>
                                        <div class="col-md-12">
                                            <input id="title" type="text" class="form-control" name="title" value="{!! $data->title !!}" placeholder="Judul Artikel" required> @if ($errors->has('title'))
                                            <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span> @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                        <label for="url" class="col-md-12 control-label">Url Terkait<span class="optional-text"> ( Optional )</span></label>
                                        <div class="col-md-12">
                                            <input id="Url" type="url" name="url" class="form-control" value="{{$data->url}}" placeholder="Url/Tautan (ex: https://www.its.ac.id/)"> @if ($errors->has('url'))
                                            <span class="help-block"><strong>{{ $errors->first('url') }}</strong>
                                            </span> @endif
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                        <div class="col-12">
                                            <label for="description">Deskripsi <span class="optional-text"> ( Optional )</span> </label>
                                             {!! Form::textarea('description', $data->description , array('class' => 'form-control','placeholder'=>'Artikel ini tentang ... ')) !!} @if ($errors->has('description'))
                                            <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span> @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-md-12 control-label">Gambar<span class="optional-text"> ( Optional )</span></label>
                                        <div class="col-md-12">
                                            <img width="435" height="250" @if($data->fileImg) src="{{ url('Uploaded/Article/', $data->fileImg) }}" @else @endif />
                                            <input type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-md-12 control-label">Unggah File Panduan <span class="optional-text"> ( Optional *.pdf only )</span></label>
                                        <div class="col-md-12">
                                            <input type="file" class="uploads form-control" name="filePdf" accept=".pdf"> @if($data->filePdf)
                                            <a class="file-text" href="{{url('Uploaded/Article/', $data->filePdf )}}"><i class="fa fa-download"></i> {{ $data->filePdf }}</a> @else @endif
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="submit">Update</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!--del-->
        <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="del{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="del{{ $data->id}}"><strong>Hapus Artikel</strong></h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(array('route' => array('admin.article.destroy', $data->id), 'method' => 'delete')) !!} Anda Yakin Ingin Menghapus data ??
                    </div>
                    <div class="modal-footer pull-right" style="margin-right: 12px;">
                        {!! Form::button('<i class="fa fa-times-square"></i>'. 'Close', array('type' => 'close', 'class' => 'btn btn-secondary', 'data-dismiss' => 'modal' ))!!} {!! Form::button('<i class="fa fa-trash"></i>'. 'Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))!!}{{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>

        <!-- manage comment -->
        <div class="modal fade" id="mcomment{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mcomment{{ $data->id}}"><strong>Manage Komentar</strong></h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            @foreach( $data->comments_data($data->id) as $comment )
                            @if( $comment->status == 0 )
                            <div class="row comment-row justify-content-between d-flex">
                                <div class="col">
                                    <h5 class="author"> {{ $comment->name }} </h5>
                                    <p class="date"> {{date('M j, Y h:i A', strtotime($comment->submit_time))}} </p>
                                    <p class="body"> {{ $comment->body }} </p>
                                    <!-- <a href="/admin" target="_blank" style="margin-top: 0;"><i class="fas fa-reply"></i> Reply </a> -->
                                </div>
                                <div class="col control-button">
                                    <div class="control justify-content-between d-flex">
                                        @if( $comment->status == 0 )
                                        <form method="POST" action= "{{ route('comment.update', $comment->cid ) }}" enctype="multipart/form-data">
                                            {{ csrf_field() }} {{ method_field('put') }}
                                            <button class="btn approved-btn"><i class="fas fa-check-circle"></i> Approve</button>
                                        </form>

                                        {!! Form::open(array('route' => array('comment.destroy', $comment->cid), 'method' => 'delete')) !!} 
                                            {!! Form::button('<i class="fas fa-trash-circle"></i>'. 'Delete', array('type' => 'submit', 'class' => 'btn disapproved-btn'))!!}{{ Form::close() }}
                                        @elseif( $comment->status == 1 )

                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

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
                <form method="POST" action="{{ route('admin.article.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <ul class="list-unstyled">
                            <li class="required-text"><em> Form wajib diisi <span>*</span></em></li>
                         </ul>

                                <div class="form-group required {{ $errors->has('type') ? ' has-error' : '' }}">
                                    <label for="type" class="col-md-12 control-label">Jenis Artikel<span class="required-text"> *</span></label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="type" required="">
                                            @foreach ($filter as $filter)
                                            <option value="{{ $filter->id }}">{{ $filter->filter_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title" class="col-md-12 control-label">Judul<span class="required-text"> *</span></label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Judul Artikel" required> @if ($errors->has('title'))
                                        <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span> @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                    <label for="url" class="col-md-12 control-label">Url Terkait<span class="optional-text"> ( Optional )</span></label>
                                    <div class="col-md-12">
                                        <input id="Url" type="url" name="url" class="form-control" placeholder="Url/Tautan (ex: https://www.its.ac.id/)"> @if ($errors->has('url'))
                                        <span class="help-block">
                                                    <strong>{{ $errors->first('url') }}</strong>
                                            </span> @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                    <div class="col-12">
                                        <label for="description">Deskripsi <span class="optional-text"> ( Optional )</span> </label>
                                         {!! Form::textarea('description',null, array('class' => 'form-control','placeholder'=>'Artikel ini tentang ... ')) !!} @if ($errors->has('description'))
                                        <span class="help-block">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span> @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-12 control-label">Gambar<span class="optional-text"> ( Optional )</span></label>
                                    <div class="col-md-12">
                                        <img width="435" height="250" />
                                        <input type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-12 control-label">Unggah File Panduan <span class="optional-text"> ( Optional *.pdf only )</span></label>
                                    <div class="col-md-12">
                                        <input type="file" class="uploads form-control" name="filePdf" accept=".pdf">
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