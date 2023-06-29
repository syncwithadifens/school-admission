<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Peserta</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Quicksand', sans-serif;
        }

        body {
            background-color: #f8f8f8;
        }

        .box-formulir {
            width: 50%;
            margin: 100px auto;
        }

        .box {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 10px;
            box-sizing: border-box;
            margin: 5px 0 25px;
        }

        .table-form {
            width: 100%;
        }

        .table-form tr td:nth-child(1) {
            width: 30%;
        }

        .input-control {
            padding: 5px 10px;
            font-size: 16px;
            margin: 5px 0;
        }

        .btn-daftar {
            padding: 10px 17px;
            background-color: #4A99D7;
            color: #fff;
            border: none;
            font-size: 16px;
        }

        .btn-daftar:hover {
            cursor: pointer;
            background-color: #4881AE;
        }

        .btn-cetak {
            display: inline-block;
            padding: 10px 17px;
            color: #fff;
            background-color: #FF5733;
            margin-top: 5px;
        }

        .table-data {
            width: 100%;
            margin-top: 10px;
        }

        .table-data tr {
            height: 35px;
        }

        .table-data tr td:nth-child(1) {
            width: 30%;
        }

        .main-login {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        .box-login {
            width: 320px;
            min-height: 200px;
        }

        .box-login h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-login {
            padding: 5px 20px;
            background-color: #C70039;
            color: #fff;
            border: none;
            font-size: 16px;
        }

        .btn-login:hover {
            cursor: pointer;
            background-color: #900C3F;
        }

        header {
            background-color: #fff;
        }

        header::after {
            content: '';
            display: block;
            clear: both;
        }

        header h1 {
            padding: 15px 25px;
            display: inline-block;
            float: left;
        }

        header ul {
            float: left;
        }

        header ul li {
            padding: 24px 25px;
            display: inline-block;
        }

        a {
            text-decoration: none;
        }

        .content {
            width: 90%;
            padding: 10px;
            box-sizing: border-box;
            margin: 50px auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        .table tr {
            height: 30px;
        }

        .table tr td {
            padding: 5px 10px;
        }

        .table tr td:nth-child(1) {
            text-align: center;
        }
    </style>
    <script>
        window.print();
    </script>
</head>

<body>

    <h2>Laporan Calon Siswa</h2><br><br>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Pendaftaran</th>
                <th>Tahun Ajaran</th>
                <th>Jurusan</th>
                <th>Nama</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $p)
                <tr>
                    <td style="text-align: center">{{ $loop->iteration }}</td>
                    <td style="text-align: center">{{ $p->id_pendaftaran }}</td>
                    <td style="text-align: center">{{ $p->th_ajaran }}</td>
                    <td style="text-align: center">{{ $p->jurusan }}</td>
                    <td style="text-align: center">{{ $p->nm_peserta }}</td>
                    <td style="text-align: center">{{ $p->tmp_lahir }}, {{ $p->tgl_lahir }}</td>
                    <td style="text-align: center">{{ $p->jk }}</td>
                    <td style="text-align: center">{{ $p->agama }}</td>
                    <td style="text-align: center">{{ $p->almt_peserta }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
