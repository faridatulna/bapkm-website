<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Article;
use App\Events;
use App\Helps;
use App\Services;
use App\Galleries;
use App\Quicklinks;
use App\counter;
use App\Aboutus;
use Carbon\Carbon;
use App\User;
use Auth;

class HomeController extends Controller
{
    function index()
    {
      $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(1)->get();
      $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
      $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();
      $links = Quicklinks::all();
      $service = Services::all();
      $article = Article::orderBy('updated_at', 'desc')->where('type','!=',6)->take(3)->get();
      $gal = Galleries::all();

      return view('welcome',compact('article','cal','cal_lastest','agenda','links','gal','service') );
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

        setcookie('id', $id, time() + 3600, "/"); //86400 = 1 day

          if( !isset($_COOKIE['id']) ) {
              \DB::table('articles')->where('id', $id)->increment('viewer',1);
              $data = Article::findorfail($id);
              // echo "Set Cookies ". $data->viewer;
          } else {
            $data = Article::findorfail($id);
            // echo "Incrementing ". $data->viewer;
          }

        return view('article-single',compact('datas','data','news','cal','cal_lastest','agenda','prev','next'));
        // return View::make('users.show')->with('previous', $previous)->with('next', $next);
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
