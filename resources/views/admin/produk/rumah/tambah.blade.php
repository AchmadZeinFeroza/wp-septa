@extends('admin.template.master')
@section('title', 'Produk Rumah / Tambah')
@section('content')   
<div class="row">
    <div class="col-md-12 mx-auto p-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>    
                                @foreach ($errors->all() as $error)
                                <strong>{{ $error }}</strong><br>
                                @endforeach
                        </div>
                    @endif
                </div>
            </div>
            <form action="{{route('rumah.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Nama Produk" name="nama" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <div class="input-group hdtuto control-group lst increment" >
                            <input type="file" name="gambar[]" class="myfrm form-control"  accept="image/*" required>
                            <div class="input-group-btn"> 
                            <button class="btn btn-success" id="tambah" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Tambah Gambar</button>
                            </div>
                        </div>
                        <div class="clone d-none">
                            <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                            <input type="file" name="gambar[]" class="myfrm form-control" accept="image/*">
                            <div class="input-group-btn"> 
                                <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i>Hapus</button>
                            </div>
                            </div>
                        </div>
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
<script type="text/javascript">
    $(document).ready(function() {
      $("#tambah").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto").remove();
      });
    });
</script>
@endsection