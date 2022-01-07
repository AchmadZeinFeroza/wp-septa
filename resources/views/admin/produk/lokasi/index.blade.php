@extends('admin.template.master')
@section('title', 'Produk Rumah')
@section('content')
<div>
    <div class="row mb-3 mt-5">
        <div class="container-fluid">
                <div class="btn-group mb-4" role="group" aria-label="Basic example">
                    <a href="{{route('lokasi.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th class="col-1">No</th>
                                <th class="col-3">Alamat</th>   
                                <th class="col-8">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key=>$item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>
                                    <a href="{{route('lokasi.edit', $item->id)}}" class="btn btn-small btn-warning mt-1"><i class="fas fa-pen"></i></a>
                                        <form class="d-inline-block" action="{{route('lokasi.destroy', $item->id)}}" method="post">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-small btn-danger mt-1" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus produk ini ?');">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                    </form>
                                    <a href="{{route('lokasi.show', $item->id)}}" class="btn btn-small btn-primary text-sm mt-1"> Atur Harga Rumah</a>
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