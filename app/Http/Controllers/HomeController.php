<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Article;
use App\Events;
use App\Quicklinks;
use App\Services;
use App\Helps;
use App\User;
use Auth;

class HomeController extends Controller
{
    function index()
    {

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function articlepage($id)
    {
        $datas = Article::all();
        $data = Article::findorfail($id);

            // get the current user
            $index = Article::find($id);

            // get previous user id
            $index_prev = Article::where('id', '<', $index->id)->max('id');
            $prev = Article::find($index_prev);

            // get next user id
            $index_next = Article::where('id', '>', $index->id)->min('id');
            $next = Article::find($index_next);
            //echo $next;

        $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->firstOrFail();
        $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
        $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();
        $news = Article::orderBy('updated_at', 'desc')->take(4)->get();

        return view('article-single',compact('datas','data','news','cal','cal_lastest','agenda','prev','next'));
        // return View::make('users.show')->with('previous', $previous)->with('next', $next);
    }

    public function likePost(Request $request){
           // $post_id = $request['postId'];
           // $is_like = $request['isLike'] === 'true';
           // $update = false;
           // $post = Post::find($post_id);
           // if (!$post) {
           //     return null;
           // }
           // $clientIP = request()->ip();
           // $like = $clientIP->likes()->where('post_id', $post_id)->first();
           // if ($like) {
           //     $already_like = $like->like;
           //     $update = true;
           //     if ($already_like == $is_like) {
           //         $like->delete();
           //         return null;
           //     }
           // } else {
           //     $like = new Like();
           // }
           // $like->like = $is_like;
           // $like->user_id = $user->id;
           // $like->post_id = $post->id;
           // if ($update) {
           //     $like->update();
           // } else {
           //     $like->save();
           // }
           // return null;
    }

    public function search(Request $request)
    {
      $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->firstOrFail();
      $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
      $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();
        $links = Quicklinks::all();
        $sop = Helps::all();
        $service = Services::all();

        $searchResults = (new Search())
            ->registerModel(Article::class, 'title','description','type')
            ->registerModel(Helps::class, 'title','description','type')
            ->registerModel(Events::class, 'title')
            ->registerModel(Services::class, 'title')
            ->perform($request->input('q'));

        return view('search1', compact('cal','cal_lastest','agenda','links','searchResults'));
        //    dd($searchResults);
    }


}
