<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Jenis;
use App\Models\Furniture;
use App\Models\Produk;
use App\Models\Gambar;

class FurnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Furniture::get();
        return view('admin.produk.furniture.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::get();
        return view('admin.produk.furniture.tambah', compact('kategori'));
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
            'harga' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'jenis' => 'required',
            'gambar' => 'required',
        ]);

        $produk = Produk::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'jenis' => 'furniture',
        ]);

        Furniture::create([
            'produk_id' => $produk->id,
            'jenis_id' => $request->jenis,
            'harga' => $request->harga,
            'tokopedia' => $request->tokopedia,
            'bukalapak' => $request->bukalapak,
            'lazada' => $request->lazada,
            'shopee' => $request->shopee,
        ]);
        foreach($request->gambar as $img){
            $gambar = new Gambar;
            $gambar->produk_id = $produk->id;
            $imagePath = $img;
            $path = $img->storeAs('furniture', time().'-'.$imagePath->getClientOriginalName() , 'public');
            $gambar->gambar = '/storage/'.$path;
            $gambar->save();
        }

        alert()->success('Produk Furniture Berhasil Ditambah', 'Produk Furniture');
        return redirect()->route('furniture.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $data = Jenis::where('kategori_id', $id)->get();
        return response()->json($data);
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
        $kategori = Kategori::get();
        return view('admin.produk.furniture.ubah', compact('data', 'kategori'));
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
            'harga' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'jenis' => 'required',
        ]);
        $produk = Produk::find($request->produk_id);
        $produk->nama = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->save();
        
        $data = Furniture::find($id);
        $data->harga = $request->harga;
        $data->produk_id = $request->produk_id;
        $data->jenis_id = $request->jenis;
        $data->tokopedia = $request->tokopedia;
        $data->shopee = $request->shopee;
        $data->bukalapak = $request->bukalapak;
        $data->lazada = $request->lazada;
        $data->save();

        alert()->success('Produk Furniture Berhasil Diubah', 'Produk Furniture');
        return redirect()->route('furniture.index');
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
