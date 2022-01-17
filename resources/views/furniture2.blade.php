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
                    <div class="col-lg-3 col-md-12">
                        <div class="shop-w-master">
                            <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>

                                <span>FILTERS</span></h1>
                            <div class="shop-w-master__sidebar sidebar--bg-snow">
                                <div class="u-s-m-b-30">
                                    <div class="shop-w">
                                        <div class="shop-w__intro-wrap">
                                            <h1 class="shop-w__h">CATEGORY</h1>

                                            <span class="fas fa-minus shop-w__toggle" data-target="#s-category" data-toggle="collapse"></span>
                                        </div>
                                        <div class="shop-w__wrap collapse show" id="s-category">
                                            <ul class="shop-w__category-list gl-scroll">
                                                @foreach ($kategori as $item)
                                                    
                                                
                                                <li class="has-list">

                                                    <a href="{{url('/furniture/produk/pilih/kategori/'.$item->id)}}">{{$item->nama}}</a>

                                                    <span class="category-list__text u-s-m-l-6">(23)</span>

                                                    <span class="js-shop-category-span is-expanded fas fa-plus u-s-m-l-6"></span>
                                                    <ul style="display:block">
                                                        @foreach ($item->jenis as $items)
                                                            <li class="has-list">
                                                                
                                                                <a href="{{url('/furniture/produk/pilih/jenis/'.$items->id)}}">{{$items->nama}}</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    @foreach ($items->furniture as $product)
                                                                        <li>
                                                                            <a href="{{url('/furniture/produk/detail/'.$product->id)}}">{{$product->produk->nama}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>

                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="shop-p">
                            <div class="shop-p__collection">
                                <div class="row is-grid-active">
                                    @foreach ($furniture as $item)
                                        
                                    
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/furniture/produk/detail/'.$item->id)}}">

                                                        <img class="aspect__img" src="{{asset($item->produk->gambar[0]->gambar)}}" alt=""></a>
                                                    <div class="product-m__add-cart">

                                                        <a href="" class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Pilih Sekarang</a></div>
                                                </div>
                                                <div class="product-m__content">
                                                    <div class="product-m__category">

                                                        <a href="{{url('/furniture/produk/detail/'.$item->id)}}">{{$item->jenis->kategori->nama}}</a></div>
                                                    <div class="product-m__name">

                                                        <a href="{{url('/furniture/produk/detail/'.$item->id)}}">{{$item->produk->nama}}</a></div>
                                                    <div class="product-m__price">{{$item->harga}}</div>
                                                    <div class="product-m__hover">
                                                        <div class="product-m__preview-description">

                                                            <span>{{$item->produk->deskripsi}}</span></div>
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