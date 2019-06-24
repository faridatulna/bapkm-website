<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;


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
        $datas = Article::paginate(10);
        return view('admin.article.index',compact('datas'));
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
        $this->validate($request, [
            'fileImg' => 'file|mimes:jpeg,png,jpg',
            'filePdf' => 'file|mimes:pdf',
        ],[
            'fileImg.mimes' => 'Format Image adalah (.jpeg,.png,.jpg)',
            'filePdf.mimes' => 'Format Image adalah (.pdf)',
        ]);

        $article = new Article;
        //File Image Upload
        
        if ($request->file('fileImg') == null){
        $fileImg = null;
        $inputFile['namafile'] = null;
            
        }else{
            $fileImg = $request->file('fileImg');
            $inputFile['namafile'] = time().".".$fileImg->getClientOriginalExtension();
            $desPath = public_path('/Uploaded/Images/Article');
            $fileImg->move($desPath,$inputFile['namafile']);
            $article->fileImg = $inputFile['namafile'];
        }
            
            //File Upload
        if ($request->file('filePdf') == null){
            $filePdf = null;
            $inputFile['namafilePdf'] = null;
        }else{
            $filePdf = $request->file('filePdf');
            $inputFile['namafilePdf'] = time().".".$filePdf->getClientOriginalExtension();
            $desPath = public_path('/Uploaded/PDF/Article');
            $filePdf->move($desPath,$inputFile['namafilePdf']);
            $article->filePdf = $inputFile['namafilePdf'];
        }
            

        $article->title = $request->title;
        $article->url = $request->url;
        $article->description = $request->description;
        if($request->type == [1]){
            $article->type = 1;
        }
        else if($request->type == [2]){
            $article->type = 2;
        }
        else if($request->type == [3]){
            $article->type = 3;
        }
        else if($request->type == [4]){
            $article->jenis = 4;
        }
        else if($request->type == [5]){
            $article->type = 5;
        }
             // 0=akademik, 1=beasiswa, 2=calonmhs, 3=wisuda , 4=wisuda , 5=kalender, 6=kemahasiswaan
        $article->postDate = Carbon::now();
        //dd($request->all());
        $article->save();
            // Article::create($request->all());
            //echo $article;
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
        //
        $article = Article::findorfail($id);

        $article->update($request->all());
        
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
        $article->delete();

        Session::flash('message', 'Berhasil dihapus!');
        Session::flash('message_type', 'success');
        return redirect()->back();
    }
}
