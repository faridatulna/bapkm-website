@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('layouts.app-admin')

@section('content')
<div class="row">
    <!-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Transaksi</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$article->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total seluruh transaksi
                  </p>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Sedang Pinjam</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$user->where('status', 'pinjam')->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> sedang dipinjam
                  </p>
                </div>
              </div>
            </div> -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-newspaper text-success icon-lg" style="width: 40px;height: 40px;"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Article</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$article->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-book mr-1" aria-hidden="true"></i> Total Article
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Anggota</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$user->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total seluruh anggota
                  </p>
                </div>
              </div>
            </div>
</div>

<div class="row" style="margin-top: 20px;">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header">
                  <a href="{{ route('admin.user.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah User</a>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Data User</h4>
                  
                  <div class="table-responsive">
                    <table id="table" class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Name
                          </th>
                          <th>
                            Username
                          </th>
                          <th>
                            Level
                          </th>
                          <th>
                            Created At
                          </th>
                          @if(Auth::user()->role_id == 0)
                          <th>
                            Action
                          </th>
                          @endif
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($user as $data)
                        <tr>
                          <td class="py-1">
                          @if($data->gambar)
                            <img src="{{url('adminlte/images/user', $data->gambar)}}" alt="image" style="margin-right: 10px;" />
                          @else
                            <img src="{{url('adminlte/images/user/default.png')}}" alt="image" style="margin-right: 10px;" />

                          @endif


                            {{$data->name}}
                          </td>
                          <td>
                          @if(Auth::user()->role_id == 0)
                          <a href="{{route('admin.user.show', $data->id)}}"> 
                          @endif
                          {{$data->username}}
                          </a>
                          </td>
                          <td>
                            @if($data->role_id == 0)
                              Super Admin
                            @elseif($data->role_id == 1)
                              Admin-AP
                            @elseif($data->role_id == 2)
                              Admin-KM
                            @endif
                          </td>
                          <td>
                            {{$data->created_at}}
                          </td>
                          @if(Auth::user()->role_id == 0)
                          <td>
                           <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                            <a class="dropdown-item" href="{{route('admin.user.edit', $data->id)}}"> Edit </a>
                            <form action="{{ route('admin.user.destroy', $data->id) }}" class="pull-left"  method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                            </button>
                          </form>
                          </div>
                        </div>
                          </td>
                          @endif
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                  {{-- {!! $user->links() !!} --}}
                </div>
              </div>
            </div>
          </div>
          
@endsection
