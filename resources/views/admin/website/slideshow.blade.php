@extends('admin.template.master')
@section('title', 'Produk Rumah')
@section('content')
<div>
    <div class="row mb-3 mt-5">
        <div class="container-fluid">
            <div class="btn-group mb-4" role="group" aria-label="Basic example">
                <a href="" class="btn btn-success" data-toggle="modal" data-target="#TambahSlideShow"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="row">

                @foreach ($data as $item)

                <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h5 class="m-0 pt-1 font-weight-bold text-black-50">{{$item->judul}}</h5>
                        </div>
                        <div class="card-body">
                                <form action="{{url('/website/slideshow/'.$item->id)}}" method="post" enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="judul" name="judul" autocomplete="off" placeholder="Judul Slideshow" value="{{$item->judul}}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <img src="{{ asset($item->gambar) }}" width="100%" class="mb-1">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar" aria-describedby="gambar" accept="image/*">
                                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi" class="label">Deskripsi</label>
                                        <textarea name="deskripsi" class="col-12" id="deskripsi" cols="30" rows="4">{{$item->deskripsi}}</textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right ml-2">Simpan</button>
                                </form>
                                <form class="d-inline-block float-right" action="{{route('slideshow.destroy', $item->id)}}" method="post">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus kategori ini ?');">
                                        Hapus
                                    </button>
                                </form>
                        </div>
                    </div>
                </div>
                                
                @endforeach
                            
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="TambahSlideShow" tabindex="-1" role="dialog" aria-labelledby="TambahSlideShowLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TambahSlideShowLabel">Tambah SlideShow</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('website/slideshow')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar" name="gambar" aria-describedby="gambar" accept="image/*" required>
                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="judul" name="judul" autocomplete="off" placeholder="Masukkan Judul">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi" class="label">Deskripsi</label>
                        <textarea name="deskripsi" class="col-12" id="deskripsi" cols="30" rows="10"></textarea>
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