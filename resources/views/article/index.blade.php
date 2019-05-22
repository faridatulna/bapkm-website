@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable({
            "iDisplayLength": 50
        });

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
<div class="row">

    <div class="col-lg-2">
        <a href="{{ route('admin.article.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Article</a>
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
                <h4 class="card-title">Data Anggota</h4>

                <div class="table-responsive">
                    <table class="table table-striped" id="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <!-- <th>Description</th> -->
                                <th>Posting Date</th>
                                <th>Status</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td class="py-1">
                                    @if($data->fileImg)
                                        <img src="{{url('files/', $data->fileImg)}}" alt="image" style="margin-right: 10px;" />
                                    @else
                                        <img src="{{url('adminlte/images/user/default.png')}}" alt="image" style="margin-right: 10px;" />

                                    @endif
                                    {{$data->title}}
                                </td>
                                <td>{{ $data->tgl_post }}</td>
                                <td>{{ $data->status }}</td>

                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{ $data->id}}"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#del{{ $data->id}}"><i class="fa fa-trash"></i></button>
                                        </form>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#show{{ $data->id}}"><i class="fa fa-eye"></i></button>
  
                                    </div>
                                </td>
                            </tr>

                            <!--edit modal-->
                            <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="edit{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="edit{{ $data->id}}">Edit Article</h5>
                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {!!Form::model($data,['method'=>'PATCH', 'action'=>['ArticleController@update',$data->id ]]) !!}
                                            <div class="row gtr-uniform" style="justify-content: center;">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="col-11" style="min-width: 25vw; max-width: 20vw; max-height: 200vh;">
                                                                <img width="300" height="300" @if($data->fileImg) src="{{ asset('files/'.$data->fileImg) }}" @endif />
                                                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff" >
                                                                
                                                                <!-- <img id="outputEdit" width="100" height="250" style="min-width: 25vw; max-width: 20vw; max-height: 200vh;" @if($data->fileImg) src="{{ asset('files/'.$data->fileImg) }}" @endif >
                                                                <script>
                                                                    var loadFile = function(event) {
                                                                        var output = document.getElementById('outputEdit');
                                                                        output.src = URL.createObjectURL(event.target.files[0]);
                                                                    };
                                                                </script>
                                                                <input type="file" class="form-control-file" id="fileImg" name="fileImg" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff" onchange="loadFile(event)" style="margin-top: 20px;">-->
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="col-11">
                                                                {!! Form::label('title', 'Title') !!} {!! Form::text('title', $data->title, array('class' => 'form-control','placeholder'=>'Title', 'required')) !!}
                                                            </div>
                                                            <br/>
                                                            <div class="col-11">
                                                                {!! Form::label('description', 'Description') !!} {!! Form::textarea('description', $data->description, array('class' => 'form-control','placeholder'=>'Description', 'required')) !!}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer" style="margin-right: 2;">
                                            {!! Form::button('<i class="fa fa-times-square"></i>'. 'Close', array('type' => 'close', 'class' => 'btn btn-secondary btn', 'data-dismiss' => 'modal' ))!!} {!! Form::button('<i class="fa fa-check-square"></i>'. 'Update', array('type' => 'submit', 'class' => 'btn btn-primary btn'))!!} {!! Form::close()!!}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!--show modal-->
                            <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="show{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="show{{ $data->id}}">Show Article</h5>
                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row gtr-uniform" style="justify-content: center;">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="col-11" style="min-width: 25vw; max-width: 20vw; max-height: 200vh;">
                                                                <img width="300" height="300" @if($data->fileImg) src="{{ asset('files/'.$data->fileImg) }}" @endif />
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="col-11">
                                                                {!! Form::label('title', 'Title') !!} {!! Form::text('title', $data->title, array('class' => 'form-control','placeholder'=>'Title', 'required','disabled')) !!}
                                                            </div>
                                                            <br/>
                                                            <div class="col-11">
                                                                {!! Form::label('description', 'Description') !!} {!! Form::textarea('description', $data->description, array('class' => 'form-control','placeholder'=>'Description', 'required','disabled')) !!}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer" style="margin-right: 2;">
                                            {!! Form::button('<i class="fa fa-times-square"></i>'. 'Close', array('type' => 'close', 'class' => 'btn btn-secondary btn', 'data-dismiss' => 'modal' ))!!}
                                            @if($data->status == 0) 
                                                <a href="article/posts/{{$data->id}}" class="btn btn-success"><i class="fa fa-eye"></i>Post</a>
                                            @else
                                                <a href="article/posts/{{$data->id}}" class="btn btn-warning"><i class="fa fa-eye-slash"></i>Hide Post</a>
                                            @endif 
                                            {!! Form::close()!!}

                                        </div>

                                    </div>
                                </div>
                            </div>

                             <!--delete modal-->
                            <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="del{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="del{{ $data->id}}">Delete Article</h5>
                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        {!! Form::open(array('route' => array('admin.article.destroy', $data->id), 'method' => 'delete')) !!}

                                        Anda Yakin Ingin Menghapus data ??
                                        </div>
                                        <div class="modal-footer">
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