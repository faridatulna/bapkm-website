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
    $('.file-upload').file_upload();
</script>
@stop @extends('layouts.app-admin') @section('content')

<div class="dashboard-main-wrapper">

    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Page - Home - Carousel</h2>
                    <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Page-Home</a></li>
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
                    <h5 class="card-header">Carousel - Home</h5>
                    <div class="card-body">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators1" data-slide-to="0"></li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                @foreach($datas as $data) 
                                @if($data[0])
                                <div class="carousel-item active">
                                    @if($data->fileImg)
                                    <img class="d-block w-100" src="{{ url('Uploaded/Images/Banner',$data->fileImg) }}"> @else
                                    <img class="d-block w-100" src="https://dummyimage.com/1200x375/bebec2/fff.png">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3 class="text-white">Tidak Ada Gambar</h3>
                                        <!-- <p>Mauris fermentum elementum ligula in efficitur. Aliquam id congue lorem. Proin consectetur feugiat enim ut luctus. Aliquam pellentesque ut tellus ultricies bibendum.</p> -->
                                    </div>
                                    @endif
                                </div>

                                @else

                                <div class="carousel-item">
                                    @if($data->fileImg)
                                    <img class="d-block w-100" src="{{ url('Uploaded/Images/Banner',$data->fileImg) }}"> @else
                                    <img class="d-block w-100" src="https://dummyimage.com/1200x375/bebec2/fff.png">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3 class="text-white">Tidak Ada Gambar</h3>
                                        <!-- <p>Mauris fermentum elementum ligula in efficitur. Aliquam id congue lorem. Proin consectetur feugiat enim ut luctus. Aliquam pellentesque ut tellus ultricies bibendum.</p> -->
                                    </div>
                                    @endif
                                </div>
                                @endif @endforeach
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
            <button class="btn btn-primary fa fa-plus" data-toggle="modal" data-target="#addcar">Tambah Carousel</button>

            <div class="col-12">
            
            <?php $i=1; ?>
                @foreach($datas as $data) 
                {!!Form::model($data,['method'=>'PATCH', 'action'=>['HomeAdminController@update',$data->id ]]) !!}
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Carousel {{$i++}}</h5>
                        <div class="card-body">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="col-md-10">
                                            <img width="250" height="100" @if($data->fileImg) src="{{ url('Uploaded/Images/Banner',$data->fileImg) }} @endif" />
                                            <input type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg" width="300" height="250">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer pull-center">
                            <button class="btn btn-success fa fa-check" type="submit"></button>
                            <button class="btn btn-warning fa fa-edit" type="submit"></button>
                            <button class="btn btn-danger fa fa-trash" type="submit"></button>
                        </div>
                    </div>
                </div>
                
                {!! Form::close() !!} 
                @endforeach
                </div>
        </div>
        <!-- <div class="row pull-right">
            <button class="btn btn-success fa-fa-check" type="submit">Simpan Carousel</button>
        </div> -->
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
            <form method="POST" action="{{ route('admin.home.carousel.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <ul style="color: red;font-size: 0.75rem;">
                        <li class="fa fa-asterisk">
                            <em> Form Wajib diisi </em>
                        </li>
                    </ul>

                    <div class="form-group required {{ $errors->has('fileImg') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                        <div class="col-md-10">
                            <img width="725" height="300" />
                            <input type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
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