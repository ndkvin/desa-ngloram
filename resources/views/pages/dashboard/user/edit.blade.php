@extends('layouts.dashboard')

@section('title', 'Desa Ngloram | Dashboard')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit User</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Minimal jQuery Datatable start -->
        <form action="{{ route('dashboard.user.update', $user->id) }}" method="post" enctype="multipart/form-data"
            id="form">
            @csrf
            @method('PUT')
            <label for="name" class="mb-2">Nama </label>
            <div class="form-group">
                <input value='{{ $user->name }}' id="name" name="name" type="text" placeholder="Nama" class="form-control" required>
            </div>
            <label for="email" class="mb-2">Email </label>
            <div class="form-group">
                <input value='{{ $user->email }}' id="email" name="email" type="email" placeholder="Email" class="form-control">
            </div>

            <label for="password" class="mb-2">Password (kosongkan jika tidak ingin berubah)</label>
            <div class="form-group">
                <input id="password" name="password" type="text" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary ms-1 mt-3">
                <span class="d-sm-block">Perbarui</span>
            </button>
        </form>
    </div>
@endsection
