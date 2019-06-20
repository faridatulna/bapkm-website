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
                <div class="card">
                    <h5 class="card-header">Form - Artikel</h5>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <form method="POST" action="{{ route('admin.article.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic form -->
                    <!-- ============================================================== -->

                    <div class="card">
                        <h5 class="card-header">Form</h5>
                        <div class="card-body">
                            <ul style="color: red;font-size: 0.75rem;">
                                <li class="fa fa-asterisk">
                                    <em> Form Wajib diisi </em>
                                </li>
                            </ul>

                            <div class="form-group required {{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="col-md-6 control-label">Jenis Artikel</label>
                                <div class="col-md-11">
                                    <select class="form-control" name="type[]" required="">
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
                                            {!! Form::label('description', 'Deskripsi') !!} {!! Form::textarea('description',null, array('class' => 'form-control','placeholder'=>'Artikel ini tentang ... ', 'required')) !!} @if ($errors->has('description'))
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
                        <div class="card-footer">
                            <div class="pull-right" style="margin-right: 103px;">
                                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </div>

                </div>
                </form>
        </div>
        
    </div>
</div>

@endsection