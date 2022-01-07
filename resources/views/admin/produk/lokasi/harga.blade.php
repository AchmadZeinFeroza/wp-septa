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
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Rumah</th>   
                                <th>Harga</th> 
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rumah as $key=>$item)    
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->nama}}</td>
        
                                    <td class="px-4">
                                        <form action="{{url('produk/lokasi/harga')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="produk_id" value="{{$item->id}}">
                                            <input type="hidden" name="lokasi_id" value="{{$data->id}}">
                                            <div class="form-group row">
                                                @php
                                                    $harga = App\Models\Harga::where([['lokasi_id', $data->id],['produk_id', $item->id]])->get();
                                                @endphp
                                                @if($harga->isNotEmpty())
                                                    <input type="number" name="harga" class="form-control col-10 mr-2 mb-1" placeholder="Masukkan Harga" value="{{$harga[0]->harga}}">
                                                @else
                                                    <input type="number" name="harga" class="form-control col-10 mr-2 mb-1" placeholder="Masukkan Harga">
                                                @endif
                                                <button type="submit" class="btn btn-primary btn-sm ">Simpan</button>
                                            </div>
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