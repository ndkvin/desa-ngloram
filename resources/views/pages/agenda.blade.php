@extends('layouts.home')

@section('title', 'Desa Ngloram | Agenda')

@section('content')
    <section class="blog-area section-gap-extra-bottom primary-soft-bg mt-5">
        <div class="container mt-5">
            <div class="categories-header">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="common-heading mb-30">
                            <span class="tagline">
                                <i class="fas fa-plus"></i> Agenda
                                <span class="heading-shadow-text">Agenda</span>
                            </span>
                            <h2 class="title">Agenda Terbaru</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-post-loop">
                        <div class="post-item">
                            <div class="post-thumbnail">
                                <img src="assets/img/blog/01.jpg" alt="Thumbnail">
                            </div>
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li>
                                        <a href="#"><i class="far fa-user-circle"></i>Funden</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-calendar-alt"></i>25 February 2021</a>
                                    </li>
                                </ul>
                                <h3 class="title">
                                    <a href="news-details.html">Live Stream From Awwwards Berlin Showcasing Was Trends
                                        Design China Money Dating</a>
                                </h3>
                                <a href="news-details.html" class="post-link">Read More <i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="post-item video-post">
                            <div class="post-thumbnail">
                                <img src="assets/img/blog/02.jpg" alt="Thumbnail">
                                <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" class="video-popup" data-lity><i
                                        class="fas fa-play"></i></a>
                            </div>
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li>
                                        <a href="#"><i class="far fa-user-circle"></i>Funden</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-calendar-alt"></i>25 February 2021</a>
                                    </li>
                                </ul>
                                <h3 class="title">
                                    <a href="news-details.html">User Memory Design How To Design For Experiences That
                                        LastLive Stream From Awwwards</a>
                                </h3>
                                <a href="news-details.html" class="post-link">Read More <i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="post-thumbnail">
                                <img src="assets/img/blog/03.jpg" alt="Thumbnail">
                            </div>
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li>
                                        <a href="#"><i class="far fa-user-circle"></i>Funden</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-calendar-alt"></i>25 February 2021</a>
                                    </li>
                                </ul>
                                <h3 class="title">
                                    <a href="news-details.html">User Memory Design How To Design For Experiences That
                                        LastLive Stream From Awwwards</a>
                                </h3>
                                <a href="news-details.html" class="post-link">Read More <i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="post-item thumbnail-as-bg">
                            <div class="post-thumbnail">
                                <img src="assets/img/blog/04.jpg" alt="Thumbnail">
                            </div>
                        </div>
                    </div>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="widget category-widget">
                            <h4 class="widget-title">Category</h4>
                            <ul>
                                <li><a href="#">Berita (5) <i class="far fa-angle-right"></i></a></li>
                                <li><a href="#">Pengumuman (7) <i class="far fa-angle-right"></i></a></li>
                                <li><a href="#">Agenda (7) <i class="far fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="widget latest-blog-widget">
                            <h4 class="widget-title">Latest News</h4>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <img src="assets/img/latest-news/widget-01.jpg" alt="Image">
                                    </div>
                                    <div class="desc">
                                        <h6><a href="news-details.html">Build Seamless Spreads Import Experience</a></h6>
                                        <span class="date"><i class="far fa-calendar-alt"></i>25 May 2021</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="assets/img/latest-news/widget-02.jpg" alt="Image">
                                    </div>
                                    <div class="desc">
                                        <h6><a href="news-details.html">Creating Online Environ Work Well Older</a></h6>
                                        <span class="date"><i class="far fa-calendar-alt"></i>25 May 2021</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="assets/img/latest-news/widget-03.jpg" alt="Image">
                                    </div>
                                    <div class="desc">
                                        <h6><a href="news-details.html">Signs Website Feelore Haunted House</a></h6>
                                        <span class="date"><i class="far fa-calendar-alt"></i>25 May 2021</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
