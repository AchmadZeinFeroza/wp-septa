<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\FotoLaporan;


class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Laporan::where('keterangan_id' ,1)->get();
        $id = 1;
        return view('admin.laporan.index', compact('data', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.laporan.tambah');
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
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'unit' => 'required',
            'gambar' => 'required',
        ]);
        
        $laporan = Laporan::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'user_id' => $request->user_id,
            'lokasi' => $request->lokasi,
            'unit' => $request->unit,
            'keterangan_id' => 1,
        ]);

        foreach($request->gambar as $img){
            $gambar = new FotoLaporan;
            $gambar->laporan_id = $laporan->id;
            $imagePath = $img;
            $image = \Image::make($img);
            $jalur = time().'-'.$imagePath->getClientOriginalName();
            $path = $image->save(storage_path('app/public/laporan/'.$jalur), 8);
            $gambar->foto = '/storage/laporan/'.$jalur;
            $gambar->save();
        }

        alert()->success('Laporan Berhasil Ditambah', 'Laporan Harian');
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
        if(auth()->user()->role->id !== 3 ){
            $data = Laporan::where('keterangan_id' ,$id)->get();
        }else{
            $data = Laporan::where([['keterangan_id', '=' ,$id], ['user_id', '=' , auth()->user()->id]])->get();
        }
        return view('admin.laporan.index', compact('data' , 'id'));
    }

    public function foto($id){
        $show = FotoLaporan::where('laporan_id', $id)->get();
        return response()->json($show);
    }

    public function disetujui($id)
    {
        Laporan::find($id)->update([
            'keterangan_id' => 2
        ]);
        alert()->success('Laporan Berhasil Disetujui', 'Laporan Harian');
        return redirect()->back();
    }
    public function ditolak(Request $request, $id)
    {
        Laporan::find($id)->update([
            'keterangan_id' => 3,
            'alasan' => $request->alasan
        ]);
        alert()->success('Laporan Berhasil Ditolak', 'Laporan Harian');
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
        $data = Laporan::find($id);
        if(auth()->user()->id === $data->user_id){
            return view('admin.laporan.ubah', compact('data'));
        }else{
            return redirect()->back();
        }
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
        $data = Laporan::find($id);
        Laporan::find($id)->update([
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'unit' => $request->unit,
            'deskripsi' => $request->deskripsi,
        ]);
        alert()->success('Laporan Berhasil Ditambah', 'Laporan');
        return redirect()->back();
    }

    public function hapus_foto($id){
        $data = FotoLaporan::find($id);
        $data->delete();
        alert()->success('Foto Berhasil Dihapus', 'Foto Laporan');
        return redirect()->back();
    }

    public function tambah_foto(Request $request){
        $request->validate([
            'gambar' => 'required',
        ]);
        foreach($request->gambar as $img){
            $gambar = new FotoLaporan;
            $gambar->laporan_id = $request->laporan_id;
            $imagePath = $img;
            $image = \Image::make($img);
            $jalur = time().'-'.$imagePath->getClientOriginalName();
            $path = $image->save(storage_path('app/public/laporan/'.$jalur), 8);
            $gambar->foto = '/storage/laporan/'.$jalur;
            $gambar->save();
        }
        alert()->success('Foto Berhasil Ditambah', 'Foto Laporan');
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

    public function detail($id){
        $data = Laporan::find($id);
        return view('admin.laporan.detail', compact('data'));
    }
}
