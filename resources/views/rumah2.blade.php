@extends('layout.master')
@section('content')
<div id="app">
    @include('layout.navbar')
    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Section 1 ======-->
        <div class="u-s-p-y-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-p">
                            <div class="shop-p__collection">
                                <div class="row is-list-active">
                                    @foreach ($rumah as $item)

                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product-m">
                                            <div class="product-m__thumb">
                                                <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/rumah/produk/detail/'.$item->id)}}">

                                                    <img class="aspect__img" src="{{asset($item->gambar[0]->gambar)}}" alt=""></a>
                                                <div class="product-m__quick-look">

                                                    <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Lihat Detail"></a></div>
                                                <div class="product-m__add-cart">

                                                    <a href="{{url('/rumah/produk/detail/'.$item->id)}}" class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Lihat</a></div>
                                            </div>
                                            <div class="product-m__content">
                                                <div class="product-m__category">

                                                    <a href="#">Rumah</a></div>
                                                <div class="product-m__name">

                                                    <a href="#">{{$item->nama}}</a></div>
                                                <div class="product-m__hover">
                                                    <div class="product-m__preview-description">

                                                        <span>{{$item->deskripsi}}</span></div>
                                                    <div class="product-m__wishlist">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->
    </div>
    <!--====== End - App Content ======-->

</div>

@endsection