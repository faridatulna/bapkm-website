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
                <div class="card">
                    <div class="card-body">
                        <div class="d-inline-block">
                            <h5 class="text-muted">Total Artikel</h5>
                            <h2 class="mb-0"> {{ $article->count() }}</h2>
                        </div>
                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                            <i class="fa fa-newspaper fa-fw fa-sm text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-inline-block">
                            <h5 class="text-muted">Total Agenda</h5>
                            <h2 class="mb-0"> {{ $event->count() }}</h2>
                        </div>
                        <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                            <i class="fa fa-calendar fa-fw fa-sm text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-10">
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <h5 class="card-header">Kalendar</h5>

                    <div class="card-body">
                        <!-- <button class="btn-primary btn fa fa-plus mb-4" data-toggle="modal" data-target="#addcal"><i class="fa fa-add"></i> Tambah</button> -->
                        @if($datas->count())
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Tanggal Post</th>
                                    <th scope="col">File PDF</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                    @foreach($datas as $data)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{ $data->title}}</td>
                                        <td>{{ $data->postDate }}</td>
                                        <td><a href="">File PDF</a></td>
                                        <td>
                                            <button class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#editcal{{ $data->id }}"></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#delcal{{ $data->id }}"></button>
                                        </td>
                                    </tr>

                                    @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-warning">
                            <i class="fa fa-exclamation-triangle"></i> Data Kalender tidak ditemukan</div>
                        @endif
                    </div>
                    <div class="card-footer">
                        {{ $datas->links() }}
                    </div>

                </div>

            </div>

            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <h5 class="card-header">Agenda</h5>
                    <div class="card-body">
                        <!-- <button class="btn btn-primary fa fa-plus mb-4" data-toggle="modal" data-target="#addevent">Tambah</button> -->
                        @if($event->count())
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">title</th>
                                    <th scope="col">dateofEvent</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                    @foreach($event as $data)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{ $data->title}}</td>
                                        <td>{{ $data->dateofEvent }}</td>
                                        <td>
                                            <button class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#editevent{{ $data->id }}"></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#delevent{{ $data->id }}"></button>
                                        </td>
                                    </tr>

                                    @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-warning">
                            <i class="fa fa-exclamation-triangle"></i> Data Agenda tidak ditemukan</div>
                        @endif
                    </div>
                    <div class="card-footer">
                        {{ $event->links() }}
                    </div>

                </div>

            </div>

            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <h5 class="card-header">Quick Links</h5>

                    <div class="card-body">
                        <!-- <button class="btn btn-primary fa fa-plus pull-right mb-4" data-toggle="modal" data-target="#addlinks">Tambah</button> -->
                        @if($links->count())
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">title</th>
                                    <th scope="col">url</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                    @foreach($links as $data)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{ $data->title}}</td>
                                        <td>{{ $data->url }}</td>
                                        <td>
                                            <button class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#editlinks{{ $data->id }}"></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#dellinks{{ $data->id }}"></button>
                                        </td>
                                    </tr>

                                    @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-warning">
                            <i class="fa fa-exclamation-triangle"></i> Data Quick Links tidak ditemukan</div>
                        @endif
                    </div>

                    <div class="card-footer">
                        {{ $links->links() }}
                    </div>
                </div>

            </div>

        </div>

        
    </div>
</div>

@endsection