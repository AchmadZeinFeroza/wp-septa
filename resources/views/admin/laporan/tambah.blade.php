@extends('admin.template.master')
@section('title', 'Tambah Laporan')
@section('content')  
<div class="row">
    <div class="col-md-12 mx-auto p-0">
        <div class="container-fluid">
          <form action="{{route('laporan.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" required name="user_id" value="{{auth()->user()->id}}">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan nama laporan" required name="nama">
            </div>
            <div class="form-group">
              <label for="unit">Unit</label>
              <input type="text" class="form-control" id="unit" placeholder="Masukkan Unit" required name="unit">
            </div>
            <div class="form-group">
              <label for="lokasi">Lokasi</label>
              <input type="text" class="form-control" id="lokasi" placeholder="Masukkan Lokasi" required name="lokasi">
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <textarea type="text" class="form-control" id="deskripsi" required name="deskripsi"></textarea>
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
            <div class="form-group row ">
              <div class="col-sm-10 mt-5">
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