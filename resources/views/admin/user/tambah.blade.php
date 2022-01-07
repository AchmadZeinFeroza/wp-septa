@extends('admin.template.master')
@section('title', 'Tambah User')
@section('content')  
<div class="row">
    <div class="card col-md-10 mx-auto">
        <div class="container-fluid">
            <form enctype="multipart/form-data" method="post" action="{{route('user.store')}}">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" placeholder="Nama User" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">No Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" placeholder="Nomor Telepon" name="no_telpon">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role_id" class="col-sm-2 col-form-label">Posisi</label>
                    <div class="col-sm-10">
                        <select class="form-select form-control"  name="role_id" id="role_id">
                            <option selected>Posisi</option>
                            @foreach ($data as $posisi)
                            <option value="{{$posisi->id}}">{{$posisi->posisi}}</option>
                            @endforeach
                        </select>  
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" id="alamat" name="alamat"> </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ktp" class="col-sm-2 col-form-label">Foto KTP</label>
                    <div class="col-sm-10">
                        <input type="file" name="ktp" class="myfrm form-control" accept="image/*">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
    </script>
@endsection