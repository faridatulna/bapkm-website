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
@stop @extends('layouts.app-admin') 
<style>
    .comment-row .comment-row{
        margin-left: 40px
    }
</style>
@section('content')

<div class="dashboard-main-wrapper">

    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Master Data - Pengumuman</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Master Data - Artikel</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="/admin/article">
                            <button class="btn-light btn"><i class="fa fa-arrow-left"></i>&nbsp Back</button>
                        </a>
                    </div>
                    <div class="col-lg-12">
                        @if (Session::has('message'))
                        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                        @endif
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12"></div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="post-thumbnail">
                                    <div class="post-header">
                                        <span class="badge badge-info" disabled="">{{ $data->filter($data->type)->filter_name }}</span>

                                        <button class="btn btnlike float-right" data-toggle="modal" data-target="#mcomment{{ $data->id }}"><i class="fas fa-fw fa-bell"></i> @if( $data->comments_data($data->id)->where('status',0)->count() > 0 )
                                        <span class="indicator"></span> @else @endif

                                    </div>
                                    <div class="post-img-head">
                                        <div class="post-img">
                                            <img src="{{ url('admin-page/assets/images/eco-product-img-1.png')}}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-content-head">
                                            <div class="justify-content-between d-flex">
                                                <a><i class="fas fa-heart"></i> {{ $data->viewer }} Dilihat </a>
                                                <a><i class="fas fa-comment"></i> {{ $data->commentsCount($data->id)->count() }} Komentar</a>
                                            </div>
                                            <h3 class="post-title">{!! $data->title !!}</h3>
                                            <div class="">{{ date('M j, Y h:i A ', strtotime($data->updated_at)) }}</div>
                                            <p> {!! $data->description !!} </p>
                                        </div>
                                        <div class="post-content-main">
                                            @include('admin.partials._comment_replies_admin', ['comments' => $data->comments->where('status',1), 'article_id' => $data->id ])

                                        </div>
                                        
                                    </div>
                                    <div class="post-content-foot">
                                        <form method="post" action="{{ route('admin.comment-add') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group d-flex">
                                                <input type="hidden" name="name" value="Administrator@BAPKM" />
                                                <input type="hidden" name="article_id" value="{{ $data->id }}" />
                                                <input id="body_text" type="text" name="body" data-parsley-trigger="change" placeholder="Tambahkan Komentar" autocomplete="off" class="form-control">
                                                <button type="submit" class="btn btn-secondary">Post</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- manage comment -->
        <div class="modal fade" id="mcomment{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mcomment{{ $data->id}}"><strong>Manage Komentar</strong></h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            @if ( $data->comments_data($data->id)->count() )
                                @foreach( $data->comments_data($data->id) as $comment )
                                @if( $comment->status == 0 )
                                <div class="row comment-row justify-content-between d-flex">
                                    <div class="col">
                                        <h5 class="author"> {{ $comment->name }} </h5>
                                        <p class="date"> {{date('M j, Y h:i A', strtotime($comment->submit_time))}} </p>
                                        <p class="body"> {{ $comment->body }} </p>
                                        <!-- <a href="/admin" target="_blank" style="margin-top: 0;"><i class="fas fa-reply"></i> Reply </a> -->
                                    </div>
                                    <div class="col control-button">
                                        <div class="control justify-content-between d-flex">
                                            @if( $comment->status == 0 )
                                            <form method="POST" action= "{{ route('comment.update', $comment->cid ) }}" enctype="multipart/form-data">
                                                {{ csrf_field() }} {{ method_field('put') }}
                                                <button class="btn approved-btn"><i class="fas fa-check-circle"></i> Approve</button>
                                            </form>

                                            {!! Form::open(array('route' => array('comment.destroy', $comment->cid), 'method' => 'delete')) !!} 
                                                {!! Form::button('<i class="fas fa-trash-circle"></i>'. 'Delete', array('type' => 'submit', 'class' => 'btn disapproved-btn'))!!}{{ Form::close() }}
                                            @elseif( $comment->status == 1 )

                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <div class="row"> <p> Semua Komentar Telah Disetujui </p> </div>
                                @endif
                                @endforeach
                            @else
                               <div class="row"> <p> Tidak Ada Komentar </p> </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection