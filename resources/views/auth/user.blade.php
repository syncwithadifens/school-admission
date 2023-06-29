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
                            <h3>Semua User Terdaftar</h3>
                            <p class="text-subtitle text-muted">
                                Halaman untuk mengelola data user.
                            </p>
                            <?php if (session('pesan')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?= session('pesan') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Data User
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th>Created_at</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $u)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $u->nm_admin }}</td>
                                            <td>{{ $u->username }}</td>
                                            <td>{{ $u->role }}</td>
                                            <td>{{ $u->created_at }}</td>
                                            <td>
                                                <a href="/register" class="btn btn-primary"><i
                                                        class="bi bi-plus-circle"></i></a>
                                                <a href="/user/{{ $u->id_admin }}/edit" class="btn btn-info"><i
                                                        class="bi bi-pencil"></i></a>

                                                <form action="/user/delete/{{ $u->id_admin }}" method="post"
                                                    class="d-inline">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah anda ingin menghapus?');"><i
                                                            class="bi bi-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>

            @include('layout.footer')

        </div>
    </div>
@endsection
