@extends('admin.template.master')
@section('title', 'Lokasi / Tambah')
@section('content')   
<div class="row">
    <div class="col-md-12 mx-auto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <form action="{{route('lokasi.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group row">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" class="form-control" placeholder="Masukkan Lokasi" name="alamat" required>
                </div>
                <div class="form-group row">
                    <label for="pin_lokasi">Pin Lokasi (Url)</label>
                    <input type="text" id="pin_lokasi" class="form-control" placeholder="Masukkan Pin Lokasi URL" name="pin_lokasi" required>
                </div>
                <div class="form-group row">
                    <label for="foto">Foto</label>
                        <div class="input-group hdtuto control-group lst increment" >
                            <input type="file" name="foto[]" class="myfrm form-control"  accept="image/*" required>
                            <div class="input-group-btn"> 
                            <button class="btn btn-success" id="tambah" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Tambah Foto</button>
                            </div>
                        </div>
                        <div class="clone d-none">
                            <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                            <input type="file" name="foto[]" class="myfrm form-control" accept="image/*">
                            <div class="input-group-btn"> 
                                <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i>Hapus</button>
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