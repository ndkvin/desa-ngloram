@extends('layouts.home')

@section('title', 'Desa Ngloram | Kontak')

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
    <!--====== Contact Section Start ======-->
    <section class="contact-section section-gap-extra-bottom mt-5">
        <div class="container">
            <!-- Contact Info Start -->
            <div class="row align-items-center justify-content-center">
                <div class="col-lx-4 col-lg-5 col-sm-10">
                    <div class="contact-info-text mb-md-70">
                        <div class="common-heading mb-30">
                            <span class="tagline">
                                <i class="fas fa-plus"></i>Kontak
                                <span class="heading-shadow-text">Kontak</span>
                            </span>
                            <h2 class="title">Hubungi Kami Di</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 offset-xl-1">
                    <div class="contact-info-boxes">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-6 col-sm-10">
                                <div class="info-box text-center wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon">
                                        <i class="flaticon-place"></i>
                                    </div>
                                    <div class="info-content">
                                        <h5>Lokasi</h5>
                                        <p>
                                            Desa Ngloram, Kecamatan Cepu,
                                            Kabupaten Blora, <br>Jawa Tengah
                                        </p>
                                    </div>
                                </div>
                                <div class="info-box text-center mt-30 mb-sm-30 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="icon">
                                        <i class="flaticon-envelope"></i>
                                    </div>
                                    <div class="info-content">
                                        <h5>Alamat Email</h5>
                                            <p>
                                                ngloram@gmail.com <br>
                                                www.ngloram.com
                                            </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="info-box text-center wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="icon">
                                        <i class="flaticon-phone-call-1"></i>
                                    </div>
                                    <div class="info-content">
                                        <h5>Telphone</h5>
                                        <p>
                                            +6212345678990
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Info End -->

        </div>
    </section>

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
    <!--====== Contact Section End ======-->
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
