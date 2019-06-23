<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
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
        $datas = Services::all();
        return view('admin.help.services',compact('datas'));
    }
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Services::paginate(10);

        return view('admin.help.services',compact('datas'));
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

        $service = new Services;
        //File Image Upload
        if ($request->file('fileImg') == null){
            $fileImg = null;
            $inputFile['namafile'] = null;
            
        }else{
            $fileImg = $request->file('fileImg');
            $inputFile['namafile'] = time().".".$fileImg->getClientOriginalExtension();
            $desPath = public_path('/Uploaded/Images/Product');
            $fileImg->move($desPath,$inputFile['namafile']);
            $service->fileImg = $inputFile['namafile'];
        }
        
        //File Upload
        if ($request->file('filePdf') == null){
            $filePdf = null;
            $inputFile['namafilePdf'] = null;
        }else{
            $filePdf = $request->file('filePdf');
            $inputFile['namafilePdf'] = time().".".$filePdf->getClientOriginalExtension();
            $desPath = public_path('/Uploaded/PDF/Product');
            $filePdf->move($desPath,$inputFile['namafilePdf']);
            $service->filePdf = $inputFile['namafilePdf'];
        }
        

        $service->title = $request->title;
        $service->url = $request->url;
        $service->description = $request->description;
        //dd($request->all());
        $service->save();
        // Article::create($request->all());
        //echo $article;
        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect(route('admin.product.service.index'));
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
        $service = Services::findorfail($id);

        $service->update($request->all());
        
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
        $service = Services::findOrFail($id);       
        $service->delete();

        Session::flash('message', 'Berhasil dihapus!');
        Session::flash('message_type', 'success');
        return redirect()->back();
    }
}
