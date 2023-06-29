<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB ONLINE SMK DARUL MA'ARIF</title>
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

    <h2>Bukti Pendaftaran</h2>
    <table class="table-data" border="0">
        <tr>
            <td>Kode Pendaftaran</td>
            <td>:</td>
            <td>{{ $data['id_pendaftaran'] }}</td>
        </tr>
        <tr>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td>{{ $data['th_ajaran'] }}</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>{{ $data['jurusan'] }}</td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{ $data['nm_peserta'] }}</td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $data['tmp_lahir'] }}, {{ $data['tgl_lahir'] }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $data['jk'] }}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>{{ $data['agama'] }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $data['almt_peserta'] }}</td>
        </tr>
    </table>

</body>

</html>
