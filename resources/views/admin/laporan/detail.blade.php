@extends('admin.template.master')
@section('title', 'Laporan / Ubah')
@section('content')   
<div class="row">
    <div class="col-md-12 mx-auto">
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
            <h5>Laporan {{$data->user->nama}}</h5>
            <p>{{ $data->created_at->format('d-m-Y - H:i') }}</p>
            <br>
                <div class="form-group row">
                    <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" value="{{$data->nama}}" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="unit">Unit</label>
                        <input type="text" class="form-control" id="unit" readonly value="{{$data->unit}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" readonly name="lokasi" value="{{$data->lokasi}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" readonly rows="auto">{{$data->deskripsi}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($data->foto as $key => $foto)
                                <div class="carousel-item <?php echo ($key === 0) ? 'active' : ''; ?>">
                                    <a href="{{asset($foto['foto'])}}" target="__blank">
                                        <img class="d-block w-100" src="{{asset($foto['foto'])}}" alt="First slide">
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                @if ($data->keterangan_id === 1)    
                    <div class="form-group row mx-auto">
                        <div class="row mx-auto">
                            <form action="{{route('laporan.disetujui', $data->id)}}" class="mr-2" method="post">
                                @csrf
                                <button class="btn btn-success">Disetujui</button>
                            </form>
                            <form action="{{route('laporan.ditolak', $data->id)}}" method="post">
                                @csrf
                                <button class="btn btn-danger">Ditolak</button>
                            </form>
                        </div>
                    </div>
                @endif
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