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
                        Sedut perspiciatis unde omnis iste natus voluptatem accusan tium dolore dantiumy totam rem apeam, eaque ipsa quaventore veritatis quasi architecto beatae.
                    </p>
                    <ul class="check-list mt-30">
                        <li class="wow fadeInUp" data-wow-delay="0s">
                            <h5 class="title">Highest Success Rates</h5>
                            <p>Quis autem vel eum iure reprehenderit quin</p>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="0.1s">
                            <h5 class="title">Raise Funds With Crowdfunding</h5>
                            <p>Voluptate esse quam nihil molestiae consequatur</p>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="0.2s">
                            <h5 class="title">Millions in Funding</h5>
                            <p>Accusan tium dolore dantiumy totam apeam</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="about-gallery wow fadeInRight">
                    <div class="img-one">
                        <img src="assets/img/about/about-gallery-1.jpg" alt="Image">
                    </div>
                    <div class="img-two wow fadeInUp">
                        <img src="assets/img/about/about-gallery-2.jpg" alt="Image">
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
