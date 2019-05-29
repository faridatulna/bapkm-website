<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->role_id == 0) {
            $datas = User::get();
            return view('auth.user', compact('datas'));
        }
        Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
        return redirect()->to('admin');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role_id == 0) {
            return view('auth.register');
        }
        Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
        return redirect()->to('admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = User::where('username',$request->input('username'))->count();

        if($count>0){
            Session::flash('message', 'Already exist!');
            Session::flash('message_type', 'danger');
            return redirect()->to('admin');
        }

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:20|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);


        if($request->file('gambar') == '') {
            $gambar = NULL;
        } else {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar')->move("adminlte/images/user", $fileName);
            $gambar = $fileName;
        }

        User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'role_id' => $request->input('role_id'),
            'password' => bcrypt(($request->input('password'))),
            'pass_seen' =>($request->input('password')),
            'gambar' => $gambar
        ]);

        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect()->route('admin.user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::findOrFail($id);

        if( Auth::user()->id == $id ) { //&& ( (Auth::user()->level == 1) || (Auth::user()->level == 2) )
            return view('auth.show', compact('data'));
        }
        else if( Auth::user()->role_id == 0 ){
            return view('auth.show', compact('data'));
        }

        Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
        return redirect()->back();
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        if( Auth::user()->id != $id && Auth::user()->role_id == 0 ) {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('admin');
        }

        $data = User::findOrFail($id);

        return view('auth.edit', compact('data'));
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
        $user_data = User::findOrFail($id);

        if($request->file('gambar')) 
        {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar')->move("adminlte/images/user", $fileName);
            $user_data->gambar = $fileName;
        }

        $user_data->name = $request->input('name');
        $user_data->email = $request->input('email');
        if($request->input('password')) {
            $user_data->role_id = $request->input('role_id');
        }

        if($request->input('password')) {
            $user_data->password= bcrypt(($request->input('password')));
            $user_data->pass_seen=($request->input('password'));
        }

        $user_data->update();

        Session::flash('message', 'Berhasil diubah!');
        Session::flash('message_type', 'success');
        return redirect()->to('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->role_id==0 && Auth::user()->id != $id) {
            $user_data = User::findOrFail($id);
            $user_data->delete();
            Session::flash('message', 'Berhasil dihapus!');
            Session::flash('message_type', 'success');
        } else {
            Session::flash('message', 'Akun anda sendiri tidak bisa dihapus!');
            Session::flash('message_type', 'danger');
        }
        return redirect()->to('admin');
    }
}
