<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Helps;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Storage;
use Validator;

class SopController extends Controller
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
        $datas = Helps::all();
        return view('admin.help.sop',compact('datas'));
    }
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Helps::paginate(10);

        return view('admin.help.sop',compact('datas'));
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
                if($request->type == [1]){
                   $desPath = public_path('Uploaded/Regdat');
                   $request->file('fileImg')->move($desPath, $fileName); 
                   $fileImg = $fileName;
                }
                else if($request->type == [2]){
                    $desPath = public_path('Uploaded/PEP');
                    $request->file('fileImg')->move($desPath, $fileName); 
                    $fileImg = $fileName;
                }
                else if($request->type == [3]){
                    $desPath = public_path('Uploaded/Beasiswa'); 
                    $request->file('fileImg')->move($desPath, $fileName);
                    $fileImg = $fileName;
                }
                else if($request->type == [4]){
                    $desPath = public_path('Uploaded/Data'); 
                    $request->file('fileImg')->move($desPath, $fileName);
                    $fileImg = $fileName;
                }else{
                    
                 // 0=regdat, 1=pep, 2=beasiswa, 3=kemahasiswaan
                }
            
            
        }
        
        //File Upload
        if ($request->file('filePdf') == ''){
            $filePdf = "";
        }else{
            $file = $request->file('filePdf');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
                if($request->type == [1]){
                   $desPath = public_path('Uploaded/Regdat');
                   $request->file('filePdf')->move($desPath, $fileName); 
                   $filePdf = $fileName;
                }
                else if($request->type == [2]){
                    $desPath = public_path('Uploaded/PEP');
                    $request->file('filePdf')->move($desPath, $fileName); 
                    $filePdf = $fileName;
                }
                else if($request->type == [3]){
                    $desPath = public_path('Uploaded/Beasiswa');
                    $request->file('filePdf')->move($desPath, $fileName); 
                    $filePdf = $fileName;
                }
                else if($request->type == [4]){
                    $desPath = public_path('Uploaded/Data'); 
                    $request->file('filePdf')->move($desPath, $fileName);
                    $filePdf = $fileName;
                }else{
                    
                 // 0=regdat, 1=pep, 2=beasiswa, 3=kemahasiswaan
                }
            
        }
        

        Helps::create([
            'title' => $request->input('title'),
            'type' => $request->input('type'),
            'fileImg' => $fileImg,
            'filePdf' => $filePdf,
            'description' =>$request->input('description')
        ]);

        // help::create($request->all());
        //echo $help;
        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect(route('admin.sop.index'));
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
        $help = Helps::findorfail($id);

        // $help->update($request->all());
        if ($request->hasFile('fileImg'))
        {
            $file = $request->file('fileImg');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            if($request->type == [1]){
                   $desPath = public_path('Uploaded/Regdat');
                   $request->file('fileImg')->move($desPath, $fileName); 
                   $help->fileImg = $fileName;
                }
                else if($request->type == [2]){
                    $desPath = public_path('Uploaded/PEP');
                    $request->file('fileImg')->move($desPath, $fileName);
                    $help->fileImg = $fileName; 
                }
                else if($request->type == [3]){
                    $desPath = public_path('Uploaded/Beasiswa'); 
                    $request->file('fileImg')->move($desPath, $fileName);
                    $help->fileImg = $fileName;
                }
                else if($request->type == [4]){
                    $desPath = public_path('Uploaded/Data'); 
                    $request->file('fileImg')->move($desPath, $fileName);
                    $help->fileImg = $fileName;
                }else{
                    
                 // 0=regdat, 1=pep, 2=beasiswa, 3=kemahasiswaan
                }
            
            // Storage::delete($article->fileImg);
            
        }
            
        if ($request->hasFile('filePdf'))
        {
            $file = $request->file('filePdf');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            if($request->type == [1]){
                   $desPath = public_path('Uploaded/Regdat');
                   $request->file('filePdf')->move($desPath, $fileName);
                   $help->filePdf = $fileName; 
                }
                else if($request->type == [2]){
                    $desPath = public_path('Uploaded/PEP');
                    $request->file('filePdf')->move($desPath, $fileName);
                    $help->filePdf = $fileName; 
                }
                else if($request->type == [3]){
                    $desPath = public_path('Uploaded/Beasiswa');
                    $request->file('filePdf')->move($desPath, $fileName);
                    $help->filePdf = $fileName; 
                }
                else if($request->type == [4]){
                    $desPath = public_path('Uploaded/Data'); 
                    $request->file('filePdf')->move($desPath, $fileName);
                    $help->filePdf = $fileName;
                }else{
                    
                 // 0=regdat, 1=pep, 2=beasiswa, 3=kemahasiswaan
                }
            

            // Storage::delete($article->filePdf);
            
        }

        $help->title = $request->input('title');
        $help->type = $request->input('type');
        $help->description = $request->input('description');
        // $article->url = $request->input('url');
        
        $help->update();

        Session::flash('message', 'Berhasil diubah!');
        Session::flash('message_type', 'success');
        return redirect()->back();
    }

    // public function posts($id){
    //     $help = help::where('id',$id)->firstOrFail();

    //     if( $help->status == 0 ){
    //         $help->status = 1;
    //         $help->save();
    //     }
    //     else{
    //         $help->status = 0;
    //         $help->save();
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
        $help = Helps::findOrFail($id);       
        $help->delete();

        Session::flash('message', 'Berhasil dihapus!');
        Session::flash('message_type', 'success');
        return redirect()->back();
    }
}
