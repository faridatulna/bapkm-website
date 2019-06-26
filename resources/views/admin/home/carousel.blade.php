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
                    <h2 class="pageheader-title">Page - Home - Carousel</h2>
                     
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/home" class="breadcrumb-link">Page-Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Carousel</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">
                        <button class="btn-primary btn fa fa-plus" data-toggle="modal" data-target="#addcar"></i> Tambah</button>
                    </h5>
                    <div class="card-body">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($datas as $i=>$data)
                                    <li data-target="#carouselExampleIndicators1" data-slide-to="{{$i++}}" class="@if($i == 0) active @endif"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                
                                @foreach($datas as $i=>$data)
                                <div class="carousel-item @if($i == 0) active @endif">
                                    <img class="d-block w-100 h-375" alt="slide {{$i++}}" @if($data->banner) src="{{ url('Uploaded/Banner',$data->banner) }}" height="365px" @endif >
                                    <div class="carousel-caption d-flex d-md-block">
                                        <h3 class="text-white">Heading Title Carousel</h3>
                                        <p>Mauris fermentum elementum ligula in efficitur. Aliquam id congue lorem. Proin consectetur feugiat enim ut luctus. Aliquam pellentesque ut tellus ultricies bibendum.</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span> </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($datas as $i=>$data)
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Carousel {{$i++}}</h5>
                    <div class="card-body">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" alt="slide {{$i++}}" @if($data->banner) src="{{ url('Uploaded/Banner',$data->banner) }}" @endif >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <button class="btn-warning btn" data-toggle="modal" data-target="#editcar{{$data->id}}"><i class="fa fa-edit"></i></button>
                            <button class="btn-danger btn " data-toggle="modal" data-target="#delcar{{$data->id}}"><i class="fa fa-trash"></i></button>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!--edit-->
            <div class="modal fade" id="editcar{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editcar{{ $data->id }}">Form Edit</h5>
                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </a>
                        </div>
                        {!!Form::model($data,['method'=>'PATCH', 'action'=>['GalleryController@update',$data->id ]]) !!}

                        <div class="modal-body">
                            <ul style="color: red;font-size: 0.75rem;">
                                <li class="fa fa-asterisk">
                                    <em> Form Wajib diisi </em>
                                </li>
                            </ul>

                            <input type="text" class="form-control" style="margin-top: 20px;" name="type" value="[1]" hidden="">

                            <div class="form-group required {{ $errors->has('banner') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Gambar</label>
                                <div class="col-md-10">
                                    <img width="725" height="300" @if($data->banner) src="{{ url('Uploaded/Banner',$data->banner) }}" @endif />
                                    <input type="file" class="uploads form-control" style="margin-top: 20px;" name="banner" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff" multiple="">
                                    <input type="hidden" class="uploads form-control" style="margin-top: 20px;" name="hidden_banner" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff" value="{{ $data->banner }}" multiple="">
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
            <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="delcar{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="delcar{{ $data->id}}"><strong>Hapus</strong></h5>
                            <button class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {!! Form::open(array('route' => array('admin.gallery.destroy', $data->id), 'method' => 'delete')) !!} Anda Yakin Ingin Menghapus data ??
                        </div>
                        <div class="modal-footer pull-right" style="margin-right: 12px;">
                            {!! Form::button('<i class="fa fa-times-square"></i>'. 'Close', array('type' => 'close', 'class' => 'btn btn-secondary', 'data-dismiss' => 'modal' ))!!} {!! Form::button('<i class="fa fa-trash"></i>'. 'Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))!!} {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>

<div class="modal fade" id="addcar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addcar">Form Tambah</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
            </div>
            <form method="POST" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <ul style="color: red;font-size: 0.75rem;">
                        <li class="fa fa-asterisk">
                            <em> Form Wajib diisi </em>
                        </li>
                    </ul>

                    <input type="text" class="form-control" style="margin-top: 20px;" name="type" value="[1]" hidden="">

                    <div class="form-group required {{ $errors->has('banner') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                        <div class="col-md-10">
                            <img width="725" height="300" />
                            <input type="file" class="uploads form-control" style="margin-top: 20px;" name="banner" accept=".jpg,.png,.jpeg,.svg" multiple="">
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

@endsection