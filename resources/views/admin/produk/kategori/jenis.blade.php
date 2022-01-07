<div class="card shadow-sm">
    <div class="card-header">
        <h5 class="m-0 pt-1 font-weight-bold text-black-50 float-left">Jenis</h5>
        <a href="" class="btn btn-primary btn-sm float-right addTypeModal" data-toggle="modal" data-target="#TypeModal" data-category="">Tambah jenis baru</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Jenis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jenis as $item)
                    
                <tr>
                    <td>{{$item->nama}}</td>
                        <td>
                            <a class="btn btn-small btn-warning" id="btn-jenis" data-target="#jenisModal" data-toggle="modal" data-id="{{route('jenis.update', $item->id)}}" data-nama="{{$item->nama}}"><i class="fas fa-pen"></i></a>
                            <form class="d-inline-block" action="{{route('jenis.destroy', $item->id)}}" method="post">
                                @csrf @method('DELETE')
                                <button class="btn btn-small btn-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus jenis ini ?');">
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

<div class="modal fade" id="jenisModal" tabindex="-1" role="dialog" aria-labelledby="JenisModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TypeModalLabel">Ubah Jenis Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-jenis" action="" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control nama-jenis" name="nama" placeholder="Nama Jenis" required>
                        <input type="hidden" class="form-control" id="kategori_id" name="kategori_id" value="{{$data->id}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="TypeModal" tabindex="-1" role="dialog" aria-labelledby="TypeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TypeModalLabel">Tambah Jenis Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form" action="{{route('jenis.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Jenis">
                        <input type="hidden" class="form-control" id="kategori_id" name="kategori_id" value="{{$data->id}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>


@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click' , "#btn-jenis", function(){
                var nama = $(this).data('nama');
                var id = $(this).data('id');
                $('.nama-jenis').val(nama);
                $('#form-jenis').attr('action', id);
                
            });
        });
    </script>
@endsection