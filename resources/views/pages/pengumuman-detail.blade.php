@extends('layouts.home')

@section('title', 'Desa Ngloram | Detail Pengumuman')

@section('content')
    <section class="blog-area section-gap-extra-bottom primary-soft-bg mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-post-details">
                        <div class="post-thumbnail">
                            <img src="{{ Storage::url($pengumuman->image) }}" alt="Thumbnail">
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li>
                                    <a href="#"><i
                                            class="far fa-calendar-alt"></i>{{ $pengumuman->created_at->format('d M Y') }}</a>
                                </li>
                            </ul>
                            <h3 class="title">
                                {{ $pengumuman->title }}
                            </h3>
                            <p>
                                {!! $pengumuman->content !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="widget category-widget">
                            <h4 class="widget-title">Category</h4>
                            <ul>
                                <li><a href="{{ route('berita') }}">Berita<i class="far fa-angle-right"></i></a></li>
                                <li><a href="{{ route('pengumuman') }}">Pengumuman<i class="far fa-angle-right"></i></a>
                                </li>
                                <li><a href="{{ route('agenda') }}">Agenda<i class="far fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="widget latest-blog-widget">
                            <h4 class="widget-title">Berita Terkini</h4>
                            <ul>
                                @foreach ($latest as $item)
                                    <li>
                                        <div class="thumb">
                                            <img src="{{ Storage::url($item->image) }}" alt="Thumbnail">
                                        </div>
                                        <div class="content">
                                            <h6><a href="{{ route('berita.show', $item->slug) }}">{{ $item->title }}</a>
                                            </h6>
                                            <span>{{ $item->created_at->format('d M Y') }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
