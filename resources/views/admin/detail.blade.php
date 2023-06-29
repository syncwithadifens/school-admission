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
                            <h3>Detail Calon Peserta</h3>
                            <p class="text-subtitle text-muted">
                                Halaman untuk menampilkan detail calon peserta.
                            </p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Detail Peserta
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Basic card section start -->
                <section id="content-types">
                    <div class="row">

                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <table class="table-data" border="0">
                                            <tr>
                                                <td>Kode Pendaftaran</td>
                                                <td>:</td>
                                                <td>{{ $data->id_pendaftaran }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tahun Ajaran</td>
                                                <td>:</td>
                                                <td>{{ $data->th_ajaran }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jurusan</td>
                                                <td>:</td>
                                                <td>{{ $data->jurusan }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <td>:</td>
                                                <td>{{ $data->nm_peserta }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tempat, Tanggal Lahir</td>
                                                <td>:</td>
                                                <td>{{ $data->tmp_lahir }}, {{ $data->tgl_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>:</td>
                                                <td>{{ $data->jk }}</td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td>:</td>
                                                <td>{{ $data->agama }}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>:</td>
                                                <td>{{ $data->almt_peserta }}</td>
                                            </tr>
                                        </table>
                                        <br>
                                        <form action="/delete/{{ $data->id_pendaftaran }}" method="post" class="d-inline">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger float-end"
                                                onclick="return confirm('Apakah anda ingin menghapus?');"><i
                                                    class="bi bi-trash"></i> Hapus</button>
                                        </form>
                                        <a href="/{{ $data->id_pendaftaran }}/edit"
                                            class="btn btn-warning float-end me-2"><i class="bi bi-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('layout.footer')
                    </div>
            </div>
        @endsection
