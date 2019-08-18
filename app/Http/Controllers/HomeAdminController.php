<?php

namespace App\Http\Controllers;
use App\Article;
use App\Events;
use App\Quicklinks;
use App\Services;
use App\Helps;
use App\counter;
use App\Announce;
use App\Feedback;
use App\User;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
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
        $announce = Announce::orderBy('dt_end','desc')->take(3)->get();
        $links = Quicklinks::orderBy('updated_at', 'desc')->get(); 
        $links = Quicklinks::orderBy('updated_at', 'desc')->paginate(5);
        $customers = Feedback::all();

        $cdatetime = \Carbon\Carbon::now(); 

        return view('admin.index',compact('article','cdatetime','event','user','visitors','latest_visitor','top_article','announce','customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRunningText(Request $request)
    {
        $announce = new Announce;
        $announce->message = $request->message;
        $announce->dt_start = $request->dt_start;
        $announce->dt_end = $request->dt_end;
        // $announce->status = "ongoing";
        $announce->save();

        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect()->back();
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyRunningText($id)
    {
        $announce = Announce::findOrFail($id);

        $announce->delete();

        Session::flash('message', 'Berhasil dihapus!');
        Session::flash('message_type', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function customersRate($id){
        $customers = Feedback::orderBy('updated_at', 'desc')->where('rating','=', $id)->get();
        $customers = Feedback::orderBy('updated_at', 'desc')->where('rating','=', $id)->paginate(6);
        $feedbackRate = Feedback::all();

        return view('admin.customers',compact('customers','feedbackRate'));
    }
}
