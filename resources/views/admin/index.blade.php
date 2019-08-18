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
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <a><div class="card">
                    <div class="card-body">
                        <div class="d-inline-block">
                            <h5 class="text-muted">Total Admin</h5>
                            <h2 class="mb-0"> {{ $user->count() }}</h2>
                        </div>
                        <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                            <i class="fa fa-user fa-fw fa-sm text-info"></i>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <a href="/admin/article"><div class="card">
                    <div class="card-body">
                        <div class="d-inline-block">
                            <h5 class="text-muted">Total Artikel</h5>
                            <h2 class="mb-0"> {{ $article->count() }}</h2>
                        </div>
                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                            <i class="fa fa-newspaper fa-fw fa-sm text-info"></i>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <a href="/admin/event"><div class="card">
                    <div class="card-body">
                        <div class="d-inline-block">
                            <h5 class="text-muted">Total Agenda</h5>
                            <h2 class="mb-0"> {{ $event->count() }}</h2>
                        </div>
                        <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                            <i class="fa fa-calendar fa-fw fa-sm text-primary"></i>
                        </div>
                    </div>
                </div></a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-inline-block">
                            <h5 class="text-muted">Total Pengunjung</h5>
                            <h2 class="mb-0"> {{ $visitors }}</h2> 
                        </div>
                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                            <i class="fa fa-users fa-fw fa-sm text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-10" >
            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Customer Satisfaction</h5><span class="badge badge-primary badge-pill">Total {{ $customers->count() }} Responder</span>
                    </div>
                    <!-- <div class="card-body"> -->
                         <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="cd">
                                    <!-- <span>Excelent</span> -->
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                </div>
                                <a href="/admin/customers/5"><span class="badge badge-primary badge-pill">{{ $customers->where('rating',5)->count() }}</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"> 
                                <div class="cd">
                                    <!-- <span>Good</span> -->
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star "></span> 
                                </div>
                                <a href="/admin/customers/4"><span class="badge badge-primary badge-pill">{{ $customers->where('rating',4)->count() }}</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"> 
                                <div class="cd">
                                    <!-- <span>Average</span> -->
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star "></span>
                                    <span class="star fa fa-star "></span> 
                                </div>
                                <a href="/admin/customers/3"><span class="badge badge-primary badge-pill">{{ $customers->where('rating',3)->count() }}</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                
                                <div class="cd">
                                    <!-- <span>Poor</span> -->
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star "></span>
                                    <span class="star fa fa-star "></span>
                                    <span class="star fa fa-star "></span>
                                </div>
                                <a href="/admin/customers/2"><span class="badge badge-primary badge-pill">{{ $customers->where('rating',2)->count() }}</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="cd">
                                    <!-- <span>Terrible</span> -->
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star "></span>
                                    <span class="star fa fa-star "></span>
                                    <span class="star fa fa-star "></span>
                                    <span class="star fa fa-star "></span>
                                </div>
                                <a href="/admin/customers/1"><span class="badge badge-primary badge-pill">{{ $customers->where('rating',1)->count() }}</span></a>
                            </li>
                        </ul>
                    <!-- </div> -->
                </div>
            </div>
        </div>

        <div class="row mt-10">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header" style="text-transform: uppercase; text-align: center;">TOP 5 Artikel</h5>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <?php $i = 1;?>
                                    @foreach($top_article as $data)
                                    <tr class="table-primary">
                                        <th scope="row">{{$i++}}</th>
                                        <td scope="row">{!! $data->title !!}</td>
                                        <td scope="row"><a href="/article-page/{{ $data->id }}"><i class="fas fa-external-link-alt"></i></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                 </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header" style="text-transform: uppercase; text-align: center;">Latest Visitor</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Pengunjung</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;?>
                                    @foreach($latest_visitor as $data)
                                    <tr class="table-success">
                                        <td>{{$i++}}</td>
                                        <td>{!! $data->visit_date !!}</td>
                                        <td>{{ $data->today_visitors }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                 </div>
            </div> 
        </div>

        <div class="row mt-10">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Running Message
                            <button class="btn btnlike float-right" data-toggle="modal" data-target="#add" data-toggle="tooltip" title="Tambah"><i class="fa fa-plus"></i></button>
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Periode</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                @foreach( $announce as $announce )
                                <tr class="table-light">
                                    <td scope="row">{{$i++}}</td>
                                    <td>{{$announce->message}}</td>
                                    <td>{{$announce->dt_start}} - {{$announce->dt_end}}</td>
                                    @if( $cdatetime > $announce->dt_start && $cdatetime < $announce->dt_end )
                                    <td>published</td>
                                    @else
                                    <td>ongoing</td>
                                    @endif
                                    <td><span data-toggle="modal" data-target="#delrm{{ $data->id }}" data-toggle="tooltip" title="Hapus" class="fa fa-times" style="color: red;"> 
                                </span></td>
                                </tr>

                                <!--del-->
                                <div class="modal fade" id="delrm{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="delrm{{ $data->id}}"><strong>Hapus Kategori</strong></h5>
                                                <button class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {!! Form::open(array('route' => array('admin.delrunningtext', $data->id), 'method' => 'delete')) !!} Anda Yakin Ingin Menghapus Data ??
                                            </div>
                                            <div class="modal-footer pull-right" style="margin-right: 12px;">
                                                {!! Form::button('<i class="fa fa-times-square"></i>'. 'Close', array('type' => 'close', 'class' => 'btn btn-secondary', 'data-dismiss' => 'modal' ))!!} {!! Form::button('Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))!!}{{ Form::close() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--add-->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add">Form Tambah</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>
                <form method="POST" action="{{ route('admin.addrunningtext') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <ul class="list-unstyled"><li class="required-text"><em> Form wajib diisi <span>*</span></em></li></ul>
                        </div>
                        
                        <div class="form-group required {{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-12 control-label">Pesan<span class="required-text"> *</span></label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="message" placeholder="Pesan">
                            </div>
                        </div>
                        <div class="form-group required {{ $errors->has('time') ? ' has-error' : '' }}">
                            <div class="d-flex">
                                <div class="col-lg-6 align-self-start">
                                    <label for="dt_start">Active Date<span class="required-text"> *</span></label>
                                    <input type="datetime-local" class="form-control" name="dt_start" placeholder="Pesan" required>
                                </div>
                                <div class="col-lg-6 align-self-start">
                                    <label for="dt_end">Expire Date<span class="required-text"> *</span></label>
                                    <input type="datetime-local" class="form-control" name="dt_end" placeholder="Pesan" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="submit">Add</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

@endsection