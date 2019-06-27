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
        // echo($data);
        if($datas->count() > 1 && $data->id == $datas->count()){
            $prev = Article::findorfail($id-1);
            $next = Article::findorfail($id);
            // echo($prev);
        }
        else if($datas->count() >= 1 && $data->id == 1 ){
            $next = Article::findorfail($id+1);
            $prev = Article::findorfail($id);
            // echo($next);
        }
        // }elseif ($datas->count() == 1) {
        //     $prev = Article::findorfail($id);
        //     $next = Article::findorfail($id);
        // }
        else{
            $prev = Article::findorfail($id-1);
            $next = Article::findorfail($id+1);
            // echo($prev);// echo($next);
        }

        $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(1)->get();
        $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
        $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();
        $news = Article::orderBy('updated_at', 'desc')->take(4)->get();

        return view('article-single',compact('datas','data','news','cal','cal_lastest','agenda','prev','next'));
    }

    public function search(Request $request)
    {
        $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(1)->get();
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
