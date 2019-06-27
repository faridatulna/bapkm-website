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
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit Profile</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <form action="{{ route('admin.user.update', $data->id) }}" method="post" enctype="multipart/form-data">{{ csrf_field() }} {{ method_field('put') }}
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label for="email" class="col-md-6 control-label">Gambar</label>
                                                    <div class="col-md-8">
                                                        <img class="product" width="200" height="200" @if($data->gambar) src="{{ asset('Uploaded/Admin/'.$data->gambar) }}" @endif />
                                                        <input type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar">
                                                    </div>
                                                </div>
                                                <div class="form-group required{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label for="name" class="col-md-6 control-label">Name</label>
                                                    <div class="col-md-8">
                                                        <input id="name" type="text" class="form-control" name="name" value="{{ $data->name }}" required autofocus> @if ($errors->has('name'))
                                                        <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span> @endif
                                                    </div>
                                                </div>
                                                <div class="form-group required{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label for="email" class="col-md-6 control-label">E-Mail Address</label>
                                                    <div class="col-md-8">
                                                        <input id="email" type="email" class="form-control" name="email" value="{{ $data->email }}" required readonly=""> @if ($errors->has('email'))<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span> @endif
                                                    </div>
                                                </div>

                                                
                                            </div>

                                            <div class="col-xl-6"">
                                                <div class="form-group required{{ $errors->has('username') ? ' has-error' : '' }}">
                                                    <label for="username" class="col-md-6 control-label">Username</label>
                                                    <div class="col-md-8">
                                                        <input id="username" type="text" class="form-control" name="username" value="{{ $data->username }}" required readonly=""> @if ($errors->has('username'))
                                                        <span class="help-block"><strong>{{ $errors->first('username') }}</strong></span> @endif
                                                    </div>
                                                </div>
                                                <div class="form-group required{{ $errors->has('role_id') ? ' has-error' : '' }}" >
                                                    <label for="role_id" class="col-md-6 control-label">Level</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="role_id" required="" disabled="">
                                                            <option value="1" @if($data->role_id == 1) selected @endif>Admin-AP</option>
                                                            <option value="2" @if($data->role_id == 2) selected @endif>Admin-KM</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="email" class="col-md-6 control-label">Current Password</label>
                                                    <div class="col-md-8">
                                                        <input id="password" type="text" class="form-control" name="password" value="{{ $data->pass_seen }}" required readonly=""> @if ($errors->has('password'))<span class="help-block"><strong>{{ $errors->first('password') }}</strong></span> @endif
                                                    </div>
                                                </div>

                                                <div class="form-group required{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="password" class="col-md-6 control-label">New Password</label>
                                                    <div class="col-md-8">
                                                        <input id="password" type="password" class="form-control" onkeyup='check();' name="password" @if ($errors->has('password'))<span class="help-block"><strong>{{ $errors->first('password') }}</strong></span> @endif
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="password-confirm" class="col-md-6 control-label">Confirm Password</label>
                                                    <div class="col-md-8">
                                                        <input id="confirm_password" type="password" onkeyup="check()" class="form-control" name="password_confirmation">
                                                        <span id='message'></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-8">
                                                       <button type="submit" class="btn btn-success float-right" id="submit">
                                                            <i class="fa fa-check"></i> Update
                                                        </button> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection