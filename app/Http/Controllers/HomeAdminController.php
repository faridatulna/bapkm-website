<?php

namespace App\Http\Controllers;
use App\Article;
use App\Events;
use App\Quicklinks;
use App\Services;
use App\Helps;
use App\counter;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth'])->except('logout');
    }
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        $top_article = Article::orderBy('viewer','desc')->take(5)->get();
        $user = User::all();
        $event = Events::all(); 
        $latest_visitor = counter::orderBy('visit_date','desc')->take(5)->get();
        $visitors = counter::sum('today_visitors'); 

        $links = Quicklinks::orderBy('updated_at', 'desc')->get(); 
        $links = Quicklinks::orderBy('updated_at', 'desc')->paginate(5);

        return view('admin.index',compact('article','event','user','visitors','latest_visitor','top_article'));
    }
}
