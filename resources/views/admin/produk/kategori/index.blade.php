@extends('admin.template.master')
@section('title', 'Kategori Produk')
@section('content')
<div>
    <div class="row mb-3 mt-5">
        <div class="container-fluid">
                <div class="btn-group mb-4" role="group" aria-label="Basic example">
                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#newCategoryModal"><i class="fas fa-plus"></i> Tambah</a>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->nama}}</td>
                                    <td>
                                        <a id="btn-gambar" data-target="#modal-gambar" data-toggle="modal" data-image="{{asset($item->gambar)}}" class="btn btn-small btn-primary"><i class="fas fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{route('kategori.edit', $item->id)}}" class="btn btn-small btn-warning"><i class="fas fa-pen"></i></a>
                                        <form class="d-inline-block" action="{{route('kategori.destroy', $item->id)}}" method="post">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-small btn-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus kategori ini ?');">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-gambar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-center">
          <img src="" alt="" class="img-fluid" id="gambar">
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="newCategoryModal" tabindex="-1" role="dialog" aria-labelledby="newCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newCategoryModalLabel">Tambah Kategori Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('kategori.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" placeholder="Nama Kategori" required>
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar" name="gambar" aria-describedby="gambar" accept="image/*" required>
                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="Submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
    $(document).ready(function() {
        $(document).on('click' , "#btn-gambar", function(){
            var src = $(this).data('image');
            $('#gambar').attr("src", src);
            $('#modal-gambar').modal('show');
        });
    });
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection