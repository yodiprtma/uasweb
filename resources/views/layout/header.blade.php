<header class="navbar navbar-expand-lg bg-body-tertiary py-3 mb-4 border-bottom">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        </svg>
        <span class="fs-3 fw-bold badge bg-warning text-wrap" style="width: 15rem;">WARUNG KANG YODI
            
        </span>
    </a>

    <ul class="nav nav-pills">
        @php
            $menu = [
            ['url' => '/',               'name' => 'Home'], 
            ['url' => 'pesanan',       'name' => 'Daftar Pesanan'], 
            ['url' => 'makanan',              'name' => 'Daftar Makanan']];
        @endphp
                    @can('tambah-makanan')
        @foreach ($menu as $m)
            @include('layout.nav-item', ['menu' => $m])
        @endforeach
        @endcan
        @if (Auth::check())
            
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf @method('POST')
            </form>
        </li>
        @endif
    </ul>
</header>