@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>

@stop @extends('layouts.app') @section('content')

<div class="container">
    <div class="col-md-12">
        <div class="page-header">
            <h1>Struktur Organisasi</h1>
        </div>
        <div style="display:inline-block;width:100%;overflow-y:auto;">

        </div>
    </div>
</div>

<div class="container">

    <img src="{{asset('Uploaded/organigram.jpg')}}">
</div>

@endsection
