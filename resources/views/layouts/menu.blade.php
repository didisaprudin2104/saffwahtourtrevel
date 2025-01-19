<nav class="site-nav" style="background-color: white; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
    <div class="container">
        <div class="site-navigation d-flex justify-content-between align-items-center">
            <a href="#" class="logo m-0">
                <img src="{{ asset('images/logo.png') }}" alt="Saffwah Tour Travel Logo"
                    style="max-height: 50px; /* Sesuaikan tinggi logo */">
            </a>

            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu"
                style="color: #333; /* Dark text color for menu items */">
                <li class="active"><a href="{{ route('home') }}" style="color: #333; font-weight: bold;">BERANDA</a>
                </li>
                <li class="has-children">
                    <a href="#" style="color: #333; font-weight: bold;">LAYANAN</a>
                    <ul class="dropdown">
                        <li><a href="{{ route('layanan.umroh') }}" style="color: #333; font-weight: bold;">Paket
                                Umroh</a></li>
                        <li><a href="{{ route('layanan.haji') }}" style="color: #333; font-weight: bold;">Paket Haji</a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('tentangkami') }}" style="color: #333; font-weight: bold;">TENTANG KAMI</a></li>
                <li><a href="{{ route('testimoni') }}" style="color: #333; font-weight: bold;">TESTIMONI</a></li>
                <li><a href="{{ route('hubungikami') }}" style="color: #333; font-weight: bold;">HUBUNGI KAMI</a></li>
                <li><a href="{{ route('login') }}" class="btn btn-login"
                        style="color: #fff; background-color: #ff6347; font-weight: bold;">LOGIN</a></li>
            </ul>

            <a href="#"
                class="ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                data-toggle="collapse" data-target="#main-navbar">
                <button class="burger-button">
                    Menu
                </button>
            </a>
        </div>
    </div>
</nav>