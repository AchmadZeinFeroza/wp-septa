<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Gambar;
use App\Models\Rumah;

class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Produk::where('jenis' , 'rumah')->get();
        return view('admin.produk.rumah.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.rumah.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->jenis = 'rumah';
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);

        $produk = Produk::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'jenis' => 'rumah',
        ]);

        foreach($request->gambar as $img){
            $gambar = new Gambar;
            $gambar->produk_id = $produk->id;
            $imagePath = $img;
            $path = $img->storeAs('rumah', time().'-'.$imagePath->getClientOriginalName() , 'public');
            $gambar->gambar = '/storage/'.$path;
            $gambar->save();
        }

        alert()->success('Produk Rumah Berhasil Ditambah', 'Produk Rumah');
        return redirect()->route('rumah.index');
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
        $data = Produk::find($id);
        return view('admin.produk.rumah.ubah', compact('data'));
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
            'deskripsi' => 'required',
        ]);
        Produk::find($id)->update($request->all());
        alert()->success('Produk Rumah Berhasil Diubah', 'Produk Rumah');
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
        $data = Produk::find($id);
        foreach($data->gambar as $img){
            $str = str_replace('/storage', '', $img->gambar);
            unlink(storage_path('app/public'.$str));
        }
        $data->delete();
        alert()->success('Produk Rumah Berhasil Dihapus', 'Produk Rumah');
        return redirect('/produk/rumah');
    }
}
