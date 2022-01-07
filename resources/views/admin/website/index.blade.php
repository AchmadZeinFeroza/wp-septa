@extends('admin.template.master')
@section('title', 'Ubah Kategori Produk')
@section('content')
<div class="container-fluid">
    @foreach ($data as $item)
    <form action="{{url('/website/update/'.$item->id.'')}}" method="POST">
        @csrf @method('patch')
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="m-0 pt-1 font-weight-bold text-black-50">Ubah Data Perusahaan</h5>
                    </div>
                    <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Perusahaan" value="{{$item->nama}}" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" value="{{$item->alamat}}" name="alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_telpon">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="no_telpon" placeholder="Masukkan Nomor Telepon" value="{{$item->no_telpon}}" name="no_telpon" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_wa">Nomor WhatsApp</label>
                                    <input type="text" class="form-control" id="no_wa" placeholder="Masukkan Nomor WhatsApp" value="{{$item->no_wa}}" name="no_wa">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Masukkan Email" value="{{$item->email}}" name="email" required>
                                </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="m-0 pt-1 font-weight-bold text-black-50">Ubah Link Perusahaan</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="link_wa">Link WhatsApp</label>
                            <input type="text" class="form-control" id="link_wa" placeholder="Masukkan Link WhatsApp" name="link_wa" value="{{$item->link_wa}}">
                        </div>
                        <div class="form-group">
                            <label for="link_tokopedia">Link Tokopedia</label>
                            <input type="text" class="form-control" id="link_tokopedia" placeholder="Masukkan Link Tokopedia" name="link_tokopedia" value="{{$item->link_tokopedia}}">
                        </div>
                        <div class="form-group">
                            <label for="link_shopee">Link Shopee</label>
                            <input type="text" class="form-control" id="link_shopee" placeholder="Masukkan Link Shopee" name="link_shopee" value="{{$item->link_shopee}}">
                        </div>
                        <div class="form-group">
                            <label for="link_fb">Link Facebook</label>
                            <input type="text" class="form-control" id="link_fb" placeholder="Masukkan Link Facebook" name="link_fb" value="{{$item->link_fb}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="m-0 pt-1 font-weight-bold text-black-50">Ubah Utilitas</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Perusahaan</label>
                            <textarea class="form-control"id="" cols="30" rows="5" name="deskripsi">{{$item->deskripsi}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Maps</label>
                            <textarea class="form-control"  id="" cols="30" rows="5" name="maps">{{$item->maps}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-success col-lg-12">Simpan</button>
            </div>
        </div>
    </form>
@endforeach
</div>
@endsection