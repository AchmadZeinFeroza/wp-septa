@extends('admin.template.master')
@section('title', 'Profil')
@section('content')  
<div class="row">
    <div class="col-md-10 mx-auto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 border-right">
                    <form action="{{route('user.update', auth()->user()->id)}}" method="post" id="form" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{asset(auth()->user()->gambar)}}">
                        <span class="font-weight-bold">{{auth()->user()->nama}}</span><span> </span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar" aria-describedby="gambar">
                        <label class="custom-file-label" for="gambar">Ubah Foto</label>
                    </div>
                </div>
                <div class="col-md-9 border-right">
                    <div class="p-3 py-5">
                                
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Profile Settings</h4>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="Nama" value="{{auth()->user()->nama}}" name="nama"></div>
                                    <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" placeholder="Username" value="{{auth()->user()->username}}" name="username"></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" placeholder="Alamat" value="{{auth()->user()->alamat}}" name="alamat"></div>
                                    <div class="col-md-12"><label class="labels">Nomor Telepon</label><input type="text" class="form-control" placeholder="Nomor Telepon" value="{{auth()->user()->no_telpon}}" name="no_telpon"></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6"><label class="labels">Password</label><input type="password" id="password" class="form-control" placeholder="Password" value="" name="password"></div>
                                    <div class="col-md-6"><label class="labels">Konfirmasi Password Baru</label><input name="confirm" id="confirm_password" type="password" class="form-control" placeholder="Konfirmasi Password Baru" value="" disabled>
                                    <br><small id="message"></small></div>
                                </div>
                                <div class="mt-5 text-center">
                                    <button class="btn btn-primary profile-button" type="submit" id="save">Save Profile</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
    $(document).ready(function() {
        $('input[name="password"]').keyup(function() {
        if($(this).val() != '') {
            $(':input[type="submit"]').prop('disabled', true);
            $(':input[name="confirm"]').prop('disabled', false);
            $("#password ,#confirm_password").on("keyup", function () {
                var value = $("#password").val();
                if($('#confirm_password').val() === ''){
                    $(':input[type="submit"]').prop('disabled', true);
                }
                if ($("#password").val() === ''){
                    $(':input[type="submit"]').prop('disabled', false);
                }else{
                    if ($("#password").val() === $("#confirm_password").val() && $("#password").val().length >= 5 ) {
                        $("#message").html("Sudah Cocok").css("color", "green");
                        $(':input[type="submit"]').prop('disabled', false);
                    }else{
                        $(':input[type="submit"]').prop('disabled', true);
                        $("#message").html("Belum Cocok / Kurang dari 5 Karakter").css("color", "red");
                    }
                }
            });
        }else{
            $(':input[name="confirm"]').prop('disabled', true);
            $(':input[type="submit"]').prop('disabled', false);
        }
        });
    } );
    </script>
@endsection