@extends('admin.template.master')
@section('title', 'Produk Furniture')
@section('content')
<div>
    <div class="row mb-3 mt-5">
        <div class="container-fluid">
                <div class="btn-group mb-4" role="group" aria-label="Basic example">
                    <a href="{{route('furniture.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Jenis</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$item->produk->nama}}</td>
                            {{-- <td>
                                <a class="btn btn-small btn-primary"><i class="fas fa-eye"></i></a>
                            </td> --}}
                            <td>{{$item->harga}}</td>
                            <td>{{$item->jenis->kategori->nama}}</td>
                            <td>{{$item->jenis->nama}}</td>
                            <td>
                                <a href="{{route('furniture.edit', $item->produk->id)}}" class="btn btn-small btn-warning"><i class="fas fa-pen"></i></a>
                                    <form class="d-inline-block" action="{{route('rumah.destroy', $item->produk_id)}}" method="post">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-small btn-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus produk ini ?');">
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
@endsection
@section('script')
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
@endsection