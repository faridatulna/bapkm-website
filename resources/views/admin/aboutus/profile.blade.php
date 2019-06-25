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

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <form method="POST" action="{{ route('admin.article.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic form -->
                    <!-- ============================================================== -->

                    <div class="card">
                        <h5 class="card-header">Profil BAPKM ITS</h5>
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

                                <div class="col-sm-8">

                                  <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                      <div class="col-md-12">
                                          <label for="description">Deskripsi</label>
                                          <textarea name="description" id="summernote_add" style="visibility: hidden; display: none;"></textarea>
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

                            <br><hr><br>

                            <div class="row">

                              <div class="col-sm-8" style="padding-left: 0;">

                                <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                        <label for="description">Deskripsi</label>
                                        <textarea name="description" id="summernote_add2" style="visibility: hidden; display: none;"></textarea>
                                        <!-- {!! Form::label('description', 'Deskripsi') !!} {!! Form::textarea('description',null, array('class' => 'form-control','placeholder'=>'SOP ini tentang ... ', 'required', 'visibility'=>'hidden')) !!} @if ($errors->has('description'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span> @endif -->
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

                                <div class="col-sm-4" style="padding-left: 0;">
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div>
                                            <img width="100%" height="250" />
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
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
