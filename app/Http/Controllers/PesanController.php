<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pesan::get();
        return view('admin.pesan.index', compact('data'));
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
        $data = array(
            'nama' => $request->nama,
            'no_telpon' => $request->no_telpon,
            'pesan' => $request->pesan,
            'email' => $request->email
        );
        Mail::to($request->email)->send(new Email($data));
        return redirect()->route('pesan.index');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pesan::find($id);
        $data->status_id = 2;
        $data->save();
        return view('admin.pesan.detail-pesan', compact('data'));
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
        //
    }

    public function pesan(Request $request)
    {
        $request->pesan = $request->pesan.''.$request->jumlah;
        Pesan::create([
            'kategori' => $request->kategori,
            'furniture' => $request->furniture,
            'no_wa' => $request->no_wa,
            'quantity' => $request->jumlah,
            'pesan' => $request->pesan,
            'nama' => $request->nama,
            'email' => $request->email,
            'rumah' => $request->rumah,
            'lokasi' => $request->lokasi,
            'no_telpon' => $request->no_telpon,
            'harga' => $request->total_harga,
            'alamat' => $request->alamat
        ]);
        alert()->success('Silahkan cek email anda secara berkala', 'Pesanan diproses');
        return redirect()->route('index');
    }
}
