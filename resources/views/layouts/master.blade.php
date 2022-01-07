<html>

    <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Mas Septa Interior</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/bootstrap.css')}}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('website/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('website/css/responsive.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('website/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/owl.theme.default.min.css')}}">
    <style>
        .scrolled-down{
        transform:translateY(-100%); transition: all 0.3s ease-in-out;
        }
        .scrolled-up{
        transform:translateY(0); transition: all 0.3s ease-in-out;
        }
    </style>
    @yield('style')
</head>
<body class="py-0">
    @yield('content')
    @include('layouts.navbar    ')

    <script type="text/javascript" src="{{asset('website/js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('website/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('website/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('website/js/main.js')}}"></script>
    <script type="text/javascript">
        $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
            items: 1
            },
            420: {
            items: 2
            },
            1000: {
            items: 5
            }
        }

        });
    </script>
    <script>
        var nav = $("#navbarSupportedContent");
        var btn = $(".custom_menu-btn");
        btn.click
        btn.click(function (e) {

        e.preventDefault();
        nav.toggleClass("lg_nav-toggle");
        document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
        });
    </script>
    <script>
        $('.carousel').on('slid.bs.carousel', function () {
        $(".indicator-2 li").removeClass("active");
        indicators = $(".carousel-indicators li.active").data("slide-to");
        a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");

        })
    </script>
    @yield('script')
</body>