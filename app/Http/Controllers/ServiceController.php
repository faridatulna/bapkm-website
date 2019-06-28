<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Storage;
use Validator;

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
        Validator::make($request->all(), [
            'fileImg' => 'file|mimes:jpeg,png,jpg|max:10240',
            'filePdf' => 'file|mimes:pdf|max:10240',
        ])->validate();

        //File Image Upload
        if ($request->file('fileImg') == ''){
            $fileImg = "";
        }else{
            $file = $request->file('fileImg');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $desPath = public_path('Uploaded/Product');
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
            $desPath = public_path('Uploaded/Product');
            $request->file('filePdf')->move($desPath, $fileName);
            $filePdf = $fileName;
        }
        

        Services::create([
            'title' => $request->input('title'),
            'fileImg' => $fileImg,
            'filePdf' => $filePdf,
            'url' => $request->input('url'),
            'description' =>$request->input('description')
        ]);

        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect(route('admin.service.index'));
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

        if ($request->hasFile('fileImg'))
        {
            $file = $request->file('fileImg');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $desPath = public_path('Uploaded/Product');
            $request->file('fileImg')->move($desPath, $fileName);
            
            // Storage::delete($article->fileImg);
            $service->fileImg = $fileName;
        }
            
        if ($request->hasFile('filePdf'))
        {
            $file = $request->file('filePdf');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $desPath = public_path('Uploaded/Product');
            $request->file('filePdf')->move($desPath, $fileName);

            // Storage::delete($article->filePdf);
            $service->filePdf = $fileName;
        }

        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->url = $request->input('url');

        $service->update();
        
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
