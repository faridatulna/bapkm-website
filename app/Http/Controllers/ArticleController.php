<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use App\Filter;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Storage;
use Validator;

class ArticleController extends Controller
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

    // public function links()
    // {
    //     $datas = Article::orderBy('updated_at','desc')->get();

    //     return view('admin.article.index',compact('datas'));
    // }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Article::orderBy('updated_at','desc')->get();
        $datas = Article::orderBy('updated_at','desc')->paginate(6);
        $filter = Filter::orderBy('filter_name','asc')->get();
        $comments = Comment::orderBy('updated_at','desc')->get();
        $comments = Comment::orderBy('updated_at','desc')->paginate(6);

        return view('admin.article.index',compact('datas','comments','filter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
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
            $fileImg = "";
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
            $filePdf = "";
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
            'type' => $request->input('type'),
            'fileImg' => $fileImg,
            'filePdf' => $filePdf,
            'url' => $request->input('url'),
            'description' =>$request->input('description')
        ]);

        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect(route('admin.article.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Article::findorfail($id);
        return view('admin.article.article-single', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = Article::findorfail($id);
        return view('admin.article.edit', compact('datas'));
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
        $article = Article::findorfail($id);

        // Validator::make($request->all(), [
        //     'fileImg' => 'file|mimes:jpeg,png,jpg|max:10240',
        //     'filePdf' => 'file|mimes:pdf|max:10240',
        // ])->validate();

        if ($request->hasFile('fileImg'))
        {
            $file = $request->file('fileImg');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $desPath = public_path('Uploaded/Article');
            $request->file('fileImg')->move($desPath, $fileName);

            // Storage::delete($article->fileImg);
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

            // Storage::delete($article->filePdf);
            $article->filePdf = $fileName;
        }

        $article->title = $request->input('title');
        $article->type = $request->input('type');
        $article->description = $request->input('description');
        $article->url = $request->input('url');

        $article->update();

        Session::flash('message', 'Berhasil diubah!');
        Session::flash('message_type', 'success');
        return redirect()->back();
    }

    // public function posts($id){
    //     $article = article::where('id',$id)->firstOrFail();

    //     if( $article->status == 0 ){
    //         $article->status = 1;
    //         $article->save();
    //     }
    //     else{
    //         $article->status = 0;
    //         $article->save();
    //     }
    //     return redirect()->back();
    // }

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
        Storage::delete($article->fileImg);

        $article->delete();

        Session::flash('message', 'Berhasil dihapus!');
        Session::flash('message_type', 'success');
        return redirect()->back();
    }
}
