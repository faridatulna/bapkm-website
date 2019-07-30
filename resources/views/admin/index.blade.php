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

        <div class="row mt-10">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Running Message</h5>
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
                                    <tr class="table-info">
                                        <th scope="row">{{$i++}}</th>
                                        <td>pesan pesan</td>
                                        <td>start date - end date</td>
                                        <td>ongoing, posted</td>
                                        <td></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-10">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header" style="text-transform: uppercase; text-align: center;">TOP 5 Artikel</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Viewer</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;?>
                                    @foreach($top_article as $data)
                                    <tr class="table-primary">
                                        <th scope="row">{{$i++}}</th>
                                        <td>{!! $data->title !!}</td>
                                        <td>{{ $data->viewer }}</td>
                                        <td><a href="/article-page/{{ $data->id }}"><i class="fas fa-external-link-alt"></i></td>
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
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Pengunjung</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;?>
                                    @foreach($latest_visitor as $data)
                                    <tr class="table-success">
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
    </div>
</div>

@endsection