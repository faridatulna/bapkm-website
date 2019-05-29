<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function articlepage($id)
    {
        $article = Article::findorfail($id);
        return view('article-single',compact('article'));
    }
}
