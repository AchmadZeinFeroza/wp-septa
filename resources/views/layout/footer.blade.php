
    <!--====== Vendor Js ======-->
    <script src="{{asset('admin/js/sweetalert.min.js')}}"></script>
    @include('sweet::alert')
    <script src="{{asset('js/vendor.js')}}"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="{{asset('js/jquery.shopnav.js')}}"></script>
    
    <!--====== App ======-->
    <script src="{{asset('js/app.js')}}" ></script>
    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>
</html>