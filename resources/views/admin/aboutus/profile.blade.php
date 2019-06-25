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
                    <h2 class="pageheader-title">Page - Tentang Kami - Profil</h2>
                    
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/aboutus" class="breadcrumb-link">Tentang Kami</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profil</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <button class="btn-primary btn fa fa-plus" data-toggle="modal" data-target="#add1"></i> Tambah</button>
            
                <div class="row">

                    <div class="card">
                        <h5 class="card-header">Profil BAPKM ITS - AP</h5>
                        @foreach($profap as $data)
                        @if($data->type == 5)
                        {!!Form::model($data,['method'=>'PATCH', 'action'=>['AboutusController@update',$data->id ]]) !!}
                        {{ csrf_field() }}
                        <div class="card-body">
                            <ul style="color: red;font-size: 0.75rem;">
                                <li class="fa fa-asterisk">
                                    <em> Form Wajib diisi </em>
                                </li>
                            </ul>

                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div>
                                            <img width="100%" height="250" />
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div>
                                            <img width="100%" height="250" />
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div>
                                            <img width="100%" height="250" />
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">

                                  <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                      <div class="col-md-12">
                                          <label for="description">Deskripsi</label>
                                          <textarea name="description" id="summernote_add" style="visibility: hidden; display: none;"></textarea>
                                      </div>
                                      <script>
                                          $('#summernote_add').summernote({
                                              placeholder: 'Tentang BAPKM ITS ... ',
                                              tabsize: 3,
                                              height: 218
                                          });
                                      </script>
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
                        {{!! Form::close() !!}}
                        @else
                        @endif
                        @endforeach
                    </div>

                </div>
        </div>
        <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <form method="POST" action="{{ route('admin.aboutus.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="card">
                        <h5 class="card-header">Profil BAPKM ITS - KM</h5>
                        <div class="card-body">
                            <ul style="color: red;font-size: 0.75rem;">
                                <li class="fa fa-asterisk">
                                    <em> Form Wajib diisi </em>
                                </li>
                            </ul>

                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div>
                                            <img width="100%" height="250" />
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div>
                                            <img width="100%" height="250" />
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div>
                                            <img width="100%" height="250" />
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">

                                  <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                      <div class="col-md-12">
                                          <label for="description">Deskripsi</label>
                                          <textarea name="description" id="summernote_add2" style="visibility: hidden; display: none;"></textarea>
                                      </div>
                                      <script>
                                          $('#summernote_add2').summernote({
                                              placeholder: 'Tentang BAPKM ITS ... ',
                                              tabsize: 3,
                                              height: 218
                                          });
                                      </script>
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

        </div> -->

    </div>
</div>

<div class="modal fade" id="add1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add1">Form Tambah</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
            </div>
            <form method="POST" action="{{ route('admin.aboutus.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <ul style="color: red;font-size: 0.75rem;">
                        <li class="fa fa-asterisk">
                            <em> Form Wajib diisi </em>
                        </li>
                    </ul>

                    <input width="100%" type="text" class="form-control" style="margin-top: 20px;" name="type[]" value="[1]" hidden="">
                    <div class="row" >

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Gambar1<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div>
                                            <img width="100%" height="250" />
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="image" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Gambar2<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div>
                                            <img width="100%" height="250" />
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="image1" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Gambar3<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div>
                                            <img width="100%" height="250" />
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="image2" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">

                                  <div class="form-group {{ $errors->has('longText') ? ' has-error' : '' }}">
                                      <div class="col-md-12">
                                          <label for="longText">Deskripsi</label>
                                          <textarea name="longText" id="summernote_add" style="visibility: hidden; display: none;"></textarea>
                                          <!-- {!! Form::label('description', 'Deskripsi') !!} {!! Form::textarea('description',null, array('class' => 'form-control','placeholder'=>'SOP ini tentang ... ', 'required', 'visibility'=>'hidden')) !!} @if ($errors->has('description'))
                                                  <span class="help-block">
                                                          <strong>{{ $errors->first('description') }}</strong>
                                                      </span> @endif -->
                                      </div>
                                      <script>
                                          $('#summernote_add').summernote({
                                              placeholder: 'Tentang BAPKM ITS ... ',
                                              tabsize: 3,
                                              height: 218
                                          });
                                      </script>
                                  </div>

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
