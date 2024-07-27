@extends('layouts.home')

@section('title', 'Desa Ngloram | Struktur Organisasi')

@section('content')
    <section class="team-member-area section-gap-extra-bottom mt-5">
        <div class="container mt-5">
            <div class="categories-header">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="common-heading mb-30">
                            <span class="tagline">
                                <i class="fas fa-plus"></i> Struktur
                                <span class="heading-shadow-text">Struktur</span>
                            </span>
                            <h2 class="title">Struktur Organisasi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row team-members justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="member-box mb-30">
                        <div class="member-photo">
                            <img src="{{ asset('assets/img/perangkat/diro.jpeg') }}" alt="Foto Kepala Desa">
                        </div>
                        <div class="member-info">
                            <h5 class="name"><a href="#">Diro Beny Susanto</a></h5>
                            <span class="title">Kepala Desa Ngloram</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="member-box mb-30">
                        <div class="member-photo">
                            <img src="{{ asset('assets/img/perangkat/fatchur.jpeg') }}" alt="Member">
                        </div>
                        <div class="member-info">
                            <h5 class="name"><a href="#">Fatchur Rohman</a></h5>
                            <span class="title">Sekertaris Desa</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="member-box mb-30">
                        <div class="member-photo">
                            <img src="{{ asset('assets/img/perangkat/dwi.jpeg') }}" alt="Member">
                        </div>
                        <div class="member-info">
                            <h5 class="name"><a href="#">Dwi Setyarahmawati</a></h5>
                            <span class="title">Kaur Umum dan Tata Usaha</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="member-box mb-30">
                        <div class="member-photo">
                            <img src="{{ asset('assets/img/perangkat/sukar.jpeg') }}" alt="Member">
                        </div>
                        <div class="member-info">
                            <h5 class="name"><a href="#">Sukar</a></h5>
                            <span class="title">Kaur Perencanaan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="member-box mb-30">
                        <div class="member-photo">
                            <img src="{{ asset('assets/img/perangkat/masrup.jpeg') }}" alt="Member">
                        </div>
                        <div class="member-info">
                            <h5 class="name"><a href="#">Masrup</a></h5>
                            <span class="title">Kaur Keuangan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="member-box mb-30">
                        <div class="member-photo">
                            <img src="{{ asset('assets/img/perangkat/kuslan.jpeg') }}" alt="Member">
                        </div>
                        <div class="member-info">
                            <h5 class="name"><a href="#">Muhammad Hadi Kuslan</a></h5>
                            <span class="title">Kasi Pemerintahan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="member-box mb-30">
                        <div class="member-photo">
                            <img src="{{ asset('assets/img/perangkat/bisri.jpeg') }}" alt="Member">
                        </div>
                        <div class="member-info">
                            <h5 class="name"><a href="#">Achmad Bisri</a></h5>
                            <span class="title">Kasi Kesejahteraan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="member-box mb-30">
                        <div class="member-photo">
                            <img src="{{ asset('assets/img/perangkat/ngalim.jpeg') }}" alt="Member">
                        </div>
                        <div class="member-info">
                            <h5 class="name"><a href="#">Ngalim</a></h5>
                            <span class="title">Kasi Pelayanan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="member-box mb-30">
                        <div class="member-photo">
                            <img src="{{ asset('assets/img/perangkat/sutimah.jpeg') }}" alt="Member">
                        </div>
                        <div class="member-info">
                            <h5 class="name"><a href="#">Sutimah</a></h5>
                            <span class="title">Kadus Nglinggo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="member-box mb-30">
                        <div class="member-photo">
                            <img src="{{ asset('assets/img/perangkat/ngari.jpeg') }}" alt="Member">
                        </div>
                        <div class="member-info">
                            <h5 class="name"><a href="#">Ngari</a></h5>
                            <span class="title">Kadus Ngloram</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="member-box mb-30">
                        <div class="member-photo">
                            <img src="{{ asset('assets/img/perangkat/suntoro.jpeg') }}" alt="Member">
                        </div>
                        <div class="member-info">
                            <h5 class="name"><a href="#">Suntoro</a></h5>
                            <span class="title">Kadus Putuk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
