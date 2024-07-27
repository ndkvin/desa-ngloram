<!--====== Header Start ======-->
<header class="site-header sticky-header transparent-header topbar-transparent ">
    <div class="header-topbar d-none d-sm-block bg-green">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <ul class="contact-info">
                        <li><a href="#"><i class="far fa-envelope"></i> ngloram@gmail.com</a></li>
                        <li><a href="#"><i class="far fa-map-marker-alt"></i> Desa Ngloram, Kecamatan Cepu,
                                Kabupaten Blora</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-wrapper">
        <div class="container">
            <div class="navbar-inner">
                <div class="site-logo">
                    <a href={{ route('home') }}><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li class={{ Route::currentRouteName() == 'home' ? 'current' : '' }}>
                            <a href={{ route('home') }}>Beranda</a>
                        </li>
                        @php
                            $about = ['about', 'visimisi', 'geografis', 'sejarah', 'demografi'];
                        @endphp
                        <li class={{ in_array(Route::currentRouteName(), $about) ? 'current' : '' }}>
                            <a href={{ route('about') }}>Profil Desa</a>
                            <ul class="submenu">
                                <li><a href={{ route('about') }}>Tentang Desa</a></li>
                                <li><a href={{ route('visi-misi') }}>Visi Misi</a></li>
                                <li><a href={{ route('geografis') }}>Geografis</a></li>
                                <li><a href={{ route('sejarah') }}>Sejarah</a></li>
                                <li><a href={{ route('demografi') }}>Demografi</a></li>
                            </ul>
                        </li>
                        <li class={{ Route::currentRouteName() == 'struktur' ? 'current' : '' }}>
                            <a href={{ route('struktur') }}>Struktur Organisasi</a>
                        </li>
                        @php
                            $informasi = ['berita', 'pengumuman', 'agenda'];
                        @endphp
                        <li class={{ in_array(Route::currentRouteName(), $informasi) ? 'current' : '' }}>
                            <a href={{ route('berita') }}>Informasi Publik</a>
                            <ul class="submenu">
                                <li><a href={{ route('berita') }}>Berita</a></li>
                                <li><a href={{ route('pengumuman') }}>Pengumuman</a></li>
                                <li><a href={{ route('agenda') }}>Agenda</a></li>
                            </ul>
                        </li>
                        <li class={{ Route::currentRouteName() == 'contact' ? 'current' : '' }}><a
                                href={{ route('contact') }}>Kontak</a></li>
                    </ul>
                </div>
                <div class="navbar-extra d-flex align-items-center">
                    <a href="#" class="nav-toggler">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-panel">
        <div class="panel-logo">
            <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo"></a>
        </div>
        <ul class="panel-menu">
            <li class={{ Route::currentRouteName() == 'home' ? 'current' : '' }}>
                <a href="{{ route('home') }}">Beranda</a>
            </li>
            <li class="{{ in_array(Route::currentRouteName(), $about) ? 'current' : '' }}">
                <a href="#">Profil Desa</a>
                <ul class="submenu">
                    <li><a href={{ route('about') }}>Tentang Desa</a></li>
                    <li><a href={{ route('visi-misi') }}>Visi Misi</a></li>
                    <li><a href={{ route('geografis') }}>Geografis</a></li>
                    <li><a href={{ route('sejarah') }}>Sejarah</a></li>
                    <li><a href={{ route('demografi') }}>Demografi</a></li>
                </ul>
            </li>
            <li class={{ Route::currentRouteName() == 'struktur' ? 'current' : '' }}>
                <a href="events.html">Struktur Organisasi</a>
            </li>
            <li class="{{ in_array(Route::currentRouteName(), $informasi) ? 'current' : '' }}">
                <a href="#">Informasi Publik</a>
                <ul class="submenu">
                    <li><a href={{ route('berita') }}>Berita</a></li>
                    <li><a href={{ route('pengumuman') }}>Pengumuman</a></li>
                    <li><a href={{ route('agenda') }}>Agenda</a></li>
                </ul>
            </li>

            <li class={{ Route::currentRouteName() == 'contact' ? 'current' : '' }}><a
                    href={{ route('contact') }}>Kontak</a></li>
        </ul>
        <a href="#" class="panel-close">
            <i class="fal fa-times"></i>
        </a>
    </div>
</header>
<!--====== Header End ======-->
