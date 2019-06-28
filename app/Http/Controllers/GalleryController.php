<?php

namespace App\Http\Controllers;
use App\Article;
use App\Events;
use App\Galleries;
use App\Services;
use App\Helps;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Galleries::all();
        // $data_first = Galleries::firstOrFail();
        return view('admin.home.carousel', compact('datas'));
    }

    public function pagehome(){
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carousel = new Galleries;
        
        $banner = $request->file('banner');
        $inputFile['namafile'] = time().".".$banner->getClientOriginalExtension();
        $desPath = public_path('Uploaded/Banner');
        $banner->move($desPath,$inputFile['namafile']);
        $carousel->banner = $inputFile['namafile'];
        
        if($request->type == [1]){
            $carousel->type = 1;
        }
        elseif($request->type == [2]){
            $carousel->type = 2;
        }
        
        $carousel->save();

        return redirect()->back();
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
        $carousel = Galleries::findorfail($id);
        
        // $hidden = $request->file('hidden_banner');
        // $banner = $request->file('banner');
        
        if ($request->hasFile('banner'))
        {
            $file = $request->file('banner');
            $inputFile['banner'] = time().".".$file->getClientOriginalExtension();
            $desPath = public_path('Uploaded/Banner');
            $request->file('banner')->move($desPath, $inputFile['banner']);
            $carousel->banner = $inputFile['banner'];
        }

        if($request->type == [1]){
            $carousel->type = 1;
        }
        elseif($request->type == [2]){
            $carousel->type = 2;
        }
        
        $carousel->update();

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
        $carousel = Galleries::findorfail($id);  
        $carousel->delete();
        return redirect()->back();
    }
}
