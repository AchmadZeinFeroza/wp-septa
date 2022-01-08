<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\SlideShow;
use App\Models\Furniture;
use App\Models\Lokasi;
use App\Models\Kategori;
use App\Models\Jenis;
use App\Models\Rumah;
use App\Models\Produk;
use DB;

class WebsiteController extends Controller
{
    public function index(){
        $data = Perusahaan::first();
        $slideshow = SlideShow::get();
        $furniture = Furniture::limit(8)->get();
        $rumah = Produk::where('jenis', 'rumah')->limit(4)->get();
        $kategori = Kategori::get();
        $lokasi = Lokasi::limit(6)->get();
        return view('index2', compact('data', 'slideshow', 'furniture', 'rumah','kategori', 'lokasi'));
    }

    public function show(){
        $data = Perusahaan::get();
        return view('admin.website.index', compact('data'));
    }

    public function update(Request $request , $id){
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'no_telpon' => 'required',
            'email' => 'required',
        ]);
        Perusahaan::find($id)->update($request->all());
        alert()->success('Deskripsi Perusahaan Berhasil Diubah', 'Website');
        return redirect()->back();
    }

    public function slideshow(){
        $data = SlideShow::get();
        return view('admin.website.slideshow', compact('data'));
    }

    public function create_slideshow(Request $request){
        $request->validate([
            'gambar' => 'required',
        ]);
        $data = new SlideShow;
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        if ($request->file('gambar')) {
            $imagePath = $request->file('gambar');
            $image = \Image::make($request->file('gambar'));
            $jalur = time().'-'.$imagePath->getClientOriginalName();
            $path = $image->save(storage_path('storage\slideshow/'.$jalur), 10);
        }
        $data->gambar = '/storage/slideshow/'.$jalur;
        $data->save();
        alert()->success('SlideShow Berhasil Ditambah', 'Website');
        return redirect()->back();

    }

    public function update_slideshow(Request $request , $id){
        $data = SlideShow::find($id);
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        if ($request->file('gambar')) {
            $imagePath = $request->file('gambar');
            $image = \Image::make($request->file('gambar'));
            $jalur = time().'-'.$imagePath->getClientOriginalName();
            $path = $image->save(storage_path('slideshow/'.$jalur), 10);
            $str = str_replace('/storage', '', $data->gambar);
            unlink(storage_path('app/public'.$str));
            $data->gambar = '/storage/slideshow/'.$jalur;
        }else{
            $data->gambar = $data->gambar;
        }
        $data->save();
        alert()->success('SlideShow Berhasil Diubah', 'Slideshow');
        return redirect()->back();

    }

    public function delete_slideshow($id){
        $data = SlideShow::find($id);
        $str = str_replace('/storage', '', $data->gambar);
        unlink(storage_path('app/public'.$str));
        $data->delete();
        alert()->success('SlideShow Berhasil Dihapus', 'Slideshow');
        return redirect()->back();
    }

    public function kategori(){
        $data = Perusahaan::first();
        $furniture = Furniture::paginate(6);
        $rumah = Produk::where('jenis', 'rumah')->get();
        $kategori = Kategori::get();
        $lokasi = Lokasi::get();
        return view('furniture2', compact('data', 'furniture', 'rumah','kategori', 'lokasi'));
    }
    public function furniture($id){
        $data = Furniture::whereHas('jenis',function($q) use ($id){
            $q->whereKategoriId($id);
        })->get();
        $jenis = Jenis::where('kategori_id', $id)->get();
        return view('furniture', compact('data', 'jenis'));
    }

    public function jenis($id){
        $data = Furniture::where('jenis_id', $id)->get();
        $kategori = Jenis::find($id);
        $kategori = $kategori->kategori_id;
        $jenis = Jenis::where('kategori_id', $kategori)->get();
        return view('furniture', compact('data', 'jenis'));
    }
    
    public function detail_furniture($id){
        $detail = Furniture::find($id);
        $data = Perusahaan::first();
        $furniture = Furniture::get();
        $rumah = Produk::where('jenis', 'rumah')->get();
        $kategori = Kategori::get();
        $lokasi = Lokasi::get();
        return view('furniture-detail', compact('data', 'furniture', 'rumah','kategori', 'lokasi','detail'));
    }

    public function pilih_jenis($id){
        $data = Perusahaan::first();
        $furniture = Furniture::where('jenis_id' , $id)->get();
        $rumah = Produk::where('jenis', 'rumah')->get();
        $kategori = Kategori::get();
        $lokasi = Lokasi::get();
        return view('furniture2', compact('data', 'furniture', 'rumah','kategori', 'lokasi'));
    }
    public function pilih_kategori($id){
        $data = Perusahaan::first();
        $furniture =  Furniture::whereHas('jenis',function($q) use ($id){
            $q->whereKategoriId($id);
        })->get();
        $rumah = Produk::where('jenis', 'rumah')->get();
        $kategori = Kategori::get();
        $lokasi = Lokasi::get();
        return view('furniture2', compact('data', 'furniture', 'rumah','kategori', 'lokasi'));
    }

    public function rumah(){
        $data = Perusahaan::first();
        $furniture = Furniture::get();
        $rumah = Produk::where('jenis', 'rumah')->get();
        $kategori = Kategori::get();
        $lokasi = Lokasi::get();
        return view('rumah2', compact('data', 'furniture', 'rumah','kategori', 'lokasi'));
    }
    public function detail_rumah($id){
        $detail = Produk::find($id);
        $data = Perusahaan::first();
        $furniture = Furniture::get();
        $rumah = Produk::where('jenis', 'rumah')->get();
        $kategori = Kategori::get();
        $lokasi = Lokasi::get();
        return view('rumah-detail', compact('data', 'furniture', 'rumah','kategori', 'lokasi', 'detail'));
    }
    public function lokasi(){
        $data = Perusahaan::first();
        $furniture = Furniture::get();
        $rumah = Produk::where('jenis', 'rumah')->get();
        $kategori = Kategori::get();
        $lokasi = Lokasi::get();
        return view('lokasi', compact('data', 'furniture', 'rumah','kategori', 'lokasi'));
    }
    public function detail_lokasi($id){
        $detail = Lokasi::find($id);
        $data = Perusahaan::first();
        $furniture = Furniture::get();
        $rumah = Produk::where('jenis', 'rumah')->get();
        $kategori = Kategori::get();
        $lokasi = Lokasi::get();
        return view('lokasi-detail', compact('data', 'furniture', 'rumah','kategori', 'lokasi', 'detail'));
    }
    public function kontak(){
        $data = Perusahaan::first();
        $furniture = Furniture::get();
        $rumah = Produk::where('jenis', 'rumah')->get();
        $kategori = Kategori::get();
        $lokasi = Lokasi::get();
        return view('kontak', compact('data', 'furniture', 'rumah','kategori', 'lokasi'));
    }
    public function form_furniture($id){
        $detail = Furniture::find($id);
        $data = Perusahaan::first();
        $furniture = Furniture::get();
        $rumah = Produk::where('jenis', 'rumah')->get();
        $kategori = Kategori::get();
        $lokasi = Lokasi::get();
        return view('checkout-furniture', compact('data', 'furniture', 'rumah','kategori', 'lokasi','detail'));
    }
    public function form_rumah($id){
        $detail = Produk::find($id);
        $data = Perusahaan::first();
        $furniture = Furniture::get();
        $rumah = Produk::where('jenis', 'rumah')->get();
        $kategori = Kategori::get();
        $lokasi = Lokasi::get();
        return view('checkout-rumah', compact('data', 'furniture', 'rumah','kategori', 'lokasi','detail'));
    }
    public function form_lokasi($id){
        $detail = Lokasi::find($id);
        $data = Perusahaan::first();
        $furniture = Furniture::get();
        $rumah = Produk::where('jenis', 'rumah')->get();
        $kategori = Kategori::get();
        $lokasi = Lokasi::get();
        return view('checkout-rumah', compact('data', 'furniture', 'rumah','kategori', 'lokasi','detail'));
    }

    public function pilih_rumah($id){
        $data = DB::table('products')
            ->join('gambar', 'products.id','=' , 'gambar.produk_id')
            ->where('products.id', '=', $id)
            ->select('products.*', 'gambar.*')
            ->get();
        return response()->json($data[0]);
    }
    public function pilih_lokasi($id){
        $data = DB::table('lokasi')
            ->join('foto_lokasi', 'lokasi.id','=' , 'foto_lokasi.lokasi_id')
            ->where('lokasi.id', '=', $id)
            ->select('lokasi.*', 'foto_lokasi.*')
            ->get();
        return response()->json($data[0]);
    }
    public function harga_rumah(Request $request){
        $data = DB::table('harga')
            ->where('produk_id' , '=' , $request->id_rumah)
            ->where('lokasi_id' , '=' , $request->id_lokasi)
            ->select('harga')->get();
        return response()->json($data);
    }



}
