<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>CV WIRA BUMI</title>
    @include('meta::manager', [
            'title'         => 'Wira Bumi',
            'description'   => 'Wira Bumi Furniture dan Interior',
            'image'         => '',
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
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt=""></div>
    </div>
