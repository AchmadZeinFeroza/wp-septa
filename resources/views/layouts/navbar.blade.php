<nav class="autohide navbar navbar-expand-md navbar-dark fixed-top" style="background-color: rgba(34, 34, 34, 0.7)">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PT SEPTA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{url('/ ')}}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('furniture*') ? 'active' : '' }}" href="{{url('/furniture')}}">Furniture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('rumah*') ? 'active' : '' }}" href="{{url('/rumah')}}">Rumah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('lokasi*') ? 'active' : '' }}" href="{{url('/lokasi')}}">Lokasi</a>
          </li>
          
        </ul>
        <ul class="navbar-nav flex-row-reverse">
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>

        </ul>
      </div>
    </div>
</nav>