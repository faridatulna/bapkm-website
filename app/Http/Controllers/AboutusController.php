<?php

namespace App\Http\Controllers;
use App\Aboutus;
use Illuminate\Http\Request;
use Session;

class AboutusController extends Controller
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

  }

   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('admin.aboutus.history');
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

        $aboutus = new Aboutus;
  
        $aboutus->title = $request->title;
        $aboutus->year = $request->year;
        $aboutus->longText = $request->longText;
        if($request->type == [1]){
            $aboutus->type = 1;
        }
        else if($request->type == [2]){
            $aboutus->type = 2;
        }
        else if($request->type == [3]){
            $aboutus->type = 3;
        }
        else if($request->type == [4]){
            $aboutus->type = 4;
        }
        // else if($request->type == [5]){
        //     $aboutus->type = 5;
        // }
        

        //['hist-logo','hist-name','profile-ap','profile-km','org']
        // dd($request->all());
        $aboutus->save();

        // Session::flash('message', 'Berhasil ditambahkan!');
        // Session::flash('message_type', 'success');
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
    
    $aboutus = Aboutus::findorfail($id);
    $aboutus->update($request->all());

    // Session::flash('message', 'Berhasil diubah!');
    // Session::flash('message_type', 'success');
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
      //
  }
}
