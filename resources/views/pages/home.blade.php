@extends('layouts.home')

@section('title', 'Desa Ngloram')

@section('head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <style>
        #map {
            height: 500px;
            /* Pastikan tinggi peta ditetapkan */
            width: 100%;
        }
    </style>
@endsection
@section('content')
    <!--====== Hero Area Start ======-->
    <section class="hero-area-one">
        <div class="hero-text">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <span class="tagline wow fadeInUp" data-wow-delay="0.3s">Website</span>
                        <h1 class="title wow fadeInUp" data-wow-delay="0.4s">Desa Ngloram</h1>
                        <a href="project-1.html" class="main-btn wow fadeInUp" data-wow-delay="0.5s">
                            Berita Terkini <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="hero-shapes">
                <div class="hero-line-one">
                    <img src="assets/img/hero/hero-line.png" alt="Line">
                </div>
                <div class="hero-line-two">
                    <img src="assets/img/hero/hero-line-2.png" alt="Line">
                </div>
                <div class="dot-one"></div>
                <div class="dot-two"></div>
            </div>
        </div>
        <div class="hero-images">
            <div class="hero-img image-small fancy-bottom wow fadeInLeft" data-wow-delay="0.6s">
                <img src="assets/img/hero/hero-one-small.jpg" alt="Image">
            </div>
            <div class="hero-img main-img wow fadeInUp" data-wow-delay="0.5s">
                <img src="assets/img/hero/hero-one-big.jpg" alt="Image">
            </div>
            <div class="hero-img image-small fancy-top wow fadeInRight" data-wow-delay="0.7s">
                <img src="assets/img/hero/hero-one-small-2.jpg" alt="Image">
            </div>
        </div>
    </section>
    <!--====== Hero Area End ======-->

    <!--====== Counter Area Start ======-->
    <section class="counter-section-one section-gap">
        <div class="container primary-bg">
            <div class="row counter-boxes justify-content-xl-between justify-content-center">

                @php
                    $indeks = [
                        [
                            'title' => 'Indeks Ketahanan Sosial',
                            'value' => '0.8057',
                        ],
                        [
                            'title' => 'Indeks Ketahanan Ekonomi',
                            'value' => '0.4167',
                        ],
                        [
                            'title' => 'Indeks Ketahanan Lingkungan',
                            'value' => '0.6',
                        ],
                        [
                            'title' => 'Nilai IDM',
                            'value' => '0.6075',
                        ],
                        [
                            'title' => 'Penduduk',
                            'value' => '2561',
                        ],
                        [
                            'title' => 'Posyandu',
                            'value' => '3',
                        ],
                    ];
                @endphp
                @foreach ($indeks as $indek)
                    <div class="col-xl-auto col-lg-5 col-md-5 col-sm-6">
                        <div class="counter-box mb-40 icon-left">

                            <div class="content white-color">
                                <div class="count-wrap">
                                    <span class="">{{ $indek['value'] }}</span>
                                </div>
                                <h6 class="title">{{ $indek['title'] }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--====== Counter Area End ======-->

    <!--====== About Section Start ======-->
    <section class="about-section-one section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-lg-start justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="about-img">
                        <img src="assets/img/about/about-one.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-10 offset-xl-1">
                    <div class="about-text mt-md-70 mb-md-50">
                        <div class="common-heading mb-30">
                            <span class="tagline">
                                <i class="fas fa-plus"></i> Tentang
                                <span class="heading-shadow-text">Tentang</span>
                            </span>
                            <h2 class="title">Desa Ngloram</h2>
                        </div>
                        <p>
                            Ngloram adalah desa di kecamatan Cepu, Blora, Jawa Tengah, Indonesia, dengan mayoritas penduduk
                            bekerja sebagai petani. Desa ini dikenal dengan aktivitas pertaniannya yang menjadi sumber utama
                            penghidupan warganya. Selain itu, di desa ini terdapat Bandara Ngloram yang berfungsi sebagai
                            salah satu fasilitas transportasi udara, memudahkan akses bagi penduduk lokal dan pengunjung
                            dari luar daerah. Kehadiran bandara ini membuka peluang baru bagi perkembangan ekonomi dan
                            pariwisata di Ngloram, memberikan harapan untuk masa depan yang lebih baik bagi masyarakat desa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== About Section End ======-->

    <!--====== Categories Section Start ======-->
    <section class="popular-categories section-gap">
        <div class="container">
            <div class="categories-header">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="common-heading mb-30">
                            <span class="tagline">
                                <i class="fas fa-plus"></i> Informasi
                                <span class="heading-shadow-text">Informasi</span>
                            </span>
                            <h2 class="title">Informasi Publik</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center fancy-icon-boxes">
                <div class="col-xl-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0s">
                    <div class="fancy-box-item mt-30">
                        <div class="icon">
                            <i class="flaticon-reading-book"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="project-details.html">Berita</a></h4>
                            <p>Berita Terkini</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fancy-box-item mt-30">
                        <div class="icon">
                            <i class="flaticon-reading-book"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="project-details.html">Pengumuman</a></h4>
                            <p>Pemberitahuan Penting</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="fancy-box-item mt-30">
                        <div class="icon">
                            <i class="flaticon-reading-book"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="project-details.html">Agenda</a></h4>
                            <p>Agenda Terbaru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Categories Section End ======-->

    <!--====== Latest Berita Start ======-->
    <section class="latest-blog-section section-gap">
        <div class="container">
            <div class="common-heading text-center mb-30">
                <span class="tagline">
                    <i class="fas fa-plus"></i> Berita
                    <span class="heading-shadow-text">Berita</span>
                </span>
                <h2 class="title">Berita Terkini</h2>
            </div>
            <div class="row justify-content-center latest-blog-posts style-one">
                @foreach ($berita as $berita)
                    <div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="latest-post-box mt-30">
                            <div class="post-thumb">
                                <img src="{{ Storage::url($berita->image) }}" alt="Image">
                            </div>
                            <div class="post-content">
                                <a href="{{ route('berita.show', $berita->slug) }}" class="post-date"><i
                                        class="far fa-calendar-alt"></i>
                                    {{ $berita->created_at->format('d F Y') }}
                                </a>
                                <h6 class="title">
                                    <a href="{{ route('berita.show', $berita->slug) }}">
                                        {{ \Illuminate\Support\Str::limit($berita->title, 150, $end = '...') }}
                                    </a>
                                </h6>
                                <a href="{{ route('berita.show', $berita->slug) }}" class="post-link">Read More <i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--====== Latest Berita End ======-->

    <!--====== Latest Pengumuman Start ======-->
    <section class="latest-blog-section section-gap">
        <div class="container">
            <div class="common-heading text-center mb-30">
                <span class="tagline">
                    <i class="fas fa-plus"></i>Pengumuman
                    <span class="heading-shadow-text">Pengumuman</span>
                </span>
                <h2 class="title">Pengumuman Penting</h2>
            </div>
            <div class="row justify-content-center latest-blog-posts style-one">
                @foreach ($pengumuman as $pengumuman)
                    <div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="latest-post-box mt-30">
                            <div class="post-thumb">
                                <img src="{{ Storage::url($pengumuman->image) }}" alt="Image">
                            </div>
                            <div class="post-content">
                                <a href="{{ route('pengumuman.show', $pengumuman->slug) }}" class="post-date"><i
                                        class="far fa-calendar-alt"></i>
                                    {{ $pengumuman->created_at->format('d F Y') }}
                                </a>
                                <h6 class="title">
                                    <a href="{{ route('pengumuman.show', $pengumuman->slug) }}">
                                        {{ \Illuminate\Support\Str::limit($pengumuman->title, 150, $end = '...') }}
                                    </a>
                                </h6>
                                <a href="{{ route('pengumuman.show', $pengumuman->slug) }}" class="post-link">Read More <i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--====== Latest Pengumuman End ======-->

    <!--====== Latest Agenda Start ======-->
    <section class="latest-blog-section section-gap">
        <div class="container">
            <div class="common-heading text-center mb-30">
                <span class="tagline">
                    <i class="fas fa-plus"></i>Agenda
                    <span class="heading-shadow-text">Agenda</span>
                </span>
                <h2 class="title">Agenda Terbaru</h2>
            </div>
            <div class="row justify-content-center latest-blog-posts style-one">
                @foreach ($agenda as $agenda)
                    <div class="col-lg-4 col-md-6 col-sm-9 col-11 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="latest-post-box mt-30">
                            <div class="post-thumb">
                                <img src="{{ Storage::url($agenda->image) }}" alt="Image">
                            </div>
                            <div class="post-content">
                                <a href="{{ route('agenda.show', $agenda->slug) }}" class="post-date"><i
                                        class="far fa-calendar-alt"></i>
                                    {{ $agenda->created_at->format('d F Y') }}
                                </a>
                                <h6 class="title">
                                    <a href="{{ route('agenda.show', $agenda->slug) }}">
                                        {{ \Illuminate\Support\Str::limit($agenda->title, 150, $end = '...') }}
                                    </a>
                                </h6>
                                <a href="{{ route('agenda.show', $agenda->slug) }}" class="post-link">Read More <i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--====== Latest Agenda End ======-->


    <!--====== Latest Map Start ======-->
    <section class="latest-blog-section section-gap">
        <div class="container">
            <div class="common-heading text-center mb-30">
                <span class="tagline">
                    <i class="fas fa-plus"></i>Lokasi
                    <span class="heading-shadow-text">Lokasi</span>
                </span>
                <h2 class="title">Lokasi Desa Ngloram</h2>
            </div>
            <div class="row justify-content-center latest-blog-posts style-one">
                <div id="map"></div>
            </div>
        </div>
    </section>
    <!--====== Latest map End ======-->
@endsection


@section('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script>
        // Initialize the map and set its view to your chosen geographical coordinates and zoom level
        var map = L.map('map').setView([-7.20261, 111.54915], 13); // Example coordinates for Cepu, Blora, Jawa Tengah

        // Add a tile layer to add to our map, in this case it's a Mapbox Streets tile layer
        // Note: Replace 'your.mapbox.access.token' with a valid Mapbox access token if using Mapbox tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker to the map at a given point
        L.marker([-7.20261, 111.54915]).addTo(map)
            .bindPopup('Ngloram, Cepu, Blora, Jawa Tengah')
            .openPopup();
    </script>
@endsection
