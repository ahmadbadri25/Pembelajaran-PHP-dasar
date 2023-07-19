<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'connection.php';

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <!-- Tambahkan referensi ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- script JavaScript yang diperlukan oleh Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- script JavaScript lainnya -->
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/script.js"></script>

    <style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        max-width: 500px;
        margin-top: 50px;
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .container h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    .container form label {
        font-weight: bold;
    }

    .container form button[type="submit"] {
        background-color: #007bff;
        border: none;
        color: #fff;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .container form button[type="submit"]:hover {
        background-color: #0069d9;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tambah Data Mahasiswa</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="Npm" class="form-label">NPM :</label>
                <input type="text" name="Npm" id="Npm" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama :</label>
                <input type="text" name="Nama" id="Nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Telp" class="form-label">Telp :</label>
                <input type="text" name="Telp" id="Telp" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email :</label>
                <input type="text" name="Email" id="Email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat :</label>
                <input type="text" name="Alamat" id="Alamat" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="TempatLahir" class="form-label">Tempat Lahir :</label>
                <input type="text" name="TempatLahir" id="TempatLahir" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="TglLahir" class="form-label">Tanggal Lahir :</label>
                <input type="date" name="TglLahir" id="TglLahir" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="JenisKelamin" class="form-label">Jenis Kelamin :</label>
                <input type="text" name="JenisKelamin" id="JenisKelamin" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Agama" class="form-label">Agama :</label>
                <input type="text" name="Agama" id="Agama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Prodi" class="form-label">Prodi :</label>
                <input type="text" name="Prodi" id="Prodi" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</body>

</html>