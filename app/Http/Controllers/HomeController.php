<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $article = Article::get();
        $datas   = User::get(); //data user
        // if(Auth::user()->level == 'user')
        // {
        //     $datas = Transaksi::where('status', 'pinjam')
        //                         ->where('anggota_id', Auth::user()->anggota->id)
        //                         ->get();
        // } else {
        //     $datas = Transaksi::where('status', 'pinjam')->get();
        // }
        return view('dashboard', compact('article', 'datas'));
    }
}
