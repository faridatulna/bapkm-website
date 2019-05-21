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

<form method="POST" action="{{ route('admin.article.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            
                        </div> -->
                        <div class="card-body">
                            <a href="{{route('admin.article.index')}}" class="btn btn-light pull-left"><i class="fa fa-angle-left"></i>Back</a>
                            <br></br>
                            <h4 class="card-title"><strong>Tambah Article</strong></h4>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email" class="col-md-4 control-label">Gambar</label>
                                            <div class="col-md-10">
                                                <img width="300" height="300" />
                                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                            <label for="title" class="col-md-6 control-label">Judul</label>
                                            <div class="col-md-11">
                                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required> @if ($errors->has('title'))
                                                <span class="help-block">
                                                                <strong>{{ $errors->first('title') }}</strong>
                                                            </span> @endif
                                            </div>

                                        </div>
                                        <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                            <div class="col-11">
                                                {!! Form::label('description', 'Deskripsi') !!} {!! Form::textarea('description',null, array('class' => 'form-control','placeholder'=>'Deskripsi', 'required')) !!}
                                                @if ($errors->has('description'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span> @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>
@endsection