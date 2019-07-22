<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;
use Carbon\Carbon;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->name = $request->get('name');
        $comment->submit_time = Carbon::now();
        $comment->body = $request->get('body');
        $comment->user()->associate($request->user());
        $comment->status = 0;
        if($comment->user_id != null){
            $comment->status = 1;
        }
        $post = Article::find($request->get('article_id'));
        $post->comments()->save($comment);

        return back();
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment;
        $reply->name = $request->get('name');
        $reply->submit_time = Carbon::now();
        $reply->body = $request->get('body');
        $reply->parent_id = $request->get('comment_id');
        $reply->user()->associate($request->user());
        $reply->status = 0;
        if($reply->user_id != null){
            $reply->status = 1;
        }
        $post = Article::find($request->get('article_id'));
        $post->comments()->save($reply);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $comment = Comment::where('cid',$id)->firstOrFail();

        if( $comment->status == 0 ){
            $comment->status = 1;
            $comment->save();
        }
        else{
            $comment->status = 0;
            $comment->save();
        }
        return redirect()->back();
    }

    // public function approve($id){
        
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        $comment->delete();
        return back();
    }
}
