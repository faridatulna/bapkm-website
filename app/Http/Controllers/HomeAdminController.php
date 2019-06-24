<?php

namespace App\Http\Controllers;
use App\Article;
use App\Events;
use App\Galleries;
use App\Services;
use App\Helps;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Galleries::all();

        return view('admin.home.carousel', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Galleries;

        $fileImg = $request->file('fileImg');
        $inputFile['namafile'] = time().".".$fileImg->getClientOriginalExtension();
        $desPath = public_path('/Uploaded/Banner');
        $fileImg->move($desPath,$inputFile['namafile']);
        $banner->fileImg = $inputFile['namafile'];
        $banner->type = 0; //0=banner
        $banner->save();

        return redirect()->back();
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
        $banner = Galleries::findorfail($id);

        $banner->update($request->all());
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
        $banner = Galleries::findorfail($id);  
        $banner->delete();
        return redirect()->back();
    }
}
