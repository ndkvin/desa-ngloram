@extends('layouts.home')

@section('title', 'Desa Ngloram | Profil')

@section('content')
    <section class="about-section-three section-gap mt-5">
        <div class="container mt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9 col-sm-10">
                    <div class="about-text mb-lg-50">
                        <div class="common-heading mb-30">
                            <span class="tagline">
                                <i class="fas fa-plus"></i> Tentang
                                <span class="heading-shadow-text">Tentang</span>
                            </span>
                            <h2 class="title">Tentang Desa Ngloram</h2>
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
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="about-gallery wow fadeInRight">
                        <div class="img-one">
                            <img src="{{ asset('assets/img/kirab.jpg') }}" alt="Image">
                        </div>
                        <div class="pattern">
                            <img src="assets/img/about/about-gallery-pattern.png" alt="Pattern">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
