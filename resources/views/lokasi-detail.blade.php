@extends('layout.master')
@section('content')
<div id="app">
    @include('layout.navbar')
    <!--====== App Content ======-->
    <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
        <div class="owl-carousel primary-style-1" id="hero-slider">
            @foreach ($detail->foto as $key => $item)
                    <div class="hero-slide hero-slide--{{$key+1}}" style="background-image: url({{asset($item->foto)}});">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation" style="text-align: center;">
                                        <a class="about__link btn--e-secondary u-s-m-t-30" href="{{url('/checkout/lokasi/'.$detail->id)}}">Pilih Lokasi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
    <!--====== End - Modal Section ======-->
</div>
@endsection