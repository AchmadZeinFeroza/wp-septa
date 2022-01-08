<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gambar;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        foreach($request->gambar as $img){
            $gambar = new Gambar;
            $gambar->produk_id = $request->id_produk;
            $imagePath = $img;
            $image = \Image::make($img);
            $jalur = 'produk'.time().'-'.$imagePath->getClientOriginalName();
            $path = $image->save(public_path('storage\rumah/'.$jalur), 10);
            $gambar->gambar = '/storage/rumah/'.$jalur;
            $gambar->save();
        }
        alert()->success('Produk Rumah Berhasil Ditambah', 'Produk Rumah');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img = Gambar::find($id);
        $str = str_replace('/storage', '', $img->gambar);
        unlink(storage_path('app/public'.$str));
        $img->delete();

        alert()->success('Produk Rumah Berhasil Dihapus', 'Produk Rumah');
        return redirect()->back();
    }
}
