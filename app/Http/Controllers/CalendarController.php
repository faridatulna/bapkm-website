<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class CalendarController extends Controller
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

    public function links()
    {
        $datas = Article::where('type', 6)->orderBy('postDate', 'desc')->get();
        // $event = Events::all();
        // $links = Quicklinks::all();
        return view('admin.article.list_cal',compact('datas'));
    }
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Article::where('type', 6)->orderBy('postDate', 'desc')->paginate(10);
        // $event = Events::paginate(5);
        // $links = Quicklinks::paginate(5);
        return view('admin.article.list_cal',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fileImg' => 'file|mimes:jpeg,png,jpg',
            'filePdf' => 'file|mimes:pdf',
        ],[
            'fileImg.mimes' => 'Format Image adalah (.jpeg,.png,.jpg)',
            'filePdf.mimes' => 'Format Image adalah (.pdf)',
        ]);

        $article = new Article;
        //File Image Upload
            $article->type = 6;
            $article->title = $request->title;
            $article->postDate = Carbon::now();
            $fileImg = null;
            $inputFile['namafile'] = null;
            $article->url = null;
            $article->description = null;
            $filePdf = $request->file('filePdf');
            $inputFile['namafilePdf'] = time().".".$filePdf->getClientOriginalExtension();
            $desPath = public_path('/Uploaded/PDF/Article');
            $filePdf->move($desPath,$inputFile['namafilePdf']);
            $article->filePdf = $inputFile['namafilePdf'];

            $article->save();
            // Article::create($request->all());
            //echo $article;
            Session::flash('message', 'Berhasil ditambahkan!');
            Session::flash('message_type', 'success');
            return redirect()->back();  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $article = Article::findorfail($id);

        $article->update($request->all());
        
        Session::flash('message', 'Berhasil diubah!');
        Session::flash('message_type', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);       
        $article->delete();

        Session::flash('message', 'Berhasil dihapus!');
        Session::flash('message_type', 'success');
        return redirect()->back();
    }
}
