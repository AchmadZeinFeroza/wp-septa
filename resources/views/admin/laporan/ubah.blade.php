@extends('admin.template.master')
@section('title', 'Laporan / Ubah')
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
            <form action="{{route('laporan.update', $data->id  )}}" enctype="multipart/form-data" method="post" >
                @csrf @method('patch')
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Nama Laporan" required name="nama" value="{{$data->nama}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="unit" class="col-sm-2 col-form-label">Unit</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="unit" placeholder="Masukkan Unit" required name="unit" value="{{$data->unit}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="lokasi" placeholder="Masukkan Lokasi" required name="lokasi" value="{{$data->lokasi}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" id="deskripsi" required name="deskripsi">{{$data->deskripsi}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 my-5">
                        <button type="submit" class="btn btn-success col-12" id="btn-produk">Ubah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="form-group row">
        <h3 class="mb-5">Gambar</h3>
        <div class="col-12">
            <div class="form-group row">
                @foreach ($data->foto as $foto)
                <div class="col-md-4">
                    <img class="mb-1" src="{{asset($foto['foto'])}}" alt="" width="100%" height="250px">
                    <form action="{{url('/laporan/foto/'. $foto['id'])}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-block mb-1" onclick="return confirm('Apakah anda yakin ingin menghapus foto ini ?');">Hapus foto</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col">
            <form action="{{url('laporan/tambah-foto')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group hdtuto control-group lst increment" >
                    <input type="hidden" name="laporan_id" value="{{$data->id}}">
                    @if (count($data->foto) <= 1)
                    <input type="file" name="gambar[]" class="myfrm form-control"  accept="image/*" required>
                    @else
                    <input type="file" name="gambar[]" class="myfrm form-control"  accept="image/*">
                    @endif
                    <div class="input-group-btn"> 
                        <button class="btn btn-success" id="tambah" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>+</button>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-success col-12" >Tambah</button>
                <div class="clone d-none">
                    <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                    @if (count($data->foto) <= 1)
                    <input type="file" name="gambar[]" class="myfrm form-control"  accept="image/*">
                    @else
                    <input type="file" name="gambar[]" class="myfrm form-control"  accept="image/*">
                    @endif
                    <div class="input-group-btn"> 
                        <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i>Hapus</button>
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