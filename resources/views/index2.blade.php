@extends('layout.master')
@section('content')
    

    <!--====== Main App ======-->
    <div id="app">

        @include('layout.navbar')


        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Primary Slider ======-->
            <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
                <div class="owl-carousel primary-style-1" id="hero-slider">
                    @foreach ($slideshow as $key => $item)
                        <div class="hero-slide hero-slide--{{$key+1}}" style="background-image: url({{asset($item->gambar)}});">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-content slider-content--animation">
                                            
                                            <span class="content-span-2 u-c-white">Wira Bumi</span>
                                            
                                            <a class="shop-now-link btn--e-brand" href="#furniture"><h3>Lihat Produk</h3></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
            <!--====== End - Primary Slider ======-->
            <div style="background-image: url({{asset('img/background.jpg')}}); background-size: cover;">
                <div class="u-s-p-b-60" >

                    <!--====== Section Content ======-->
                    <div class="section__content"  >
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                        <div class="about__container">
                                            <div class="about__info">
                                                <h2 class="about__h2">Selamat Datang di Wira Bumi</h2>
                                                <div class="about__p-wrap">
                                                    <p class="about__p">{{$data->deskripsi}}</p>
                                                </div>

                                                <a class="about__link btn--e-secondary u-s-m-t-30" href="#furniture">Shop Now</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>


                <!--====== Section 2 ======-->
                <div class="u-s-p-b-60">

                    <!--====== Section Intro ======-->
                    <div class="section__intro u-s-m-b-16" id="furniture">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section__text-wrap">
                                        <h1 class="section__heading u-c-secondary u-s-m-b-12">FURNITURE</h1>

                                        <span class="section__span u-c-silver">PILIH KATEGORI</span>
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
                                <div class="col-lg-12">
                                    <div class="filter-category-container">
                                        <div class="filter__category-wrapper">
                                        <button class="btn filter__btn filter__btn--style-1 js-checked" type="button" data-filter="*">ALL</button></div>
                                            @foreach ($kategori as $item)
                                                <div class="filter__category-wrapper">
                                                    <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".{{$item->id}}">{{$item->nama}}</button>
                                                </div>
                                            @endforeach
                                    </div>
                                    <div class="filter__grid-wrapper u-s-m-t-30">
                                        <div class="row">
                                            @foreach ($furniture as $item)
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item {{$item->jenis->kategori->id}}">
                                                    <div class="product-o product-o--hover-on product-o--radius">
                                                        <div class="product-o__wrap">

                                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="#">

                                                                <img class="aspect__img" src="{{asset($item->produk->gambar[0]->gambar)}}" alt=""></a>
                                                            <div class="product-o__action-wrap">
                                                                <ul class="product-o__action-list">
                                                                    <li>

                                                                        <a href="{{url('/furniture/produk/detail/'.$item->id)}}" class="modal-furniture" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Lihat Detail"><i class="fas fa-search-plus"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <span class="product-o__category">

                                                            <a href="#">{{$item->jenis->kategori->nama}}</a></span>

                                                        <span class="product-o__name">
                                                            <a href="#">{{$item->produk->nama}}</a>
                                                        </span>
                                                        <span class="product-o__price">Rp. {{$item->harga}}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="load-more">

                                        <a href="{{url('/furniture')}}" class="about__link btn--e-secondary u-s-m-t-30" target="_blank">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
                <!--====== End - Section 2 ======-->
            </div>

            <!--====== Section 3 ======-->
            <div style="background-image: url({{asset('img/background.jpg')}}); background-size: cover;">
                <div class="u-s-p-b-60">

                    <!--====== Section Intro ======-->
                    <div class="section__intro u-s-m-b-46">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section__text-wrap">
                                        <h1 class="section__heading u-c-secondary u-s-m-b-12">RUMAH</h1>

                                        <span class="section__span u-c-silver">Kami Menyediakan Berbagai Macam Type Rumah</span>
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
                                @foreach ($rumah as $item)
                                <div class="col-lg-6 col-md-6 u-s-m-b-30">
                                    <div class="product-o product-o--radius product-o--hover-off u-h-100">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/rumah/produk/detail/'.$item->id)}}">

                                                <img class="aspect__img" src="{{asset($item->gambar[0]->gambar)}}" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a href="{{url('/rumah/produk/detail/'.$item->id)}}" data-tooltip="tooltip" data-placement="top" title="Lihat Detail"><i class="fas fa-search-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="#">Rumah</a></span>

                                        <span class="product-o__name">

                                            <a href="#">{{$item->nama}}</a></span>
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-lg-12">
                                    <div class="load-more">

                                        <a href="{{url('/rumah')}}" class="about__link btn--e-secondary u-s-m-t-30" target="_blank">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
                <!--====== End - Section 3 ======-->

                <!--====== Section 10 ======-->
                <div class="u-s-p-b-60">

                    <!--====== Section Intro ======-->
                    <div class="section__intro u-s-m-b-46">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section__text-wrap">
                                        <h1 class="section__heading u-c-secondary u-s-m-b-12">LOKASI</h1>

                                        <span class="section__span u-c-silver">Kami Menyediakan Beberapa Lokasi Strategis</span>
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
                                @foreach ($lokasi as $item)
                                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                        <div class="bp-mini bp-mini--img u-h-100">
                                            <div class="bp-mini__thumbnail">

                                                <!--====== Image Code ======-->

                                                <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="{{url('/lokasi'.'/'.$item->id)}}">

                                                    <img class="aspect__img" src="{{asset($item->foto[0]->foto)}}" alt=""></a>
                                                <!--====== End - Image Code ======-->
                                            </div>
                                            <div class="bp-mini__content">



                                                <span class="bp-mini__h1">

                                                    <a href="#">{{$item->alamat}}</a></span>
                                                <div class="blog-t-w">
                                                    <a href="{{$item->pin_lokasi}}" class="gl-tag btn--e-transparent-hover-brand-b-2" target="__blank">Lihat Maps</a></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-12">
                                    <div class="load-more">

                                        <a href="{{url('/lokasi')}}" class="about__link btn--e-secondary u-s-m-t-30" target="_blank">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>

            <!--====== End - Section 10 ======-->

            <!--====== Section 12 ======-->
                <div class="u-s-p-b-60">

                    <!--====== Section Content ======-->
                    <div class="section__content">
                        <div class="container">

                            <!--====== Brand Slider ======-->
                            <div class="slider-fouc">
                                <div class="owl-carousel"  id="brand-slider" data-item="5">
                                    @if ($data->link_tokopedia)    
                                        <div class="brand-slide">
                                            <a href="{{$data->link_tokopedia}}">
                                                <img src="{{asset('/storage/logo/tokopedia.png')}}" alt="">
                                            </a>
                                        </div>
                                    @endif
                                    @if ($data->link_shopee)
                                        <div class="brand-slide">
                                            <a href="{{$data->link_shopee}}">
                                                <img src="{{asset('/storage/logo/shopee.png')}}" alt="">
                                            </a>
                                        </div>
                                    @endif
                                    @if ($data->link_fb)
                                        <div class="brand-slide" style="height: 150px;">
                                            <a href="{{$data->link_fb}}">
                                                <img src="{{asset('/storage/logo/fb.png')}}" alt="">
                                            </a>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <!--====== End - Brand Slider ======-->
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
            </div>
            <!--====== End - Section 12 ======-->
        </div>
        <!--====== End - App Content ======-->


        <!--====== Main Footer ======-->
        <footer>
            <div class="outer-footer u-s-p-y-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="outer-footer__content ">
                                
                                <span class="outer-footer__content-title">Contact Us</span>
                                <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                                    <span>{{$data->alamat}}</span></div>
                                <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                                    <span>{{$data->no_telpon}}</span></div>
                                <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                                    <span>{{$data->email}}</span></div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="outer-footer__content">

                                <span class="outer-footer__content-title">Ada yang ingin ditanyakan ?</span>
                                <form class="newsletter" action="{{url('/pesan/customer')}}" method="POST">
                                    @csrf
                                    <div class="newsletter__group">

                                        <label for="newsletter"></label>

                                        <input class="input-text input-text--border-radius input-text--primary-style col-12" type="text" id="nama" name="nama" placeholder="Nama" required>
                                        <input class="input-text input-text--border-radius input-text--primary-style col-12" type="email" id="email" name="email" placeholder="Email" required>
                                        <input class="input-text input-text--border-radius input-text--primary-style col-12" type="text" id="no_telpon" name="no_telpon" placeholder="Nomor Telepon" required>
                                        <input class="input-text input-text--border-radius input-text--primary-style col-12" type="text" id="no_wa" name="no_wa" placeholder="Nomor WhatsApp" required>
                                        <textarea class="text-area text-area--border-radius text-area--primary-style col-12" id="pesan" name="pesan" placeholder="Masukkan Pesan" required></textarea>
                                        <input type="hidden" name="kategori" value="umum">
                                        <button class="gl-tag btn--e-transparent-hover-brand-b-2 u-s-m-y-2 u-s-p-x-2" type="submit" style="float: right;" >Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

@endsection
