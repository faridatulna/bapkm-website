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
use App\Announce;
use App\Filter;
use App\Feedback;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
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
      $announce = Announce::all();
      $cdatetime = \Carbon\Carbon::now();

      // session_start();

      return view('welcome',compact('article','cal','cal_lastest','agenda','links','gal','service','announce','cdatetime') );
    }

    // function updateCounter(){
    //   $now_date = date("y-m-d");
    //   $now_time = date("G:i:s", time());

    //   $jad = DB::table('jadwals')->join('dosens','jadwals.nipdosenngajar','=','dosens.nip')->join('matakuliahs','jadwals.idmk_jadwal','=','matakuliahs.id_mk')->get();
    //   $cdate = counter::where('')
    //   if (  )
    // }

    function articlePage()
    {
      $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->firstOrFail();
      $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
      $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();
      $announce = Announce::all();
      $cdatetime = \Carbon\Carbon::now();

      $news = Article::orderBy('updated_at', 'desc')->where('type','!=',6)->take(4)->get();
      $article = Article::orderBy('updated_at', 'desc')->where('type','!=',6)->get();
      $article = Article::orderBy('updated_at', 'desc')->where('type','!=',6)->paginate(6);

      $filter = Filter::orderBy('filter_name','asc')->get();

      return view('article',compact('article','news','cal','cal_lastest','agenda', 'announce','cdatetime','filter'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function articleCategory($id){
      $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->firstOrFail();
      $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
      $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();
      $announce = Announce::all();
      $cdatetime = \Carbon\Carbon::now();

      $news = Article::orderBy('updated_at', 'desc')->where('type','!=',6)->take(4)->get();
      $article = Article::orderBy('updated_at', 'desc')->where('type','=', $id)->get();
      $article = Article::orderBy('updated_at', 'desc')->where('type','=', $id)->paginate(6);

      $filter = Filter::orderBy('filter_name','asc')->get();

      return view('article',compact('article','news','cal','cal_lastest','agenda', 'announce','cdatetime','filter'));
    }

    public function articleSinglePage($id)
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
        $announce = Announce::all();
        $cdatetime = \Carbon\Carbon::now();

        setcookie('id', $id, time() + 3600, "/"); //86400 = 1 day

          if( !isset($_COOKIE['id']) ) {
              \DB::table('articles')->where('id', $id)->increment('viewer',1);
              $data = Article::findorfail($id);
          } else {
            $data = Article::findorfail($id);
          }

        return view('article-single',compact('datas','data','news','cal','cal_lastest','agenda','prev','next','announce','cdatetime'));
    }

    public function search(Request $request)
    {
      $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->firstOrFail();
      $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
      $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();
        $links = Quicklinks::all();
        $sop = Helps::all();
        $service = Services::all();
        $announce = Announce::all();
        $cdatetime = \Carbon\Carbon::now();

        $searchResults = (new Search())
            ->registerModel(Article::class, 'title','description','type')
            ->registerModel(Helps::class, 'title','description','type')
            ->registerModel(Events::class, 'title')
            ->registerModel(Services::class, 'title')
            ->perform($request->input('q'));

        return view('search1', compact('cal','cal_lastest','agenda','links','searchResults','announce','cdatetime'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeFeedback(Request $request)
    {
        Feedback::create([
            'rating' => $request->input('rating'),
            'opinion' => $request->input('opinion')
        ]);

        Alert::success('Thanks For Your Rate', 'Have A Nice Day!');

        return redirect()->back();
    }

    // Route::any ( '/search-result', function () {
//     $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(1)->get();
//     $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
//     $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();
//     $links = Quicklinks::all();
//     $sop = Helps::all();
//     $service = Services::all();

//     $projects = Article::search(Input::get('search'))->get();

//     $q = Input::get ( 'q' );
//     $data = Article::where ( 'title', 'LIKE', '%' . $q . '%' )->
//                 orWhere ( 'description', 'LIKE', '%' . $q . '%' )->
//                 orWhere ( 'updated_at', 'LIKE', '%' . $q . '%' )->
//                 orWhere ( 'url', 'LIKE', '%' . $q . '%' )->orWhere ( 'type', 'LIKE', '%' . $q . '%' )->get();
//     $data = Article::where ( 'title', 'LIKE', '%' . $q . '%' )->
//                 orWhere ( 'description', 'LIKE', '%' . $q . '%' )->
//                 orWhere ( 'updated_at', 'LIKE', '%' . $q . '%' )->
//                 orWhere ( 'url', 'LIKE', '%' . $q . '%' )->orWhere ( 'type', 'LIKE', '%' . $q . '%' )->paginate(5);
//     // $data = Article::paginate(5);
//     //$link = Links::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->get ();
//     if (count($data) > 0)
//         return view ( 'search', compact('cal','cal_lastest','agenda','links'))->withDetails ( $data )->withQuery ( $q );
//     else
//         return view ( 'search', compact('cal','cal_lastest','agenda','links') )->withQuery ( $q )->withMessage ( 'Kami tidak dapat menemukan pencarian anda , Mohon coba lagi.' );
// } );
}
