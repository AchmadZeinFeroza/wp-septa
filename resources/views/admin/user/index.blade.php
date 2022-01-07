@extends('admin.template.master')
@section('title', 'User')
@section('content')
<div class="row mb-3 mt-5">
    <div class="container-fluid">
            <div class="btn-group mb-4" role="group" aria-label="Basic example">
                <a href="{{route('user.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
            </div>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Posisi</th>
                        <th>Alamat</th>
                        <th>Nomor Telpon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $user)
                    @if ($user->id !== auth()->user()->id) 
                        <tr>
                            <td>{{$user->nama}}</td>
                            <td>{{$user->role->posisi}}</td>
                            <td>{{$user->alamat}}i</td>
                            <td>{{$user->no_telpon}}</td>
                            <td>
                                <a class="btn btn-small btn-success" href="{{route('user.show', $user->id)}}"><i class="fas fa-eye"></i></a>
                                <form class="d-inline-block" action="{{route('user.destroy', $user->id)}}" method="post">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-small btn-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus user ini ?');">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
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