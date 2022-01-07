<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Jenis;
use Alert;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kategori::get();
        return view('admin.produk.kategori.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.kategori.ubah');
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
            'gambar' => 'image|mimes:jpeg,png,gif,webp|max:2048',
        ]);

        $data = new Kategori;
        $data->nama = $request->nama;
        if ($request->file('gambar')) {
            $imagePath = $request->file('gambar');
            $path = $request->file('gambar')->storeAs('kategori', time().'-'.$imagePath->getClientOriginalName() , 'public');
        }
        $data->gambar = '/storage/'.$path;
        $data->save();

        alert()->success('Kategori Berhasil Ditambah', 'Kategori');
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
        $data = Kategori::find($id);
        $jenis = Jenis::where('kategori_id', $id)->get();
        return view('admin.produk.kategori.ubah', compact('data', 'jenis'));
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
        ]);
        $data = Kategori::find($id);
        $data->nama = $request->nama;
        if ($request->file('gambar')) {
            $imagePath = $request->file('gambar');
            $path = $request->file('gambar')->storeAs('kategori', time().'-'.$imagePath->getClientOriginalName() , 'public');
            $str = str_replace('/storage', '', $data->gambar);
            unlink(storage_path('app/public'.$str));
            $data->gambar = '/storage/'.$path;
        }else{
            $data->gambar = $data->gambar;
        }
        $data->save();

        alert()->success('Kategori Berhasil Diubah', 'Kategori');
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
        $data = Kategori::find($id);
        $str = str_replace('/storage', '', $data->gambar);
        unlink(storage_path('app/public'.$str));
        $data->delete();

        alert()->success('Kategori Berhasil Dihapus', 'Kategori');
        return redirect()->route('kategori.index');
    }
}
