<!-- This is for reply section on the comment-area -->

@foreach($comments as $comment)
@if( $comment->status == 1 )
<script type="text/javascript">
    
function showReplyForm{{$comment->cid}}() {
  var x = document.getElementById("reply-form{{$comment->cid}}");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>

<div class="comment-list">
    <div class="single-comment justify-content-between d-flex">
        <div class="user justify-content-between d-flex">
            <div class="thumb">
                <img src="{{ url('force/img/core-img/user.png')}}" alt="">
            </div>
            <div class="desc">
                @if($comment->user_id != null)
                <h5 style="color:#F4BA23;">{{ $comment->name }}</h5>
                @else
                <h5>{{ $comment->name }}</h5>
                @endif
                <p class="date">{{date('M j, Y', strtotime($comment->submit_time))}}</p>
                <p class="comment"> {{ $comment->body }} </p>
            </div>
        </div>
        <div class="reply-btn">
            <button class="btn-reply text-uppercase" onclick="showReplyForm{{$comment->cid}}()"><i class="fa fa-reply"></i></button>
        </div>
    </div>

    <div class="comment-form" id="reply-form{{$comment->cid}}" style="display: none;">
        <!-- <h4>Leave a Reply</h4> -->
        <form method="post" action="{{ route('reply.add') }}">
            {{ csrf_field() }}
            <div class="form-group form-inline">
                <div class="form-group col-lg-6 col-md-6 name" >
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter Your Name'">
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control " rows="2" name="body" placeholder="Message" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Message'" required=""></textarea>
                <input type="hidden" name="article_id" value="{{ $article_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->cid }}" />
                <!-- <input type="hidden" name="user_id" value="10" /> -->
            </div>
            <div class="form-group">
                <button class="primary-btn submit_btn">Post Reply</button>
            </div>
        </form>
    </div>

    @include('partials._comment_replies', ['comments' => $comment->replies])
</div>
@else @endif
@endforeach