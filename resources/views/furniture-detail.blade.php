@extends('layout.master')
@section('content')
<div id="app">
    @include('layout.navbar')
    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Section 1 ======-->
        <div class="u-s-p-t-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">

                        <!--====== Product Breadcrumb ======-->
                        <div class="pd-breadcrumb u-s-m-b-30">
                            <ul class="pd-breadcrumb__list">
                                <li class="has-separator">

                                    <a href="{{url('/')}}">Home</a></li>
                                <li class="has-separator">

                                    <a href="shop-side-version-2.html">{{$detail->jenis->kategori->nama}}</a></li>
                                <li class="has-separator">

                                    <a href="shop-side-version-2.html">{{$detail->jenis->nama}}</a></li>
                                <li class="is-marked">

                                    <a href="shop-side-version-2.html">{{$detail->produk->nama}}</a></li>
                            </ul>
                        </div>
                        <!--====== End - Product Breadcrumb ======-->


                        <!--====== Product Detail Zoom ======-->
                        <div class="pd u-s-m-b-30">
                            <div class="slider-fouc pd-wrap">
                                <div id="pd-o-initiate">
                                    @foreach ($detail->produk->gambar as $item)    
                                        <div class="pd-o-img-wrap" data-src="{{asset($item->gambar)}}">
                                            <img class="u-img-fluid" src="{{asset($item->gambar)}}" data-zoom-image="{{asset($item->gambar)}}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                                <span class="pd-text">Click for larger zoom</span>
                            </div>
                            <div class="u-s-m-t-15">
                                <div class="slider-fouc">
                                    <div id="pd-o-thumbnail">
                                        @foreach ($detail->produk->gambar as $item)
                                            <div>
                                                <img class="u-img-fluid" src="{{asset($item->gambar)}}" alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Product Detail Zoom ======-->
                    </div>
                    <div class="col-lg-7">

                        <!--====== Product Right Side Details ======-->
                        <div class="pd-detail">
                            <div>

                                <span class="pd-detail__name">{{$detail->produk->nama}}</span></div>
                            <div>
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__price">Rp. {{$detail->harga}}</span>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__stock">Ready</span>
                            </div>
                            <div class="u-s-m-b-15">

                                <span class="pd-detail__preview-desc">{{$detail->produk->deskripsi}}</span></div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__click-wrap"><i class="far fa-envelope u-s-m-r-6"></i>

                                        <a href="mailto:{{$data->email}}">Email me When the price drops</a>

                                        <span class="pd-detail__click-count">(20)</span></span></div>
                            </div>
                            <div class="u-s-m-b-15">
                                <ul class="pd-social-list">
                                    <li>

                                        <a class="s-wa--color-hover" href="tel:{{$data->no_wa}}"><i class="fab fa-whatsapp"></i></a></li>
                                    <li>

                                        <a class="s-gplus--color-hover" href="mailto:{{$data->email}}"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                            <div class="u-s-m-b-15">
                                <form class="pd-detail__form" >
                                    <div class="pd-detail-inline-2">
                                        <div class="u-s-m-b-15">

                                            <!--====== Input Counter ======-->
                                            <div class="input-counter">

                                                <span class="input-counter__minus fas fa-minus"></span>

                                                <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000" name="quantity">

                                                <span class="input-counter__plus fas fa-plus"></span></div>
                                            <!--====== End - Input Counter ======-->
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <a href="{{url('/checkout/furniture/'. $detail->id)}}" class="btn btn--e-brand-b-2" type="submit">Pesan Sekarang</a></div>
                                    </div>
                                </form>
                            </div>
                            <div class="u-s-m-b-15">

                                <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                <ul class="pd-detail__policy-list">
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Jujur dan Terpercaya</span></li>
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Kualitas Bagus</span></li>
                                    {{-- <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Returns accepted if product not as described.</span></li> --}}
                                </ul>
                            </div>
                        </div>
                        <!--====== End - Product Right Side Details ======-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - App Content ======-->
</div>
@endsection