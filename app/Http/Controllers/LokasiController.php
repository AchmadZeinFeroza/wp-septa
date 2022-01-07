<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;
use App\Models\FotoLokasi;
use App\Models\Produk;
use App\Models\Harga;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Lokasi::get();
        return view('admin.produk.lokasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.lokasi.tambah');
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
            'alamat' => 'required',
            'pin_lokasi' => 'required',
            'foto' => 'required',
        ]);
        $data = Lokasi::create($request->all());
        foreach($request->foto as $img){
            $foto = new FotoLokasi;
            $foto->lokasi_id = $data->id;
            $imagePath = $img;
            $path = $img->storeAs('lokasi', time().'-'.$imagePath->getClientOriginalName() , 'public');
            $foto->foto = '/storage/'.$path;
            $foto->save();
        }
        alert()->success('Lokasi Berhasil Ditambahlan', 'Lokasi Rumah');
        return redirect()->route('lokasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Lokasi::find($id);
        $rumah = Produk::where('jenis', 'rumah')->get();
        return view('admin.produk.lokasi.harga', compact('data', 'rumah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Lokasi::find($id);
        return view('admin.produk.lokasi.ubah', compact('data'));
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
            'alamat' => 'required',
            'pin_lokasi' => 'required',
        ]);
        Lokasi::find($id)->update($request->all());
        alert()->success('Lokasi Berhasil Diubah', 'Lokasi');
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
        $data = Lokasi::find($id);
        $data->delete();
        foreach($data->foto as $img){
            $str = str_replace('/storage', '', $img->foto);
            unlink(storage_path('app/public'.$str));
        }
        $data->delete();
        alert()->success('Lokasi Berhasil Dihapus', 'Lokasi');
        return redirect()->back();
    }

    public function tambah_foto(Request $request){
        foreach($request->foto as $img){
            $foto = new FotoLokasi;
            $foto->lokasi_id = $request->lokasi_id;
            $imagePath = $img;
            $path = $img->storeAs('lokasi', time().'-'.$imagePath->getClientOriginalName() , 'public');
            $foto->foto = '/storage/'.$path;
            $foto->save();
        }
        alert()->success('Foto Lokasi Berhasil Ditambah', 'Foto Lokasi');
        return redirect()->back();
    }

    public function hapus_foto($id){
        $data = FotoLokasi::find($id);
        $data->delete();
        alert()->success('Foto Lokasi Berhasil Dihapus', 'Foto Lokasi');
        return redirect()->back();
    }

    public function harga(Request $request){
        $data = Harga::where([['lokasi_id', $request->lokasi_id],['produk_id', $request->produk_id]])->first();
        if(empty($data)){
            Harga::create($request->all());
        }else{
            $data->harga = $request->harga;
            $data->save();
        }
        alert()->success('Harga Berhasil Diatur', 'Harga');
        return redirect()->back();
    }
}
