@extends('admin.template.master')
@section('title', 'Ubah Kategori Produk')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="m-0 pt-1 font-weight-bold text-black-50">Kategori</h5>
                </div>
                <div class="card-body">
                        <form action="{{route('kategori.update', $data->id)}}" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" placeholder="Nama Kategori" value="{{$data->nama}}" required>
                            </div>
                            <div class="input-group mb-3">
                                <img src="{{ asset($data->gambar) }}" width="100%" >
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar" aria-describedby="gambar">
                                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Ubah</button>
                        </form>
                        <form class="d-inline-block float-right" action="{{route('kategori.destroy', $data->id)}}" method="post">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus kategori ini ?');">
                                Hapus
                            </button>
                        </form>
                    <a class="btn btn-outline-secondary" href=""> Kembali</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            @include('admin.produk.kategori.jenis')
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
@endsection