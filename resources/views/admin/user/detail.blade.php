@extends('admin.template.master')
@section('title', 'Profil')
@section('content')  
<div class="row">
    <div class="col-md-10 mx-auto p-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{asset($data->gambar)}}">
                        <span class="font-weight-bold">{{$data->nama}}</span><span> </span></div>
                </div>
                <div class="col-md-9 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="Nama" value="{{$data->nama}}" name="nama" readonly></div>
                            <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" placeholder="Username" value="{{$data->username}}" name="username" readonly></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" placeholder="Alamat" value="{{$data->alamat}}" name="alamat" readonly></div>
                            <div class="col-md-12"><label class="labels">Nomor Telepon</label><input type="text" class="form-control" placeholder="Nomor Telepon" value="{{$data->no_telpon}}" name="no_telpon" readonly></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels mr-5">Identitas</label>
                                <a href="{{asset($data->ktp)}}" type="button" class="btn btn-sm btn-primary mb-2" download>Download Identitas</a>
                                <img src="{{asset($data->ktp)}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection