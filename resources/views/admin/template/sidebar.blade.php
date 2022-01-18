<li class="nav-item {{ request()->is('beranda*') ? 'active' : '' }}">
    <a class="nav-link" href="{{route('beranda.index')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Beranda</span>
    </a>
</li>
@if (auth()->user()->role->id !== 2 )
<li class="nav-item {{ request()->is('laporan*') ? 'active' : '' }}">
    <a class="nav-link" href="{{route('laporan.show', 1)}}">
        <i class="fas fa-fw fa-book"></i>
        <span>Laporan</span>
    </a>
</li>
@endif
@if (auth()->user()->role->id !== 3 )
<li class="nav-item {{ request()->is('produk*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages">
        <i class="fas fa-fw fa-cart-arrow-down"></i>
        <span>Produk</span>
    </a>
    <div id="collapsePages" class="collapse">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ request()->is('produk/rumah/lokasi*') ? 'active' : '' }}" href="{{route('lokasi.index')}}">Lokasi</a>
            <a class="collapse-item {{ request()->is('produk/rumah*') ? 'active' : '' }}" href="{{route('rumah.index')}}">Rumah</a>
            <a class="collapse-item {{ request()->is('produk/furniture*') ? 'active' : '' }}" href="{{route('furniture.index')}}">Furniture</a>
            <a class="collapse-item {{ request()->is('produk/kategori*') ? 'active' : '' }}" href="{{route('kategori.index')}}">Kategori</a>
        </div>
    </div>
</li>
<li class="nav-item {{ request()->is('wensite*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagess">
        <i class="fas fa-fw fa-eye"></i>
        <span>Website</span>
    </a>
    <div id="collapsePagess" class="collapse">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('website/show')}}">
                Ubah Utilias
            </a>
            <a class="collapse-item" href="{{url('website/slideshow')}}">
                Slideshow
            </a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('pesan.index')}}">
        <i class="fas fa-fw fa-envelope"></i>
        <span>Pesan</span>
    </a>
</li>
@endif
<li class="nav-item">
    <a class="nav-link" href="{{route('user.profil')}}">
        <i class="fas fa-fw fa-address-book"></i>
        <span>Profil</span>
    </a>
</li>
@if (auth()->user()->role->id !== 3 )
    <li class="nav-item {{ request()->is('user*') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('user.index')}}">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span>
        </a>
    </li>
@endif
<li class="nav-item">
    <a class="nav-link" href="{{route('logout')}}">
        <i class="fas fa-fw fa-power-off"></i>
        <span>Logout</span>
    </a>
</li>