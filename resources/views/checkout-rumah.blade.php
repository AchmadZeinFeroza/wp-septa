@extends('layout.master')
@section('content')
    

<div id="app">

    @include('layout.navbar')

    <!--====== App Content ======-->
    <div class="app-content">


        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary">Form Checkout</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                            <div class="table-responsive">
                                <table class="table-p u-s-m-b-30">
                                    <tbody>

                                        <!--====== Row ======-->
                                        <tr>
                                            <td>
                                                @if ($detail->nama)
                                                    <div class="w-r__wrap-1" id="check-rumah">
                                                        <div class="w-r__img-wrap">
                                                            <img class="u-img-fluid" style="height: 120px;" src="{{asset($detail->gambar[0]->gambar)}}" alt="" id="gambar">
                                                        </div>
                                                        <div class="w-r__info">
            
                                                            <span class="w-r__name">
            
                                                                <span id="nama">{{$detail->nama}}</span>
                                                            </span>
            
                                                            <span class="w-r__category">
            
                                                                <span>Rumah</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                @else
                                                <div class="table-p__box" id="null-rumah">
                                                    <span>Pilih Type Rumah untuk mengetahui harga</span>
                                                </div>
                                                <div class="w-r__wrap-1" id="check-rumah" style=" display:none;">
                                                    <div class="w-r__img-wrap">
                                                        <img class="u-img-fluid" style="height: 120px;" src="" alt="" id="gambar">
                                                    </div>
                                                    <div class="w-r__info">
        
                                                        <span class="w-r__name">
        
                                                            <span id="nama">Yellow Wireless Headphone</span>
                                                        </span>
        
                                                        <span class="w-r__category">
        
                                                            <span>Rumah</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="table-p__input-counter-wrap">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                        <a class="btn--e-transparent-hover-brand-b-2" style="border-radius: 22px; margin-bottom: 0; padding: 8px 16px; font-weight: 300;" data-modal="modal" data-modal-id="#rumah" id="btn-rumah">Pilih Rumah</a>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                            </td>
                                        </tr>
                                        <!--====== End - Row ======-->
                                    </tbody>
                                </table>
                                <table class="table-p">
                                    <tbody>
                                        <!--====== Row ======-->
                                        <tr>
                                            @if ($detail->alamat)
                                            <td>
                                                <div class="w-r__wrap-1" id="check-lokasi" >
                                                    <div class="w-r__img-wrap">
                                                        <img class="u-img-fluid" style="height: 120px;" src="{{asset($detail->foto[0]->foto)}}" alt="" id="foto">
                                                    </div>
                                                    <div class="w-r__info">
        
                                                        <span class="w-r__name">
        
                                                            <span id="alamat">{{$detail->alamat}}</span>
                                                        </span>
        
                                                        <span class="w-r__category">
        
                                                            <span>Lokasi</span>
                                                        </span>
                                                            
                                                    </div>
                                                </div>
                                            </td>
                                            @else
                                            <td>
                                                <div class="table-p__box" id="null-lokasi">
                                                    <span>Pilih Lokasi untuk mengetahui harga</span>
                                                </div>
                                                <div class="w-r__wrap-1" id="check-lokasi" style=" display:none;">
                                                    <div class="w-r__img-wrap">
                                                        <img class="u-img-fluid" style="height: 120px;" src="" alt="" id="foto">
                                                    </div>
                                                    <div class="w-r__info">
        
                                                        <span class="w-r__name">
        
                                                            <span id="alamat">Yellow Wireless Headphone</span>
                                                        </span>
        
                                                        <span class="w-r__category">
        
                                                            <span>Lokasi</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            @endif
                                            <td>
                                                <div class="table-p__input-counter-wrap">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                        <a class="btn--e-transparent-hover-brand-b-2" style="border-radius: 22px; margin-bottom: 0; padding: 8px 16px; font-weight: 300;" data-modal="modal" data-modal-id="#lokasi" id="btn-lokasi"> Pilih Lokasi </a>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                            </td>
                                        </tr>
                                        <!--====== End - Row ======-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->


        <!--====== Section 3 ======-->
        <div class="u-s-p-b-60">

            <div class="section__intro u-s-m-b-60" id="status" style="display: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary">Harga Tidak ditemukan silahkan pilih type rumah atau lokasi lain</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== Section Content ======-->
            <div class="section__content" id="form" style="display: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                            <form class="f-cart" action="{{url('/pesan/customer')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                        <div class="f-cart__pad-box">
                                            <h1 class="gl-h1">Isi Form Berikut ini</h1>

                                            <span class="gl-text u-s-m-b-30">Masukkan data dengan benar</span>
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="nama">Nama *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="nama" name="nama" required>
                                            </div>
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="email">Email *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="email" name="email" required>
                                            </div>
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="no_telpon">Nomor Telepon *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="no_telpon" name="no_telpon" required>
                                            </div>
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="no_wa">Nomor Whatsapp (opsional)</label>

                                                <input class="input-text input-text--primary-style" type="text" id="no_wa" name="no_wa">
                                            </div>
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="alamat">Alamat *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="alamat" name="alamat" required>
                                            </div>
                                            <span class="gl-text">Note: Mohon untuk diisi dengan data yang benar agar admin dapat menghubungi anda dengan segera untuk melekukan pembayaran.</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                        <div class="f-cart__pad-box">
                                            <h1 class="gl-h1">Pesan</h1>

                                            <span class="gl-text u-s-m-b-30">Masukkan pesan untuk pesanan anda</span>
                                            <div>

                                                <label for="f-cart-note"></label><textarea class="text-area text-area--primary-style" id="f-cart-note" name="pesan"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                        <div class="f-cart__pad-box">
                                            <div class="u-s-m-b-30">
                                                <span id="keterangan">Harga tidak ditemukan pilih lokasi atau rumah yang lain</span>
                                                <h2 class="u-c-brand">Rp. <span id="harga"></span></h2>
                                            </div>
                                            <div>
                                                <input type="hidden" name="rumah" value="{{ $detail->nama ? $detail->nama : '' }}">
                                                <input type="hidden" name="lokasi" value="{{ $detail->alamat ? $detail->alamat : '' }}">
                                                <input type="hidden" name="total_harga">
                                                <input type="hidden" name="kategori" value="rumah">
                                            <button class="btn btn--e-brand-b-2" type="submit"> PESAN SEKARANG</button></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 3 ======-->
    </div>
    <!--====== End - App Content ======-->
            <!--====== Shipping Address Add Modal ======-->
            <div class="modal fade" id="rumah">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="checkout-modal2">
                                <form class="checkout-modal2__form">
                                    <div class="dash__table-2-wrap u-s-m-b-30 gl-scroll">
                                        <table class="dash__table-2">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>Type Rumah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($rumah as $key => $item)
                                                    <tr>
                                                        @if ($detail->nama === $item->nama)
                                                            <td>
                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box"> 
                                                                            <input type="radio" id="address-1" name="input-rumah" value="{{$detail->id}}" checked>
                                                                            <div class="radio-box__state radio-box__state--primary">
                                                                                
                                                                                <label class="radio-box__label" for="address-1"></label>
                                                                            </div>
                                                                        </div>
                                                                        <!--====== End - Radio Box ======-->
                                                                    </td>
                                                            <td>{{$detail->nama}}</td>
                                                        @else
                                                            <td>
                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box"> 
                                                                            <input type="radio" id="address-1" name="input-rumah" value="{{$item->id}}">
                                                                            <div class="radio-box__state radio-box__state--primary">
                                                                                
                                                                                <label class="radio-box__label" for="address-1"></label>
                                                                            </div>
                                                                        </div>
                                                                        <!--====== End - Radio Box ======-->
                                                                    </td>
                                                            <td>{{$item->nama}}</td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="gl-modal-btn-group">
    
                                        <button class="btn btn--e-brand-b-2" type="button" data-dismiss="modal" id="save-rumah">SAVE</button>
    
                                        <button class="btn btn--e-grey-b-2" type="button" data-dismiss="modal">CANCEL</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Shipping Address Add Modal ======-->
            <!--====== Shipping Address Add Modal ======-->
            <div class="modal fade" id="lokasi">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="checkout-modal2">
                                <form class="checkout-modal2__form">
                                    <div class="dash__table-2-wrap u-s-m-b-30 gl-scroll">
                                        <table class="dash__table-2">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>Type Rumah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($lokasi as $item)
                                                    <tr>
                                                        @if ($detail->alamat === $item->alamat)
                                                            
                                                        <td>
                                                            
                                                            <!--====== Radio Box ======-->
                                                            <div class="radio-box">
                                                                
                                                                <input type="radio" id="address-1" name="input-lokasi" value="{{$item->id}}" checked>
                                                                <div class="radio-box__state radio-box__state--primary">
                                                                    
                                                                    <label class="radio-box__label" for="address-1"></label>
                                                                </div>
                                                            </div>
                                                            <!--====== End - Radio Box ======-->
                                                        </td>
                                                        <td>{{$item->alamat}}</td>
                                                        @else
                                                        <td>
                                                            
                                                            <!--====== Radio Box ======-->
                                                            <div class="radio-box">
                                                                
                                                                <input type="radio" id="address-1" name="input-lokasi" value="{{$item->id}}">
                                                                <div class="radio-box__state radio-box__state--primary">
                                                                    
                                                                    <label class="radio-box__label" for="address-1"></label>
                                                                </div>
                                                            </div>
                                                            <!--====== End - Radio Box ======-->
                                                        </td>
                                                        <td>{{$item->alamat}}</td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="gl-modal-btn-group">
    
                                        <button class="btn btn--e-brand-b-2" type="button" data-dismiss="modal" id="save-lokasi">SAVE</button>
    
                                        <button class="btn btn--e-grey-b-2" type="button" data-dismiss="modal">CANCEL</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Shipping Address Add Modal ======-->

</div>

@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $( document ).ready(function() {
            var btn_lokasi = $('input[name=input-lokasi]:checked').val();
            var btn_rumah = $('input[name=input-rumah]:checked').val();
            if(typeof(btn_lokasi) != "undefined" && btn_lokasi !== null){
                $('#btn-lokasi').html('Edit Lokasi');
            }
            if(typeof(btn_rumah) != "undefined" && btn_rumah !== null){
                $('#btn-rumah').html('Edit Rumah');
            }
            $('#save-rumah').click(function() {
                $('#btn-rumah').html('Edit Rumah');
                var lokasi = $('input[name=input-lokasi]:checked').val();
                var rumah = $('input[name=input-rumah]:checked').val();
                if(typeof(rumah) != "undefined" && rumah !== null) {

                    $('#check-rumah').show();
                    $('#null-rumah').hide();

                    var id = rumah;
                    var urldata = "{{url('/checkout/rumah/pilih')}}" + '/' + id;
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
                        $('input[name=rumah]').val(data.nama);
                        var gambar = data.gambar;
                        $('#nama').html(data.nama);
                        $('#gambar').attr('src', `{{asset('`+gambar+`')}}`)
                            if(typeof(rumah) != "undefined" && rumah !== null && typeof(lokasi) != "undefined" && lokasi !== null) {
                                $('#form').show();
                                var urldata = "{{url('/checkout/rumah/harga')}}";
                                $.ajaxSetup({
                                    headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });

                                $.ajax({
                                    type: "POST",
                                    dataType: 'json',
                                    url: urldata,
                                    data: { '_token': $('input[name=_token]').val(), id_lokasi: lokasi, id_rumah: rumah },
                                    success: function (data) {
                                        $('#keterangan').hide();
                                        if(typeof(data[0]?.harga) != "undefined" && data[0]?.harga !== null){

                                            $('#harga').html(data[0].harga);
                                            $('input[name=total_harga]').val(data[0].harga);
                                            $('#status').hide();
                                            $('#form').show();
                                            $('')
                                        }else{
                                            $('#status').show();
                                            $('#form').hide();
                                        }
                                    }
                                }).done(function (data) {
                                    console.log('suksess');
                                });
                            }
                        }
                    }).done(function (data) {
                    });
                }
            });
            $('#save-lokasi').click(function() {
                $('#btn-lokasi').html('Edit Lokasi');
                var lokasi = $('input[name=input-lokasi]:checked').val();
                var rumah = $('input[name=input-rumah]:checked').val();
                if(typeof(lokasi) != "undefined" && lokasi !== null) {

                    $('#check-lokasi').show();
                    $('#null-lokasi').hide();
                    var urldata = "{{url('/checkout/lokasi/pilih')}}" + '/' + lokasi;
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
                        var foto = data.foto;
                        $('input[name=lokasi]').val(data.alamat);
                        $('#alamat').html(data.alamat);
                        $('#foto').attr('src', `{{asset('`+foto+`')}}`)
                            if(typeof(rumah) != "undefined" && rumah !== null && typeof(lokasi) != "undefined" && lokasi !== null) {
                                $('#form').show();
                                var urldata = "{{url('/checkout/rumah/harga')}}";
                                $.ajaxSetup({
                                    headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });

                                $.ajax({
                                    type: "POST",
                                    dataType: 'json',
                                    url: urldata,
                                    data: { '_token': $('input[name=_token]').val(), id_lokasi: lokasi, id_rumah: rumah },
                                    success: function (data) {
                                    $('#keterangan').hide();
                                    if(typeof(data[0]?.harga) != "undefined" && data[0]?.harga !== null){
                                        $('#status').hide();
                                        $('#harga').html(data[0].harga);
                                        $('input[name=total_harga]').val(data[0].harga);
                                        $('#form').show();
                                    }else{
                                        $('#status').show();
                                        $('#form').hide();
                                    }
                                    }
                                }).done(function (data) {
                                    console.log('suksess');
                                });
                            }
                        }
                    }).done(function (data) {

                    });
                }
            });
        }); 
    </script>
@endsection