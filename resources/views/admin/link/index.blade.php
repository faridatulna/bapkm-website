@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable({
            "iDisplayLength": 50
        });

    });
</script>

@stop @extends('layouts.app-admin') @section('content')
<div class="row">

    <div class="col-lg-2">
        <a href="{{ route('admin.article.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Quick Link</a>
    </div>
    <div class="col-lg-12">
        @if (Session::has('message'))
        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
        @endif
    </div>
</div>
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <h4 class="card-title">Data Quick-Links</h4>

                <div class="table-responsive">
                    <table class="table table-striped" id="table">
                        <thead>
                            <tr>
                                <th>Judul Url</th>
                                <th>Url</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->url }}</td>

                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{ $data->id}}"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#del{{ $data->id}}"><i class="fa fa-trash"></i></button>
                                        </form>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#show{{ $data->id}}"><i class="fa fa-eye"></i></button>
  
                                    </div>
                                </td>
                            </tr>

                @endforeach
                </tbody>
                </table>
            </div>
            {{-- {!! $datas->links() !!} --}}
        </div>
    </div>
</div>
</div>
@endsection