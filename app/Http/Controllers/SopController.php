<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Helps;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

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
        $datas = Helps::paginate(25);

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
        $this->validate($request, [
            'fileImg' => 'file|mimes:jpeg,png,jpg',
            'filePdf' => 'file|mimes:pdf',
        ],[
            'fileImg.mimes' => 'Format Image adalah (.jpeg,.png,.jpg)',
            'filePdf.mimes' => 'Format Image adalah (.pdf)',
        ]);

        $help = new Helps;
        //File Image Upload
        if ($request->file('fileImg') == null){
            $fileImg = null;
            $inputFile['namafile'] = null;
            
        }else{
            $fileImg = $request->file('fileImg');
            $inputFile['namafile'] = time().".".$fileImg->getClientOriginalExtension();
            $desPath = public_path('/Uploaded/Images/Product');
            $fileImg->move($desPath,$inputFile['namafile']);
            $help->fileImg = $inputFile['namafile'];
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
            $help->filePdf = $inputFile['namafilePdf'];
        }
        

        $help->title = $request->title;
        // $help->url = $request->url;
        $help->description = $request->description;
        if($request->type == [1]){
            $help->type = 1;
        }
        else if($request->type == [2]){
            $help->type = 2;
        }
        else if($request->type == [3]){
            $help->type = 3;
        }
        else if($request->type == [4]){
            $help->jenis = 4;
        }else{
            
         // 0=regdat, 1=pep, 2=beasiswa, 3=kemahasiswaan
        }
        $help->postDate = Carbon::now();
        // dd($request->all());
        $help->save();
        // help::create($request->all());
        //echo $help;
        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect(route('admin.product.sop.index'));
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

        $help->update($request->all());
        
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
