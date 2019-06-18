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

    <div class="pg-orgchart">
        <div class="org-chart">
            <ul>
                <li>
                    <div class="user">
                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg" class="img-responsive" />
                        <div class="name">Luann Brannick</div>
                        <div class="role">Ketua BAPKM</div>
                        <a class="manager" href="#">Mike Dinardo</a>
                    </div>
                    <ul>
                        <li>
                            <div class="user">
                                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/nzcode/128.jpg" class="img-responsive" />
                                <div class="name">Lynn Maynard</div>
                                <div class="role">Kabag AP</div>
                                <a class="manager" href="#">Luann Brannick</a>
                            </div>
                            <ul>
                                <li>
                                    <div class="user">
                                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/towhidzaman/128.jpg" class="img-responsive" />
                                        <div class="name">Fleta Odriscoll</div>
                                        <div class="role">Kasubag REGDAT</div>
                                        <a class="manager" href="#">Lynn Maynard</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="user">
                                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/arashmil/128.jpg" class="img-responsive" />
                                        <div class="name">Elfreda Grebin</div>
                                        <div class="role">Kasubag PEP</div>
                                        <a class="manager" href="#">Lynn Maynard</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="user">
                                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/vista/128.jpg" class="img-responsive" />
                                <div class="name">Jahn Philson Doe</div>
                                <div class="role">Kabag KM</div>
                                <a class="manager" href="#">Luann Brannick</a>
                            </div>
                            <ul>
                                <li>
                                    <div class="user">
                                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/marcosmoralez/128.jpg" class="img-responsive" />
                                        <div class="name">Roy Lemarie</div>
                                        <div class="role">Kasubag Beasiswa</div>
                                        <a class="manager" href="#">Jahn Philson Doe</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="user">
                                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jina/128.jpg" class="img-responsive" />
                                        <div class="name">Eloisa Stubbolo</div>
                                        <div class="role">Kasubag UKM</div>
                                        <a class="manager" href="#">Jahn Philson Doe</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection