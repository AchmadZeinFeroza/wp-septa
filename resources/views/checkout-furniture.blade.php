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
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                            <div class="table-responsive">
                                <table class="table-p">
                                    <tbody>

                                        <!--====== Row ======-->
                                        <tr>
                                            <td>
                                                <div class="table-p__box">
                                                    <div class="table-p__img-wrap">

                                                        <img class="u-img-fluid" src="{{asset($detail->produk->gambar[0]->gambar)}}" alt=""></div>
                                                    <div class="table-p__info">

                                                        <span class="table-p__name">

                                                            <a href="product-detail.html">{{$detail->produk->nama}}</a></span>

                                                        <span class="table-p__category">

                                                            <a href="shop-side-version-2.html">{{$detail->jenis->nama}}</a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>

                                                <span class="table-p__price">Rp. {{$detail->harga}}</span></td>
                                            <td>
                                                <div class="table-p__input-counter-wrap">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                        <span class="input-counter__minus fas fa-minus"></span>

                                                        <input name="quantity"  class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">
                                                        <input type="hidden" id="harga" value="{{$detail->harga}}">
                                                        <span class="input-counter__plus fas fa-plus"></span></div>
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

            <!--====== Section Content ======-->
            <div class="section__content">
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
                                                <table class="f-cart__table">
                                                    <tbody>
                                                        <tr>
                                                            <td>HARGA</td>
                                                            <td>Rp. <span>{{$detail->harga}}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quantity</td>
                                                            <td><span id="quantity">1</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total Harga</td>
                                                            <td>Rp. <span id="total">{{$detail->harga}}</span></td>
                                                        </tr>
                                                        <input type="hidden" id="jumlah" value="1" name="jumlah">
                                                        <input type="hidden" value="furniture" name="kategori">
                                                        <input type="hidden" name="furniture" value="{{$detail->produk->nama}}">
                                                        <input type="hidden" id="total-harga" value="{{$detail->harga}}" name="total_harga">
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div>

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

</div>

@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $( document ).ready(function() {
            var harga = $('#harga').val();
            $('input[name=quantity]').change(function() {
                var jumlah = $('input[name=quantity]').val();
                var total = jumlah*harga;
                $('#total').html(total);
                $('#quantity').html(jumlah);
                $('#jumlah').val(jumlah);
                $('#total-harga').val(total);
            });
        }); 
    </script>
@endsection