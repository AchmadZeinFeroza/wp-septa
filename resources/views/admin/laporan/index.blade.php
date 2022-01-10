@extends('admin.template.master')
@section('header')
    <style>
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
        height: 100px;
        width: 100px;
        background-size: 100%, 100%;
        background-image: none;
        }

        .carousel-control-next-icon:after
        {
        content: '>';
        font-size: 55px;
        color: black;
        }

        .carousel-control-prev-icon:after {
        content: '<';
        font-size: 55px;
        color: black;
        }
    </style>
@endsection
@section('title', 'Laporan')
@section('content')
<div>
    <div class="row mb-3 mt-5">
        <div class="container-fluid">
                <div class="btn-group mb-4" role="group" aria-label="Basic example">
                    @if (auth()->user()->role->id === 3 )
                        <a href="{{route('laporan.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                    @endif
                </div>
                <br>
                <div class="mb-3">
                    <a href="{{route('laporan.show', 1)}}" class="btn btn-outline-warning mt-3 <?php echo ($id == 1) ? 'active' : ''; ?>">Belum Di Verifikasi</a>
                    <a href="{{route('laporan.show', 2)}}" class="btn btn-outline-primary mt-3 <?php echo ($id == 2) ? 'active' : ''; ?>">Laporan Disetujui</a>
                    <a href="{{route('laporan.show', 3)}}" class="btn btn-outline-danger mt-3 <?php echo ($id == 3) ? 'active' : ''; ?>">Laporan Ditolak</a>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mandor</th>
                                <th>Nama Laporan</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->user->nama}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{ $item->created_at->format('d-m-Y - H:i') }}</td>
                                <td>
                                @if (auth()->user()->role->id !== 3 )
                                
                                    @if ($item->keterangan_id === 1)
                                        <a href="{{url('laporan/detail/'.$item->id)}}" type="submit" class="btn btn-small btn-primary">Verifikasi</a>
                                    @else
                                        <a href="{{url('laporan/detail/'.$item->id)}}" type="submit" class="btn btn-small btn-primary"><i class="fas fa-eye"></i></a>
                                    @endif
                                @else
                                    @if ($item->keterangan_id !== 1)
                                        <a href="{{url('laporan/detail/'.$item->id)}}" type="submit" class="btn btn-small btn-primary"><i class="fas fa-eye"></i></a>
                                    @else
                                        <a class="btn btn-small btn-warning" href="{{route('laporan.edit', $item->id)}}"><i class="fas fa-pen"></i></a>
                                    @endif
                                @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            {{-- <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Mandor</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Keterangan</th>
                        @if (auth()->user()->role->id === 3 )
                        <th>Alasan</th>
                        @endif
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->user->nama}}</td>
                        <td>
                            <a class="btn btn-small btn-primary foto" id="btn-gambar" data-target="#modal-gambar" data-toggle="modal" data-id="{{$item->id}}"><i class="fas fa-eye"></i></a>
                        </td>
                        <td>{{$item->deskripsi}}</td>
                        <td>{{$item->keterangan->keterangan}}</td>
                        @if (auth()->user()->role->id === 3 )
                        <td>{{ $item->alasan}}</td>
                        @endif
                        <td>{{ $item->created_at->format('d-m-Y - H:i') }}</td>
                        <td>
                        @if (auth()->user()->role->id !== 3 )
                            @if ($item->keterangan_id === 1)
                            <form class="d-inline-block" action="{{route('laporan.disetujui', $item->id)}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-small btn-success"><i class="fas fa-check"></i></button>
                            </form>
                                <button type="submit" class="btn btn-small btn-danger" data-toggle="modal-tolak" data-target="#modalTolak" id="tolak" data-url="{{route('laporan.ditolak', $item->id)}}" ><i class="fas fa-times"></i></button>
                            @endif
                        @else
                            <a class="btn btn-small btn-warning" href="{{route('laporan.edit', $item->id)}}"><i class="fas fa-pen"></i></a>
                        @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table> --}}
        </div>
    </div>
</div>
<div class="modal fade" id="modal-foto" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-center">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner test">

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
    </div>
</div>
<div class="modal fade" id="modalTolak" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Alasan Ditolak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="d-inline-block" action="" method="post" id="form-tolak">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <textarea name="alasan" id="solusi" cols="30" rows="10" class="form-control"></textarea>
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
        $('#example').DataTable();
    } );
    </script>
        <script>

            $('.foto').click(function () {
            var id = $(this).data('id');
            var urldata = "{{url('/laporan/foto')}}" + '/' + id;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });        
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: urldata,
                data: { '_token': $('input[name=_token]').val() },
                success: function (data) {
                    $('.test').html('');
                    $.each( data, function( key, value ) {
                        if (key=== 0) {
                            $('.test').append(`<div class="carousel-item active">
                                <img class="d-block w-100" src="http://localhost/wp-septa/public`+value.foto+`" alt="First slide">
                            </div>`)
                        }else {
                            $('.test').append(`<div class="carousel-item">
                                <img class="d-block w-100" src="http://localhost/wp-septa/public`+value.foto+`" alt="First slide">
                            </div>`)
                        }
                    });
                    $('#modal-foto').modal('show');
                }
            })
            });
        
        </script>
    <script>
        $(document).ready(function() {
            $(document).on('click' , "#tolak", function(){
                var url = $(this).data('url');
                $('#form-tolak').attr('action', url);
                $('#modalTolak').modal('show');
            });
        });
    </script>
@endsection