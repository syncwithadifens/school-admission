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
                            <h3>Data Calon Peserta Didik Baru</h3>
                            <p class="text-subtitle text-muted">
                                Di halaman ini memuat semua data hewan yang ditampilkan di aplikasi mobile.
                            </p>
                            @if (session('pesan'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= session('pesan') ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Data
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <form action="/cetak/laporan" method="get">
                            @csrf
                            <button class="btn btn-primary"><i class="bi bi-printer"> Cetak Laporan</i> </button>
                        </form>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Pendaftaran</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Jurusan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $p)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $p->id_pendaftaran }}</td>
                                            <td>{{ $p->nm_peserta }}</td>
                                            <td>{{ $p->jk }}</td>
                                            <td>{{ $p->jurusan }}</td>
                                            <td><a href="/{{ $p->id_pendaftaran }}" class="btn btn-info"><i
                                                        class="bi bi-eye"></i></a></td>
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
