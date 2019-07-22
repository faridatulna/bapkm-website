<!-- This is for reply section on the comment-area -->

@foreach( $comments as $comment )
@if( $comment->status == 1 )
<script type="text/javascript">
    function showForm{{$comment->cid}}() {
        var x = document.getElementById("comment-form{{$comment->cid}}");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<div class="comment-row">
    <div class="single-comment justify-content-between d-flex">
        <div class="user-comment justify-content-between d-flex">
            <div class="desc">
                <h5 class="author"> {{ $comment->name }} </h5>
                <p class="date"> {{date('M j, Y h:i A', strtotime($comment->submit_time))}} </p>
                <p class="body"> {{ $comment->body }} </p>
                @if ( $comment->status != 0 )
                <a onclick="showForm{{$comment->cid}}()" class="iconlike justify-content-center ml-auto" style="margin-top: 0;"><i class="fas fa-reply"></i> Reply </a>
                @else @endif
            </div>
        </div>

        {!! Form::open(array('route' => array('comment.destroy', $comment->cid), 'method' => 'delete')) !!} 
            {!! Form::button('<i class="fas fa-trash"></i>', array('type' => 'submit', 'class' => 'btn btnlike'))!!} 
        {{ Form::close() }}
        

    </div>
    <div id="comment-form{{$comment->cid}}" style="display: none;">
        <form method="post" action="{{ route('admin.reply-add') }}">
            {{ csrf_field() }}
            <div class="form-group d-flex">
                <input type="text" name="name" value="Administrator@BAPKM" hidden>
                <input type="hidden" name="article_id" value="{{ $article_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->cid }}" />
                <input id="body_text" type="text" name="body" data-parsley-trigger="change" placeholder="Kolom Komentar" autocomplete="off" class="form-control">
                <button type="submit" class="btn btn-secondary">Post</button>
            </div>
        </form>
    </div>

    @include('admin.partials._comment_replies_admin', ['comments' => $comment->replies])
</div>

@else
@endif
@endforeach