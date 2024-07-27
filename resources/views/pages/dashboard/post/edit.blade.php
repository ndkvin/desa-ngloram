@extends('layouts.dashboard')

@section('title', 'Desa Ngloram | Dashboard')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Postingan</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Postingan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Minimal jQuery Datatable start -->
        <form action="{{ route('dashboard.post.update', $post->id) }}" method="post" enctype="multipart/form-data"
            id="form">
            @csrf
            @method('PUT')
            <label for="title" class="mb-2">Judul: </label>
            <div class="form-group">
                <input id="title" name="title" type="text" placeholder="Judul" class="form-control"
                    value="{{ $post->title }}">
            </div>
            <label for="category" class="mb-2">Kategori</label>
            <fieldset class="form-group">
                <select class="form-select" id="category" name="category">
                    <option value="pengumuman" {{ $post->category == 'pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                    <option value="berita" {{ $post->category == 'berita' ? 'selected' : '' }}>Berita</option>
                    <option value="agenda" {{ $post->category == 'agenda' ? 'selected' : '' }}>Agenda</option>
                </select>
            </fieldset>
            <label for="image" class="form-label mb-2">Gambar (biarkan kosong jika tidak ingin diubah)</label>
            <input class="form-control" type="file" id="image" name='image'>
            <div class="row">
                <div class="col">
                    <img class="w-75 my-2" src="{{ Storage::url($post->image) }}" alt="">
                </div>
            </div>
            <label for="Konten" class="form-label my-2">Konten</label>
            <div class="card-body">
                <div id="summernote"></div>
                <input type="hidden" name="content" id='content'>
            </div>
            <button type="submit" class="btn btn-primary ms-1 mt-3">
                <span class="d-sm-block">Buat</span>
            </button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        $('#summernote').summernote('code', {!! "'". $post-> content ."'"!!});
    </script>

@endsection
