@section('js')
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

    var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('submit').disabled = false;
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
        } else {
            document.getElementById('submit').disabled = true;
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'not matching';
        }
    }
</script>
@stop @extends('layouts.app-admin') @section('content')

<form action="{{ route('admin.user.update', $data->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }} {{ method_field('put') }}
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('admin.user.index')}}" class="btn btn-light pull-left"><i class="fa fa-angle-left"></i>Back</a>
                            <br></br>
                            <h4 class="card-title">Edit user</h4>
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="email" class="col-md-4 control-label">Gambar</label>
                                            <div class="col-md-6">
                                                <img class="product" width="200" height="200" @if($data->gambar) src="{{ asset('adminlte/images/user/'.$data->gambar) }}" @endif />
                                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Name</label>
                                                <div class="col-md-8">
                                                    <input id="name" type="text" class="form-control" name="name" value="{{ $data->name }}" required autofocus> @if ($errors->has('name'))
                                                    <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span> @endif
                                                </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                            <label for="username" class="col-md-4 control-label">Username</label>
                                                <div class="col-md-8">
                                                    <input id="username" type="text" class="form-control" name="username" value="{{ $data->username }}" required readonly=""> @if ($errors->has('username'))
                                                    <span class="help-block"><strong>{{ $errors->first('username') }}</strong></span> @endif
                                                </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                                <div class="col-md-8">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ $data->email }}" required readonly=""> @if ($errors->has('email'))<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span> @endif
                                                </div>
                                        </div>

                                        @if(Auth::user()->role_id == 0)
                                        <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
                                            <label for="role_id" class="col-md-4 control-label">Level</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="role_id" required="">
                                                        <option value="1" @if($data->role_id == 1) selected @endif>Admin-AP</option>
                                                        <option value="2" @if($data->role_id == 2) selected @endif>Admin-KM</option>
                                                    </select>
                                                </div>
                                        </div>
                                        @endif

                                        <!-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">Current Password</label>
                                                <div class="col-md-8">
                                                    <input id="password" type="password" class="form-control" name="password" value="{{ $data->password }}" required readonly=""> @if ($errors->has('password'))<span class="help-block"><strong>{{ $errors->first('password') }}</strong></span> @endif
                                                </div>
                                        </div> -->

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="col-md-4 control-label">New Password</label>
                                                <div class="col-md-8">
                                                    <input id="password" type="password" class="form-control" onkeyup='check();' name="password" @if ($errors->has('password'))<span class="help-block"><strong>{{ $errors->first('password') }}</strong></span> @endif
                                                </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                                <div class="col-md-8">
                                                    <input id="confirm_password" type="password" onkeyup="check()" class="form-control" name="password_confirmation">
                                                    <span id='message'></span>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right" id="submit">
                                Update
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>
@endsection