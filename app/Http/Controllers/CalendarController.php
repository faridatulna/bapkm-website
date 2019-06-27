<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Storage;
use Validator;

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
        $datas = Article::where('type', 6)->orderBy('updated_at', 'desc')->get();
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
        $datas = Article::where('type', 6)->orderBy('updated_at', 'desc')->paginate(10);
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
        Validator::make($request->all(), [
            'fileImg' => 'file|mimes:jpeg,png,jpg|max:10240',
            'filePdf' => 'file|mimes:pdf|max:10240',
        ])->validate();

        //File Upload
        if ($request->file('fileImg') == ''){
            $fileImg = null;
        }else{
            $file = $request->file('fileImg');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $desPath = public_path('Uploaded/Article');
            $request->file('fileImg')->move($desPath, $fileName);
            $fileImg = $fileName;
        }
            
        if ($request->file('filePdf') == ''){
            $filePdf = null;
        }else{
            $file = $request->file('filePdf');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $desPath = public_path('Uploaded/Article');
            $request->file('filePdf')->move($desPath, $fileName);
            $filePdf = $fileName;
        }

        Article::create([
            'title' => $request->input('title'),
            'type' => 6,
            'fileImg' => $fileImg,
            'filePdf' => $filePdf,
            'url' => null,
            'description' =>null
        ]);

        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect(route('admin.article.list_cal'));
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
        // Validator::make($request->all(), [
        //     'fileImg' => 'file|mimes:jpeg,png,jpg|max:10240',
        //     'filePdf' => 'file|mimes:pdf|max:10240',
        // ])->validate();

        $article = Article::findorfail($id);

        if ($request->hasFile('fileImg'))
        {
            $file = $request->file('fileImg');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $desPath = public_path('Uploaded/Article');
            $request->file('fileImg')->move($desPath, $fileName);
            
            // Storage::delete($fileImg);
            $article->fileImg = $fileName;
        }
            
        if ($request->hasFile('filePdf'))
        {
            $file = $request->file('filePdf');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $desPath = public_path('Uploaded/Article');
            $request->file('filePdf')->move($desPath, $fileName);
            
            // Storage::delete($filePdf);
            $article->filePdf = $fileName;
        }

        $article->title = $request->input('title');
        $article->type = 6;
        $article->description = null;
        $article->url = null;
        
        $article->update();

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
        Storage::delete($article->filePdf);      
        $article->delete();

        Session::flash('message', 'Berhasil dihapus!');
        Session::flash('message_type', 'success');
        return redirect()->back();
    }
}
