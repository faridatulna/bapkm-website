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
        $datas = Helps::orderBy('updated_at','desc')->get();
        return view('admin.help.sop',compact('datas'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Helps::orderBy('updated_at','desc')->paginate(10);

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
            $desPath = public_path('Uploaded/SOP');
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('fileImg')->move($desPath, $fileName);
            $fileImg = $fileName;
        }

        //File Upload
        if ($request->file('filePdf') == ''){
            $filePdf = "";
        }else{
            $file = $request->file('filePdf');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $desPath = public_path('Uploaded/SOP');
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('filePdf')->move($desPath, $fileName);
            $filePdf = $fileName;
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

        $help->title = $request->input('title');
        $help->type = $request->input('type');

        if ($request->hasFile('fileImg'))
        {
            $file = $request->file('fileImg');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $desPath = public_path('Uploaded/SOP');
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('fileImg')->move($desPath, $fileName);
            $help->fileImg = $fileName;
        }

        if ($request->hasFile('filePdf'))
        {
          $file = $request->file('filePdf');
          $dt = Carbon::now();
          $acak  = $file->getClientOriginalExtension();
          $desPath = public_path('Uploaded/SOP');
          $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
          $request->file('filePdf')->move($desPath, $fileName);
          $help->filePdf = $fileName;
        }

        $help->description = $request->input('description');

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
