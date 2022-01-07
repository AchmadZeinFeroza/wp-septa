@extends('admin.template.master')
@section('title', 'Produk Rumah / Ubah')
@section('content')   
<div class="row">
    <div class="col-md-12 mx-auto px-5">
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
            <form action="{{route('rumah.update', $data->id  )}}" enctype="multipart/form-data" method="post" >
                @csrf @method('patch')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Produk" name="nama" value="{{$data->nama}}" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea type="text" class="form-control col-12" id="deskripsi" placeholder="Deskripsi Produk" name="deskripsi" required>{{$data->deskripsi}}</textarea>
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
<div class="container-fluid p-5">
    <div class="form-group row">
        <h3 class="mb-5">Gambar</h3>
        <div class="col-12">
            <div class="form-group row">
                @foreach ($data->gambar as $img)
                <div class="col-4">
                    <img class="mb-1" src="{{asset($img->gambar)}}" alt="" width="100%" height="250px">
                    @if (count($data->gambar) !== 1)
                    <form action="{{route('gambar.destroy' , $img->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-block mb-1" onclick="return confirm('Apakah anda yakin ingin menghapus foto ini ?');">Hapus foto</button>
                    </form>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        <div class="col">
            <form action="{{route('gambar.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group hdtuto control-group lst increment" >
                    <input type="hidden" name="id_produk" value="{{$data->id}}">
                    @if (count($data->gambar) <= 1)
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
                    @if (count($data->gambar) <= 1)
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