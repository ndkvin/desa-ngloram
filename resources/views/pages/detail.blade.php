@extends('layouts.home')

@section('title', 'Desa Ngloram | Detail Berita')

@section('content')
    <section class="blog-area section-gap-extra-bottom primary-soft-bg mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-post-details">
                        <div class="post-thumbnail">
                            <img src="assets/img/blog/blog-details.jpg" alt="Thumbnail">
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
                                Live Stream From Awwwards Berlin Showcasing Was Trends Design China Money Dating
                            </h3>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                                exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                            </p>
                        </div>
                    </div>
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
