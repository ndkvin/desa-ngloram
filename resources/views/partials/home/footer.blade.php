<!--====== Footer Start ======-->
<footer class="site-footer">
    <div class="footer-content-area">
        <div class="container">
            <div class="footer-widgets">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="widget about-widget">
                            <div class="footer-logo">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="Funden">
                            </div>
                            <p>
                                Pemerintah Desa Ngloram, Cepu, Kabupaten Blora, Jawa Tengah
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6">
                        <div class="widget nav-widget">
                            <h4 class="widget-title">Profil Desa</h4>
                            <ul>
                                <li><a href={{ route('about') }}>Tentang Desa</a></li>
                                <li><a href={{ route('visi-misi') }}>Visi & Misi</a></li>
                                <li><a href={{ route('geografis') }}>Geografis</a></li>
                                <li><a href={{ route('sejarah') }}>Sejarah</a></li>
                                <li><a href={{ route('demografi') }}>Demografi</a></li>
                                <li><a href={{ route('struktur') }}>Struktur Organisasi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6">
                        <div class="widget nav-widget">
                            <h4 class="widget-title">Informasi Publik</h4>
                            <ul>
                                <li><a href={{ route('berita') }}>Berita</a></li>
                                <li><a href={{ route('pengumuman') }}>Pengumuman</a></li>
                                <li><a href={{ route('agenda') }}>Agenda</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-auto col-md-5 col-sm-8">
                        <div class="widget contact-widget">
                            <h4 class="widget-title">Kontak</h4>
                            <ul class="info-list">
                                <li>
                                    <span class="icon"><i class="far fa-phone mt-3"></i></span>
                                    <span class="info">
                                        <span class="info-title">Phone Number</span>
                                        <a href="#">(0296) 4270249</a>
                                    </span>
                                </li>
                                <li>
                                    <span class="icon"><i class="far fa-envelope-open mt-3"></i></span>
                                    <span class="info">
                                        <span class="info-title">Alamat Email</span>
                                        <a href="#">ngloram@gmail.com</a>
                                    </span>
                                </li>
                                <li>
                                    <span class="icon"><i class="far fa-map-marker-alt mt-3"></i></span>
                                    <span class="info">
                                        <span class="info-title"></span>
                                        <a href="#">Desa Ngloram, Kecamatan Cepu, <br>Kabupaten Blora, Jawa Tengah</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="row flex-md-row-reverse">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        <p class="copyright-text">© {{ date('Y') }} <a href="#">Pemerintah Desa Ngloram</a>.
                            All Rights Reserved</p>
                            <p>Created By KKN UNS 17 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== Footer End ======-->
