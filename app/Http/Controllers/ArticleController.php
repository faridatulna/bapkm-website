<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function articlepage($id)
    {
        //
        $article = Article::findorfail($id);
        return view('article-single',compact('article'));
    }

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
        $datas = Article::get();
        
        return view('article.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
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
            'fileImg' => 'required|file|mimes:jpeg,png,jpg',
        ],[
            'fileImg.mimes' => 'Format Image adalah (.jpeg,.png,.jpg)',
        ]);

        $article = new Article;
        $article->id_user = 1;
        //File Upload
        $fileImg = $request->file('fileImg');
        $inputFile['namafile'] = time().".".$fileImg->getClientOriginalExtension();
        $desPath = public_path('/files');
        $fileImg->move($desPath,$inputFile['namafile']);
        $article->fileImg = $inputFile['namafile'];
        $article->title = $request->title;
        $article->description = $request->description;
        //
        $article->status = 0;
        $article->tgl_post = Carbon::now();
        $article->save();
        // Article::create($request->all());
        //echo $article;
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
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
        return redirect()->back();
    }

    public function posts($id){
        $article = article::where('id',$id)->firstOrFail();

        if( $article->status == 0 ){
            $article->status = 1;
            $article->save();
        }
        else{
            $article->status = 0;
            $article->save();
        }
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
        return redirect()->back();
    }
}
