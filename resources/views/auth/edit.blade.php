@section('js')

@stop @extends('layouts.app-admin') @section('content')

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
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-block" id="basicform">
                <h3 class="section-title">Basic Form Elements</h3>
                <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p>
            </div>
            <div class="card">
                <h5 class="card-header">Basic Form</h5>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Input Text</label>
                            <input id="inputText3" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email address</label>
                            <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control">
                            <p>We'll never share your email with anyone else.</p>
                        </div>
                        <div class="form-group">
                            <label for="inputText4" class="col-form-label">Number Input</label>
                            <input id="inputText4" type="number" class="form-control" placeholder="Numbers">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input id="inputPassword" type="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">File Input</label>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="card-body border-top">
                    <h3>Sizing</h3>
                    <form>
                        <div class="form-group">
                            <label for="inputSmall" class="col-form-label">Small</label>
                            <input id="inputSmall" type="text" value=".form-control-sm" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="inputDefault" class="col-form-label">Default</label>
                            <input id="inputDefault" type="text" value="Default input" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputLarge" class="col-form-label">Large</label>
                            <input id="inputLarge" type="text" value=".form-control-lg" class="form-control form-control-lg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- <form action="{{ route('admin.user.update', $data->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }} {{ method_field('put') }}
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('admin.user.index')}}" class="btn btn-light pull-left"><i class="fa fa-angle-left"></i>Back</a>
                            <br></br>
                            <h4 class="card-title">Edit Profile</h4>
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
                                        <div class="form-group required{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="col-md-4 control-label">Name</label>
                                                <div class="col-md-8">
                                                    <input id="name" type="text" class="form-control" name="name" value="{{ $data->name }}" required autofocus> @if ($errors->has('name'))
                                                    <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span> @endif
                                                </div>
                                        </div>
                                        <div class="form-group required{{ $errors->has('username') ? ' has-error' : '' }}">
                                            <label for="username" class="col-md-4 control-label">Username</label>
                                                <div class="col-md-8">
                                                    <input id="username" type="text" class="form-control" name="username" value="{{ $data->username }}" required readonly=""> @if ($errors->has('username'))
                                                    <span class="help-block"><strong>{{ $errors->first('username') }}</strong></span> @endif
                                                </div>
                                        </div>

                                        <div class="form-group required{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                                <div class="col-md-8">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ $data->email }}" required readonly=""> @if ($errors->has('email'))<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span> @endif
                                                </div>
                                        </div>

                                        @if(Auth::user()->role_id == 0)
                                        <div class="form-group required{{ $errors->has('role_id') ? ' has-error' : '' }}">
                                            <label for="role_id" class="col-md-4 control-label">Level</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="role_id" required="">
                                                        <option value="1" @if($data->role_id == 1) selected @endif>Admin-AP</option>
                                                        <option value="2" @if($data->role_id == 2) selected @endif>Admin-KM</option>
                                                    </select>
                                                </div>
                                        </div>
                                        @endif

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">Current Password</label>
                                                <div class="col-md-8">
                                                    <input id="password" type="text" class="form-control" name="password" value="{{ $data->pass_seen }}" required readonly=""> @if ($errors->has('password'))<span class="help-block"><strong>{{ $errors->first('password') }}</strong></span> @endif
                                                </div>
                                        </div>

                                        <div class="form-group required{{ $errors->has('password') ? ' has-error' : '' }}">
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
</form> -->