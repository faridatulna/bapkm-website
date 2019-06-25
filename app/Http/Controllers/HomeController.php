<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        else{
            $prev = Article::findorfail($id-1);
            $next = Article::findorfail($id+1);
            // echo($prev);
            // echo($next);
        }

        $cal_lastest = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(1)->get();
        $cal = Article::orderBy('updated_at', 'desc')->where('type','=',6)->take(3)->get();
        $agenda = Events::orderBy('dateOfEvent', 'desc')->take(10)->get();
        $news = Article::orderBy('updated_at', 'desc')->take(4)->get();

        return view('article-single',compact('datas','data','news','cal','cal_lastest','agenda','prev','next'));
    }

    
}
