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
                            <h3>Edit Data Calon Peserta Didik Baru</h3>
                            <p class="text-subtitle text-muted">
                                Halaman untuk mengubah data dari calon peserta didik baru.
                            </p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Edit Peserta
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
                                        <form class="form form-vertical" action="/{{ $data->id_pendaftaran }}"
                                            method="post">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="PUT">
                                            <input type="hidden" name="id_pendaftaran" value="{{ $data->id_pendaftaran }}">
                                            <input type="hidden" name="tgl_daftar" value="{{ $data->tgl_daftar }}">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Tahun Ajaran</label>
                                                            <div class="position-relative">
                                                                <select name="th_ajaran" class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option selected value="2023/2024"
                                                                        {{ $data->th_ajaran == '2023/2024' ? 'selected' : '' }}>
                                                                        2023/2024</option>
                                                                    <option value="2024/2025"
                                                                        {{ $data->th_ajaran == '2024/2025' ? 'selected' : '' }}>
                                                                        2024/2025</option>
                                                                    <option value="2025/2026"
                                                                        {{ $data->th_ajaran == '2025/2026' ? 'selected' : '' }}>
                                                                        2025/2026</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Jurusan</label>
                                                            <div class="position-relative">
                                                                <select name="jurusan" class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option selected disabled>--Pilih--</option>
                                                                    <option value="Administrasi Perkantoran"
                                                                        {{ $data->jurusan == 'Administrasi Perkantoran' ? 'selected' : '' }}>
                                                                        Administrasi Perkantoran</option>
                                                                    <option value="Akuntansi"
                                                                        {{ $data->jurusan == 'Akuntansi' ? 'selected' : '' }}>
                                                                        Akuntansi</option>
                                                                    <option value="Penjualan"
                                                                        {{ $data->jurusan == 'Penjualan' ? 'selected' : '' }}>
                                                                        Penjualan</option>
                                                                    <option value="Rekayasa Perangkat Lunak"
                                                                        {{ $data->jurusan == 'Rekayasa Perangkat Lunak' ? 'selected' : '' }}>
                                                                        Rekayasa Perangkat Lunak</option>
                                                                    <option value="Teknik Elektronika Industri"
                                                                        {{ $data->jurusan == 'Teknik Elektronika Industri' ? 'selected' : '' }}>
                                                                        Teknik Elektronika Industri</option>
                                                                    <option value="Teknik Mekanik Otomotif"
                                                                        {{ $data->jurusan == 'Teknik Mekanik Otomotif' ? 'selected' : '' }}>
                                                                        Teknik Mekanik Otomotif</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Nama Lengkap</label>
                                                            <div class="position-relative">
                                                                <input type="text" name="nm_peserta"
                                                                    class="form-control @error('nm_peserta') 
                                                                is-invalid @enderror"
                                                                    placeholder="Masukkan nama lengkap anda"
                                                                    id="first-name-icon" value="{{ $data->nm_peserta }}" />
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                                @error('nm_peserta')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Tempat Lahir</label>
                                                            <div class="position-relative">
                                                                <input type="text" name="tmp_lahir"
                                                                    class="form-control  @error('tmp_lahir') 
                                                                is-invalid @enderror"
                                                                    placeholder="Masukkan tempat lahir anda"
                                                                    id="email-id-icon" value="{{ $data->tmp_lahir }}" />
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-buildings"></i>
                                                                </div>
                                                                @error('tmp_lahir')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Tanggal Lahir</label>
                                                            <div class="position-relative">
                                                                <input type="date" name="tgl_lahir"
                                                                    class="form-control @error('tgl_lahir') 
                                                                is-invalid @enderror"
                                                                    id="email-id-icon" value="{{ $data->tgl_lahir }}" />
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-calendar"></i>
                                                                </div>
                                                                @error('tgl_lahir')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Jenis Kelamin</label>
                                                            <div class="position-relative">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="jk" id="inlineRadio1"
                                                                        value="Laki laki"
                                                                        {{ $data->jk == 'Laki laki' ? 'checked' : '' }}>
                                                                    <label class="form-check-label"
                                                                        for="inlineRadio1">Laki
                                                                        laki</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="jk" id="inlineRadio2"
                                                                        value="Perempuan"
                                                                        {{ $data->jk == 'Perempuan' ? 'checked' : '' }}>
                                                                    <label class="form-check-label"
                                                                        for="inlineRadio2">Perempuan</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Agama</label>
                                                            <div class="position-relative">
                                                                <select name="agama" class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option selected disabled>--Pilih--</option>
                                                                    <option value="Islam"
                                                                        {{ $data->agama == 'Islam' ? 'selected' : '' }}>
                                                                        Islam</option>
                                                                    <option value="Kristen"
                                                                        {{ $data->agama == 'Kristen' ? 'selected' : '' }}>
                                                                        Kristen</option>
                                                                    <option value="Katolik"
                                                                        {{ $data->agama == 'Katolik' ? 'selected' : '' }}>
                                                                        Katolik</option>
                                                                    <option value="Hindu"
                                                                        {{ $data->agama == 'Hindu' ? 'selected' : '' }}>
                                                                        Hindu</option>
                                                                    <option value="Buddha"
                                                                        {{ $data->agama == 'Buddha' ? 'selected' : '' }}>
                                                                        Buddha</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Alamat</label>
                                                            <div class="position-relative">
                                                                <div class="form-floating">
                                                                    <textarea
                                                                        class="form-control @error('almt_peserta') 
                                                                    is-invalid @enderror"
                                                                        name="almt_peserta" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ $data->almt_peserta }}</textarea>
                                                                    @error('almt_peserta')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                                            Ubah
                                                        </button>
                                                        <a href="/{{ $data->id_pendaftaran }}"
                                                            class="btn btn-light-secondary me-1 mb-1">
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
