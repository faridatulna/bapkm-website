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
        $data = Article::findorfail($id);
        return view('article-single',compact('data'));
    }

    
}
