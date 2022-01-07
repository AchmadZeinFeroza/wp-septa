@extends('admin.template.master')
@section('title', 'Produk Furniture / Tambah')
@section('content')  
<div class="row">
    <div class="col-md-12 mx-auto">
        <div class="container-fluid">
            <form action="{{route('furniture.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Nama Produk" name="nama" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="harga" placeholder="Harga Produk" name="harga" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <select class="form-select form-control"  name="kategori" id="kategori" required>
                            <option>--Pilih Kategori--</option>
                            @foreach ($kategori as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>  
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                        <select class="form-select form-control"  name="jenis" id="jenis" required>
                            <option selected>--Pilih Jenis--</option>
                        </select>  
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tokopedia" class="col-sm-2 col-form-label">Tokopedia</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tokopedia" placeholder="Link Tokopedia" name="tokopedia">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bukalapak" class="col-sm-2 col-form-label">BukaLapak</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="bukalapak" placeholder="Link Bukalapak" name="bukalapak">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="shopee" class="col-sm-2 col-form-label">Shopee</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="shopee" placeholder="Link Shopee" name="shopee">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lazada" class="col-sm-2 col-form-label">Lazada</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lazada" placeholder="Link lazada" name="lazada">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <div class="input-group hdtuto control-group lst increment" >
                            <input type="file" name="gambar[]" class="myfrm form-control"  accept="image/*" required>
                            <div class="input-group-btn"> 
                            <button class="btn btn-success" id="tambah" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>+</button>
                            </div>
                        </div>
                        <div class="clone d-none">
                            <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                            <input type="file" name="gambar[]" class="myfrm form-control" accept="image/*">
                            <div class="input-group-btn"> 
                                <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i>Hapus</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $('#kategori').on('click', function(){
            $('#jenis')
                .find('option')
                .remove()
                .end()
                .append('<option selected>--Pilih Jenis--</option>')
            ;
            var id = $('#kategori').find(":selected").val();
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "{{url('produk/furniture')}}"+ '/' + id,
                data: { '_token': $('input[name=_token]').val() },
                success: function (result) {
                    $.each( result, function( key, value ) {
                        var o = new Option(value.nama, value.id);
                        $(o).html(value.nama);
                        $("#jenis").append(o);
                    });
                }
            })
        });
    </script>
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