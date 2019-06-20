@section('js')
<script>
    var edit = function() {
        $('.click2edit').summernote({
            focus: true
        });
    };

    var save = function() {
        var markup = $('.click2edit').summernote('code');
        $('.click2edit').summernote('destroy');
    };
</script>
@stop @extends('layouts.app-admin') @section('content')



<div class="dashboard-main-wrapper">

    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Page - Berita - Single</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Page-Berita</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Single</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Single Page - Berita</h5>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header p-4">
                                     <h1 class="pt-2 d-inline-block">Judul Disini</h1>
                                   
                                    <div class="float-right"> <h3 class="mb-0">Admin</h3>
                                    Date: 3 Dec, 2020</div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <!-- <div id="summernote"></div>
                                            <script>
                                              $('#summernote').summernote({
                                                placeholder: 'Hello stand alone ui',
                                                tabsize: 2,
                                                height: 100
                                              });
                                            </script> -->
                                            <button id="edit" class="btn btn-primary" onclick="edit()" type="button">Edit 1</button>
                                            <button id="save" class="btn btn-primary" onclick="save()" type="button">Save 2</button>
                                            <div class="click2edit">click2edit</div>
                                            
                                            <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower

                                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white">
                                    <p class="mb-0">
                                        <i class="fa fa-download">Unduh File</i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
</div>

@endsection