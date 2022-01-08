@extends('admin.template.master')
@section('title', 'Pesan')
@section('content')
<div class="container-fluid col-12">
    <form class="col-md-12" method="post" action="{{route('pesan.store')}}">
        @csrf
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Nama    :</label>
            <div class="col-sm-10">
                {{$data->nama}}
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Email   :</label>
            <div class="col-sm-10">
                {{$data->email}}
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Nomor Telepon   :</label>
            <div class="col-sm-10">
                {{$data->no_telpon}}
            </div>
        </div>
        @if ($data->no_wa !== null)
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Nomor Whatsapp   :</label>
                <div class="col-sm-10">
                    {{$data->no_wa}}
                </div>
            </div>
        @endif
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Pesan   :</label>
            <div class="col-sm-10" >
                {{$data->pesan}}
            </div>
        </div>
        @if ($data->kategori === 'furniture')
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Furniture   :</label>
                <div class="col-sm-10">
                    {{$data->furniture}}
                </div>
                <input type="hidden" name="furniture" value="{{$data->furniture}}">
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Quantity    :</label>
                <div class="col-sm-10">
                    {{$data->quantity}}
                </div>
                <input type="hidden" name="quantity" value="{{$data->quantity}}">
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Harga   :</label>
                <div class="col-sm-10">
                    {{$data->harga}}
                </div>
                <input type="hidden" name="harga" value="{{$data->harga}}">
            </div>
        @endif
        @if ($data->kategori === 'rumah')
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Type Rumah  :</label>
                <div class="col-sm-10">
                    {{$data->rumah}}
                </div>
                <input type="hidden" name="rumah" value="{{$data->rumah}}">
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Lokasi  :</label>
                <div class="col-sm-10">
                    {{$data->lokasi}}
                </div>
                <input type="hidden" name="lokasi" value="{{$data->lokasi}}">
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Harga   :</label>
                <div class="col-sm-10">
                    {{$data->harga}}
                </div>
                <input type="hidden" name="harga" value="{{$data->harga}}">
            </div>
        @endif
        <input type="hidden" name="email" value="{{$data->email}}">
        <input type="hidden" name="no_telpon" value="{{$data->no_telpon}}">
        <input type="hidden" name="nama" value="{{$data->nama}}">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Balas    :</label>
            <div class="col-sm-10">
                <textarea class="col-sm-12" name="pesan" cols="30" rows="10"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary float-right"> Balas </button>
    </form>
</div>
@endsection