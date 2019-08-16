<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Searchable\Search;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Article;
use App\Events;
use App\Helps;
use App\Services;
use App\Galleries;
use App\Quicklinks;
use App\counter;
use App\Announce;
use App\Filter;
use App\Feedback;
use Carbon\Carbon;
use App\User;
use Auth;
use Session;

class HomeController extends Controller
{

    function in_array_field($needle, $needle_field, $haystack, $strict = false) { 
      if ($strict) { 
          foreach ($haystack as $item) 
              if (isset($item->$needle_field) && $item->$needle_field === $needle) 
                  return true; 
      } 
      else { 
          foreach ($haystack as $item) 
              if (isset($item->$needle_field) && $item->$needle_field == $needle) 
                  return true; 
      } 
      return false; 
    } 

    public function todayVisits(){
      session_start();

      $now_date = date("Y-m-d");
      $now_time = date("G:i:s", time());
      $check_row = DB::table('counters')->count();
      $check_date = DB::select('SELECT visit_date FROM counters');

      if( Session::has('views') ){
        $_SESSION['views'] = $_SESSION['views']+1;
        $today_visitors = DB::table('counters')->where('visit_date', $now_date)->update(['today_visitors'=> DB::raw('today_visitors+1')]);
      }
      else{
          if($check_row < 0){
            $_SESSION['views'] = 1;

            DB::table('counters')->insert(
                array('visit_date' => $now_date,
                      'visit_time' => $now_time,
                      'today_visitors' => 1 )
            );
          }
          else{
              if( !$this->in_array_field( $now_date,'visit_date',$check_date ) ){
                  $_SESSION['views'] = 1;

                  DB::table('counters')->insert(
                      array('visit_date' => $now_date,
                            'visit_time' => $now_time,
                            'today_visitors' => 1 )
                  );
              }
              else{
                  $_SESSION['views'] = $_SESSION['views']+1;
                  $today_visitors = DB::table('counters')->where('visit_date', $now_date)->update(['today_visitors'=> DB::raw('today_visitors+1')]);
              }
          }
      }
    }

    function index()
    {
      $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(1)->get();
      $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
      $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();
      $links = Quicklinks::all();
      $service = Services::all();
      $article = Article::orderBy('updated_at', 'desc')->where('type','!=',6)->take(3)->get();
      $gal = Galleries::all();
      //runnint-text
      $announce = Announce::all();
      $cdatetime = \Carbon\Carbon::now();
      //visitor-counter
      $sumVisits = DB::table('counters')->sum('today_visitors');
      $this->todayVisits();
      $now_date = date("Y-m-d");
      $visitor = counter::select('today_visitors')->where('visit_date', $now_date)->get('today_visitors');

      return view('welcome',compact('article','cal','cal_lastest','agenda','links','gal','service','announce','cdatetime','sumVisits','visitor') );
    }

    

    function articlePage()
    {
      $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->firstOrFail();
      $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
      $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();
      $news = Article::orderBy('updated_at', 'desc')->where('type','!=',6)->take(4)->get();
      $article = Article::orderBy('updated_at', 'desc')->where('type','!=',6)->get();
      $article = Article::orderBy('updated_at', 'desc')->where('type','!=',6)->paginate(6);
      $filter = Filter::orderBy('filter_name','asc')->get();
      //runnint-text
      $announce = Announce::all();
      $cdatetime = \Carbon\Carbon::now();
      //visitor-counter
      $sumVisits = DB::table('counters')->sum('today_visitors');
      $now_date = date("Y-m-d");
      $visitor = counter::select('today_visitors')->where('visit_date', $now_date)->get('today_visitors');

      return view('article',compact('article','news','cal','cal_lastest','agenda', 'announce','cdatetime','filter','sumVisits','visitor'));
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
      $news = Article::orderBy('updated_at', 'desc')->where('type','!=',6)->take(4)->get();
      $article = Article::orderBy('updated_at', 'desc')->where('type','=', $id)->get();
      $article = Article::orderBy('updated_at', 'desc')->where('type','=', $id)->paginate(6);
      $filter = Filter::orderBy('filter_name','asc')->get();
      //runnint-text
      $announce = Announce::all();
      $cdatetime = \Carbon\Carbon::now();
      //visitor-counter
      $sumVisits = DB::table('counters')->sum('today_visitors');
      $now_date = date("Y-m-d");
      $visitor = counter::select('today_visitors')->where('visit_date', $now_date)->get('today_visitors');

      return view('article',compact('article','news','cal','cal_lastest','agenda', 'announce','cdatetime','filter','sumVisits','visitor'));
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
        // //runnint-text
        $announce = Announce::all();
        $cdatetime = \Carbon\Carbon::now();
        //visitor-counter
        $sumVisits = DB::table('counters')->sum('today_visitors');
        $now_date = date("Y-m-d");
        $visitor = counter::select('today_visitors')->where('visit_date', $now_date)->get('today_visitors');

        setcookie('id', $id, time() + 3600, "/"); //86400 = 1 day

          if( !isset($_COOKIE['id']) ) {
              \DB::table('articles')->where('id', $id)->increment('viewer',1);
              $data = Article::findorfail($id);
          } else {
            $data = Article::findorfail($id);
          }

        return view('article-single',compact('datas','data','news','cal','cal_lastest','agenda','prev','next','announce','cdatetime','sumVisits','visitor'));
    }

    public function search(Request $request)
    {
      $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->firstOrFail();
      $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
      $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();
      $links = Quicklinks::all();
      $sop = Helps::all();
      $service = Services::all();
      //runnint-text
      $announce = Announce::all();
      $cdatetime = \Carbon\Carbon::now();
      //visitor-counter
      $sumVisits = DB::table('counters')->sum('today_visitors');
      $now_date = date("Y-m-d");
      $visitor = counter::select('today_visitors')->where('visit_date', $now_date)->get('today_visitors');

        $searchResults = (new Search())
            ->registerModel(Article::class, 'title','description','type')
            ->registerModel(Helps::class, 'title','description','type')
            ->registerModel(Events::class, 'title')
            ->registerModel(Services::class, 'title')
            ->perform($request->input('q'));

        return view('search1', compact('cal','cal_lastest','agenda','links','searchResults','announce','cdatetime','sumVisits','visitor'));
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
}
