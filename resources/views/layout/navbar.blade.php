<!--====== Main Header ======-->
<header class="header--style-1">

    <!--====== Nav 1 ======-->
    <nav class="primary-nav primary-nav-wrapper--border">
        <div class="container">

            <!--====== Primary Nav ======-->
            <div class="primary-nav">

                <!--====== Main Logo ======-->

                <a class="main-logo" href="{{url('/')}}">

                    <span class="judul" >Wira Bumi</span></a>
                <!--====== End - Main Logo ======-->


                <!--====== Search Form ======-->
                <form class="main-form">

                    <label for="main-search"></label>

                    <input class="input-text input-text--border-radius input-text--style-1" type="text" id="main-search" placeholder="Search">

                    <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button></form>
                <!--====== End - Search Form ======-->


                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation">

                    <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cogs" type="button"></button>

                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">

                        <span class="ah-close">✕ Close</span>

                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                            <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">

                                <a><i class="far fa-user-circle"></i></a>

                                <!--====== Dropdown ======-->

                                <span class="js-menu-toggle"></span>
                                <ul style="width:120px">
                                    <li>

                                        <a href="{{url('/login')}}"><i class="fas fa-lock u-s-m-r-6"></i>

                                            <span>Login</span></a></li>
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li data-tooltip="tooltip" data-placement="left" title="Contact">

                                <a href="tel:{{$data->no_telpon}}"><i class="fas fa-phone-volume"></i></a></li>
                            <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                <a href="mailto:{{$data->email}}"><i class="far fa-envelope"></i></a></li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->
            </div>
            <!--====== End - Primary Nav ======-->
        </div>
    </nav>
    <!--====== End - Nav 1 ======-->


    <!--====== Nav 2 ======-->
    <nav class="secondary-nav-wrapper">
        <div class="container">

            <!--====== Secondary Nav ======-->
            <div class="secondary-nav">
                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation2">

                    <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cog" type="button"></button>

                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">

                        <span class="ah-close">✕ Close</span>

                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                            <li>

                                <a href="{{url('/')}}">BERANDA</a></li>
                            <li class="has-dropdown">

                                <a href="{{url('/furniture')}}">FURNITURE<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                <!--====== Dropdown ======-->

                                <span class="js-menu-toggle"></span>
                                <ul style="width:170px">
                                    @foreach ($kategori as $item)
                                        <li class="has-dropdown has-dropdown--ul-left-100">

                                            <a href="{{url('/furniture/produk/pilih/kategori/'.$item->id)}}">{{$item->nama}}<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:118px">
                                                @foreach ($item->jenis as $items)
                                                    <li>
                                                        <a href="{{url('/furniture/produk/pilih/jenis/'.$items->id)}}">{{$items->nama}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                    @endforeach
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li class="has-dropdown">

                                <a href="{{url('/rumah')}}">RUMAH<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                <!--====== Dropdown ======-->

                                <span class="js-menu-toggle"></span>
                                <ul style="width:200px">
                                    @foreach ($rumah as $item)    
                                        <li>
                                            <a href="{{url('/rumah/produk/detail/'.$item->id)}}">{{$item->nama}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li>

                                <a href="{{url('/lokasi')}}">LOKASI</a></li>
                            <li>

                                <a href="{{url('/kontak')}}">KONTAK</a></li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->


                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation3">

                    <a  href="{{url('/')}}" class="btn btn--icon toggle-button toggle-button--secondary fas fa-home "></a>


                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">

                        <span class="ah-close">✕ Close</span>

                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                            <li>
                                <a href="{{url('/')}}"><i class="fas fa-home "></i></a>
                            </li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->
            </div>
            <!--====== End - Secondary Nav ======-->
        </div>
    </nav>
    <!--====== End - Nav 2 ======-->
</header>
<!--====== End - Main Header ======-->