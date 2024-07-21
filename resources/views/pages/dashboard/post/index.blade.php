@extends('layouts.dashboard')

@section('title', 'Desa Ngloram | Dashboard')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Postingan</h3>
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
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        List Postingan
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 my-3">
                            <a href="{{ route('dashboard.post.create') }}" class="btn btn-primary">
                                Buat Postingan
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Kateogi</th>
                                    <th>Dibuat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->category }}</td>
                                        <td>{{ $post->created_at->format('d F Y') }}</td>
                                        <td>
                                            <a class="btn btn-warning text-white"
                                                href="{{ route('dashboard.post.edit', $post->id) }}">
                                                Edit
                                            </a>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete">
                                                Delete
                                            </button>
                                        </td>

                                        <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel33" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel33">Hapus Postingan</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('dashboard.post.destroy', $post->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <div class="modal-body">
                                                            <p>Apakah anda yakin ingin menghapus postingan {{ $post->title }}?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Tutup</span>
                                                            </button>
                                                            <button type="submit" class="btn btn-danger ms-1"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Hapus</span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><input type="text" class="form-control" placeholder="Cari No"></td>
                                    <td><input type="text" class="form-control" placeholder="Cari Judul"></td>
                                    <td><input type="text" class="form-control" placeholder="Cari Kategori"></td>
                                    <td><input type="text" class="form-control" placeholder="Cari Dibuat"></td>
                                    <td><input type="text" class="form-control" placeholder="Cari Aksi" disabled></td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
