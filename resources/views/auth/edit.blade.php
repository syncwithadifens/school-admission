@extends('layout.template')
@section('content')
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">

        @include('layout.sidebar')

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Edit Data User</h3>
                            <p class="text-subtitle text-muted">
                                Halaman untuk mengubah data user.
                            </p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Edit User
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class=" col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="/user/{{ $data->id_admin }}"
                                            method="post">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="PUT">
                                            <input type="hidden" name="password" value="{{ $data->password }}">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Nama Lengkap</label>
                                                            <div class="position-relative">
                                                                <input type="text" name="nm_admin"
                                                                    class="form-control @error('nm_admin') 
                                                                is-invalid @enderror"
                                                                    placeholder="Masukkan nama lengkap anda"
                                                                    id="first-name-icon" value="{{ $data->nm_admin }}" />
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                                @error('nm_admin')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Username</label>
                                                            <div class="position-relative">
                                                                <input type="text" name="username"
                                                                    class="form-control  @error('username') 
                                                                is-invalid @enderror"
                                                                    placeholder="Masukkan username anda" id="email-id-icon"
                                                                    value="{{ $data->username }}" />
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-buildings"></i>
                                                                </div>
                                                                @error('username')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Role</label>
                                                            <div class="position-relative">
                                                                <select name="role" class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option selected disabled>--Pilih--</option>
                                                                    <option value="admin"
                                                                        {{ $data->role == 'admin' ? 'selected' : '' }}>
                                                                        Admin</option>
                                                                    <option value="user"
                                                                        {{ $data->role == 'user' ? 'selected' : '' }}>
                                                                        User</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                                            Ubah
                                                        </button>
                                                        <a href="/users" class="btn btn-light-secondary me-1 mb-1">
                                                            Kembali
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Vertical form layout section end -->
            </div>

            @include('layout.footer')
        </div>
    </div>
@endsection
