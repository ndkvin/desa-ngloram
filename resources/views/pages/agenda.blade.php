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
                        @foreach ($agenda as $item)
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <img src="{{ Storage::url($item->image) }}" alt="Thumbnail">
                                </div>
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li>
                                            <a href="{{ route('agenda.show', $item->slug) }}"><i
                                                    class="far fa-calendar-alt"></i>{{ $item->created_at->format('d M Y') }}</a>
                                        </li>
                                    </ul>
                                    <h3 class="title">
                                        <a href="{{ route('agenda.show', $item->slug) }}">
                                            {{ \Illuminate\Support\Str::limit($item->title, 150, $end = '...') }}
                                        </a>
                                    </h3>
                                    <a href="{{ route('agenda.show', $item->slug) }}" class="post-link">Read More <i
                                            class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <ul class="pagination">
                        {{-- Previous Page Link --}}
                        @if ($agenda->onFirstPage())
                            <li class="page-item disabled" aria-disabled="true">
                                <span class="page-link"><i class="far fa-angle-left"></i></span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $agenda->previousPageUrl() }}" rel="prev"><i
                                        class="far fa-angle-left"></i></a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @php
                            $currentPage = $agenda->currentPage();
                            $lastPage = $agenda->lastPage();
                            $range = 1; // Number of pages to show before and after the current page
                        @endphp

                        {{-- Show first page if necessary --}}
                        @if ($currentPage > $range + 1)
                            <li class="page-item"><a class="page-link" href="{{ $agenda->url(1) }}">1</a></li>
                            @if ($currentPage > $range + 2)
                                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                            @endif
                        @endif

                        {{-- Show pages around the current page --}}
                        @for ($page = max(1, $currentPage - $range); $page <= min($lastPage, $currentPage + $range); $page++)
                            @if ($page == $currentPage)
                                <li class="page-item active" aria-current="page"><span
                                        class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $agenda->url($page) }}">{{ $page }}</a></li>
                            @endif
                        @endfor

                        {{-- Show last page if necessary --}}
                        @if ($currentPage < $lastPage - $range)
                            @if ($currentPage < $lastPage - $range - 1)
                                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                            @endif
                            <li class="page-item"><a class="page-link"
                                    href="{{ $agenda->url($lastPage) }}">{{ $lastPage }}</a></li>
                        @endif

                        {{-- Next Page Link --}}
                        @if ($agenda->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $agenda->nextPageUrl() }}" rel="next"><i
                                        class="far fa-angle-right"></i></a>
                            </li>
                        @else
                            <li class="page-item disabled" aria-disabled="true">
                                <span class="page-link"><i class="far fa-angle-right"></i></span>
                            </li>
                        @endif
                    </ul>
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
                                @foreach ($beritaTerkini as $item)
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

                        <div class="widget latest-blog-widget">
                            <h4 class="widget-title">Agenda Terkini</h4>
                            <ul>
                                @foreach ($agendaTerkini as $item)
                                    <li>
                                        <div class="thumb">
                                            <img src="{{ Storage::url($item->image) }}" alt="Thumbnail">
                                        </div>
                                        <div class="content">
                                            <h6><a href="{{ route('agenda.show', $item->slug) }}">{{ $item->title }}</a>
                                            </h6>
                                            <span>{{ $item->created_at->format('d M Y') }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget latest-blog-widget">
                            <h4 class="widget-title">Pengumuman Terkini</h4>
                            <ul>
                                @foreach ($pengumumanTerkini as $item)
                                    <li>
                                        <div class="thumb">
                                            <img src="{{ Storage::url($item->image) }}" alt="Thumbnail">
                                        </div>
                                        <div class="content">
                                            <h6><a
                                                    href="{{ route('pengumuman.show', $item->slug) }}">{{ $item->title }}</a>
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
