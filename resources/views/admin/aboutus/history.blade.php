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
        else if(input.files){
            var reader = new FileReader();
            reader.onload = function(e) {
                $(input).prev().attr('src', e.target.result);
            }
            var total= input.files.length > 1;
            for(var i=0 ; i<total ; i++){
                reader.readAsDataURL(input.files[i]);
            }
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

<script type="text/javascript">



  $("#uploadFile").change(function(){

     $('#image_preview').html("");

     var total_file=document.getElementById("uploadFile").files.length;

     for(var i=0;i<total_file;i++)

     {

      $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
     }

  });

  $('form').ajaxForm(function() {
    alert("Uploaded SuccessFully");
    }); 



</script>

<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>

@stop @extends('layouts.app-admin') @section('content')

<div class="dashboard-main-wrapper">

    <div class="container-fluid dashboard-content">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <div class="row">
                 @foreach($histlogo as $data)
                <div class="card">

                    <h5 class="card-header">
                        <!-- <button class="btn-primary btn fa fa-plus" data-toggle="modal" data-target="#add1"></i> Tambah</button> -->
                    </h5>
                    {!!Form::model($data,['method'=>'PATCH', 'action'=>['AboutusController@update',$data->id ]]) !!}
                                    {{ csrf_field() }}
                        <div class="card-body">
                            <ul style="color: red;font-size: 0.75rem;">
                                <li class="fa fa-asterisk">
                                    <em> Form Wajib diisi </em>
                                </li>
                            </ul>
                            
                            <div class="row">

                                <input width="100%" type="text" class="form-control" style="margin-top: 20px;" name="type[]" hidden="" value="[1]">
                                <input width="100%" type="text" class="form-control" style="margin-top: 20px;" name="title" hidden="" value="">
                                <input width="100%" type="text" class="form-control" style="margin-top: 20px;" name="year" hidden="" value="">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="file" class="col-md-7 control-label">Gambar Logo<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div>
                                            <img width="100%" height="250" @if($data->image) src="{{ url('Uploaded/Aboutus',$data->image) }}" @endif/>
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="image" accept=".jpg,.png,.jpeg,.svg">
                                            <input type="hidden" name="hidden_image" value="{{$data->image}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-8">

                                    <div class="form-group {{ $errors->has('longText') ? ' has-error' : '' }}">
                                        <div class="col-md-12">
                                            <label for="longText">Deskripsi</label>
                                            <textarea name="longText" id="summernote_add" style="visibility: hidden; display: none;">{!! $data->longText !!}</textarea>
                                            
                                        </div>
                                        <script>
                                            $('#summernote_add').summernote({
                                                placeholder: 'Sejarah BAPKM ITS ... ',
                                                tabsize: 3,
                                                height: 218
                                            });
                                        </script>
                                    </div>

                                </div>
                                
                            </div>
                            

                            <!-- <div class="row">

                                <div class="col-lg-12" style="padding-left: 0;">
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Gambar<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div class="col-lg-12">
                                            <img width="100%" height="250" style="overflow:scroll;"/>
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                </div>

                            </div>

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
                            </div> -->

                        </div>

                        <div class="card-footer">
                            <div class="pull-right" style="margin-right: 103px;">
                                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </div> 
                        {!! Form::close() !!}
                </div>
                @endforeach
            </div>

            <!-- <div class="row">
                <div class="card">
                    <h5 class="card-header">
                        <button class="btn-primary btn fa fa-plus" data-toggle="modal" data-target="#add2"></i> Tambah</button>
                    </h5>
                        
                </div>
                </form>
            </div>

            <div class="row">
                <div class="card">
                    <h5 class="card-header">
                        <button class="btn-primary btn fa fa-plus" data-toggle="modal" data-target="#add3"></i> Tambah</button>
                    </h5>
                        
                </div>
                </form>
            </div> -->
            
        </div>

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

                    <div class="row">
                                <input width="100%" type="text" class="form-control" style="margin-top: 20px;" name="type[]" hidden="" value="[1]">
                                <input width="100%" type="text" class="form-control" style="margin-top: 20px;" name="title" hidden="" value="">
                                <input width="100%" type="text" class="form-control" style="margin-top: 20px;" name="longText" hidden="" value="">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="file" class="col-md-7 control-label">Gambar Logo<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div>
                                            <img width="100%" height="250" />
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="image" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-8">

                                    <div class="form-group {{ $errors->has('longText') ? ' has-error' : '' }}">
                                        <div class="col-md-12">
                                            <label for="longText">Deskripsi</label>
                                            <textarea name="longText" id="summernote_add1" style="visibility: hidden; display: none;"></textarea>
                                            <!-- {!! Form::label('description', 'Deskripsi') !!} {!! Form::textarea('description',null, array('class' => 'form-control','placeholder'=>'SOP ini tentang ... ', 'required', 'visibility'=>'hidden')) !!} @if ($errors->has('description'))
                                                  <span class="help-block">
                                                          <strong>{{ $errors->first('description') }}</strong>
                                                      </span> @endif -->
                                        </div>
                                        <script>
                                            $('#summernote_add1').summernote({
                                                placeholder: 'Sejarah BAPKM ITS ... ',
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
<div class="modal fade" id="add2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add2">Form Tambah</h5>
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

                    <div class="row">
                                <input width="100%" type="text" class="form-control" style="margin-top: 20px;" name="type[]" hidden="" value="[1]">
                                <input width="100%" type="text" class="form-control" style="margin-top: 20px;" name="title" hidden="" value="">
                                <input width="100%" type="text" class="form-control" style="margin-top: 20px;" name="longText" hidden="" value="">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="file" class="col-md-7 control-label">Gambar Logo<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div>
                                            <img width="100%" height="250" />
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="image" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-8">

                                    <div class="form-group {{ $errors->has('longText') ? ' has-error' : '' }}">
                                        <div class="col-md-12">
                                            <label for="longText">Deskripsi</label>
                                            <textarea name="longText" id="summernote_add2" style="visibility: hidden; display: none;"></textarea>
                                            <!-- {!! Form::label('description', 'Deskripsi') !!} {!! Form::textarea('description',null, array('class' => 'form-control','placeholder'=>'SOP ini tentang ... ', 'required', 'visibility'=>'hidden')) !!} @if ($errors->has('description'))
                                                  <span class="help-block">
                                                          <strong>{{ $errors->first('description') }}</strong>
                                                      </span> @endif -->
                                        </div>
                                        <script>
                                            $('#summernote_add2').summernote({
                                                placeholder: 'Sejarah BAPKM ITS ... ',
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
<div class="modal fade" id="add3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add3">Form Tambah</h5>
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

                    <div class="row">
                                <input width="100%" type="text" class="form-control" style="margin-top: 20px;" name="type[]" hidden="" value="[1]">
                                <input width="100%" type="text" class="form-control" style="margin-top: 20px;" name="title" hidden="" value="">
                                <input width="100%" type="text" class="form-control" style="margin-top: 20px;" name="longText" hidden="" value="">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="file" class="col-md-7 control-label">Gambar Logo<i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                        <div>
                                            <img width="100%" height="250" />
                                            <input width="100%" type="file" class="uploads form-control" style="margin-top: 20px;" name="image" accept=".jpg,.png,.jpeg,.svg">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-8">

                                    <div class="form-group {{ $errors->has('longText') ? ' has-error' : '' }}">
                                        <div class="col-md-12">
                                            <label for="longText">Deskripsi</label>
                                            <textarea name="longText" id="summernote_add3" style="visibility: hidden; display: none;"></textarea>
                                            <!-- {!! Form::label('description', 'Deskripsi') !!} {!! Form::textarea('description',null, array('class' => 'form-control','placeholder'=>'SOP ini tentang ... ', 'required', 'visibility'=>'hidden')) !!} @if ($errors->has('description'))
                                                  <span class="help-block">
                                                          <strong>{{ $errors->first('description') }}</strong>
                                                      </span> @endif -->
                                        </div>
                                        <script>
                                            $('#summernote_add3').summernote({
                                                placeholder: 'Sejarah BAPKM ITS ... ',
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