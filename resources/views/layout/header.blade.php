<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="feroza">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CV WIRA BUMI</title>
    @include('meta::manager', [
            'title'         => 'Wira Bumi',
            'description'   => 'Wira Bumi Meruapakn perusahaan yang bergerak dibidang property dan interior design. wirabumi bertempat di kota Genteng kabupaten Banyuwangi Jawa Timur',
            'keywords'      => 'wira bumi, cv wira bumi, wira bumi furniture, property wira bumi, wirabumi, wirabumi banyuwangi, cv wirabumi',
    ])

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{asset('css/utility.css')}}">

    <!--====== App ======-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="{{asset('admin/css/sweetalert.css')}}" rel="stylesheet">
    <style>
        @font-face {
            font-family: judul;
            src: url(judul.ttf);
        }
        .judul{
            font-family: judul;
            font-size: 5vw;
            color: #fa4400;
        }
    </style>
</head>
<body class="config">
    {{-- <button class="btn btn-success" style="position: fixed; bottom:0; right:0; z-index: 100;">Cek</button> --}}
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt=""></div>
    </div>
