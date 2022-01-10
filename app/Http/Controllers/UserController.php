<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::get();
        return view('admin.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Role::get();
        return view('admin.user.tambah' , compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role_id' => 'required',
            'alamat' => 'required',
        ]);
        if($request->file('ktp')){
            $imagePath = $request->file('ktp');
            $image = \Image::make($request->file('ktp'));
            $jalur = time().'-'.$imagePath->getClientOriginalName();
            $path = $image->save(storage_path('app/public/user/'.$jalur), 8);
            $path = '/storage/ktp/'.$jalur;
        }
        $user = User::create([
            'nama' => $request->nama, 
            'no_telpon' => $request->no_telpon, 
            'username' => $request->username, 
            'password' => Hash::make($request->password), 
            'role_id' => $request->role_id, 
            'alamat' => $request->alamat, 
            'gambar' => '/storage/'.'user/user.png',
            'ktp' => $path,
        ]);
        

        alert()->success('User Berhasil Ditambah', 'User');
        return redirect()->back();
        
    }

    public function profil(){
        return view('admin.user.profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);
        return view('admin.user.detail', compact('data'));
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
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'alamat' => 'required',
        ]);
        $data = User::find($id);
        $data->nama = $request->nama;
        $data->username = $request->username;
        $data->alamat = $request->alamat;
        $data->no_telpon = $request->no_telpon;
        $data->role_id = $data->role_id;
        if($request->password){
            $data->password = Hash::make($request->password);    
        }else{
            $data->password = $data->password;
        }
        if ($request->file('gambar')) {
            $imagePath = $request->file('gambar');
            $image = \Image::make($request->file('gambar'));
            $jalur = time().'-'.$imagePath->getClientOriginalName();
            $path = $image->save(storage_path('app/public/user/'.$jalur), 8);
            $data->gambar = '/storage/user/'.$jalur;
        }else{
            $data->gambar = $data->gambar;
        }
        $data->save();
        alert()->success('User Berhasil Diubah', 'User');
        return redirect()->route('user.profil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();

        alert()->success('User Berhasil Dihapus', 'User');
        return redirect()->route('user.index');
    }
}
