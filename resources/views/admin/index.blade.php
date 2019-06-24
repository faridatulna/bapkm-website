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
            
        </div>

        
    </div>
</div>

@endsection