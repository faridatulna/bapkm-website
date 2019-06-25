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
        ]);

        $article = new Article;

        //File Upload
        if ($request->file('fileImg') == ''){
            $fileImg = null;
        }else{
            $file = $request->file('fileImg');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $desPath = public_path('/Uploaded/Article');
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
            $desPath = public_path('/Uploaded/Article');
            $request->file('filePdf')->move($desPath, $fileName);
            $filePdf = $fileName;
        }

        $article->filePdf = $filePdf;
        $article->fileImg = $fileImg ;   
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
            $article->type = 4;
        }
        else if($request->type == [5]){
            $article->type = 5;
        }
        
        // dd($article->filePdf);
        //dd($article->fileImg);
        $article->save();

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
        $article = Article::findorfail($id);

        $image_name = $request->hidden_image;
        $image = $request->file('fileImg');

        $file_name = $request->hidden_filePdf;
        $file = $request->file('filePdf');

        //File Upload
        if ($image != ''){

            $request->validate([
                'fileImg' => 'image|max:2048'       
            ]);

            $image_name = time().'.'.$image->getClientOriginalExtension();
            $desPath = public_path('/Uploaded/Article');   
            $image->move($desPath, $image_name);
        }
        elseif($file != ''){
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $desPath = public_path('/Uploaded/Article');   
            $file->move($desPath, $file_name);
            $article->filePdf = $file;
        }elseif( $image != '' && $file != ''){
            $request->validate([
                'fileImg' => 'image|max:2048'       
            ]);

            $image_name = time().'.'.$image->getClientOriginalExtension();
            $desPath = public_path('/Uploaded/Article');   
            $image->move($desPath, $image_name);
            $file_name = time().'.'.$file->getClientOriginalExtension();  
            $file->move($desPath, $file_name);
            $article->filePdf = $file;
            $article->fileImg = $image;
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
            $article->type = 4;
        }
        else if($request->type == [5]){
            $article->type = 5;
        }
        
         //echo ($article->filePdf);
        //echo($article->fileImg);
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
