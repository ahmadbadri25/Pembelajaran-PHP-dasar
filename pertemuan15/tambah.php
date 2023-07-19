<?php 
//menjalankan session
session_start();

if(!isset($_SESSION["login"])){
    header("Location : login.php");
    exit;
}

// koneksi
require 'connection.php';

// cek tombol sudah submit atau belum
if(isset($_POST["submit"])) {

// cek data berhasil ditambah atau tidak
if(tambah($_POST)>0) {
    echo " 
    <script>
    alert('Data berhasil ditambahkan');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo " 
    <script>
    alert('Data gagal ditambahkan');
    document.location.href = 'index.php';
    </script>
    ";
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TambahData.php</title>
</head>
<h1>Tambah data mahasiswa</h1>
<form action="" method="post">
    <ul>
        <li>
            <label for="Npm">NPM :</label>
            <input type="text" name="Npm" id="Npm" required>
        </li>
        <li>
            <label for="Nama">Nama :</label>
            <input type="text" name="Nama" id="Nama" required>
        </li>
        <li>
            <label for="Telp">Telp :</label>
            <input type="text" name="Telp" id="Telp" required>
        </li>
        <li>
            <label for="Email">Email :</label>
            <input type="text" name="Email" id="Email" required>
        </li>
        <li>
            <label for="Alamat">Alamat :</label>
            <input type="text" name="Alamat" id="Alamat" required>
        </li>
        <li>
            <label for="TempatLahir">Tempat Lahir :</label>
            <input type="text" name="TempatLahir" id="TempatLahir" required>
        </li>
        <li>
            <label for="TglLahir">Tgl Lahir :</label>
            <input type="date" name="TglLahir" id="TglLahir" required>
        </li>
        <li>
            <label for="JenisKelamin">Jenis Kelamin :</label>
            <input type="text" name="JenisKelamin" id="JenisKelamin" required>
        </li>
        <li>
            <label for="Agama">Agama :</label>
            <input type="text" name="Agama" id="Agama" required>
        </li>
        <li>
            <label for="Prodi">Prodi :</label>
            <input type="text" name="Prodi" id="Prodi" required>
        </li>

        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>
</form>

<body>

</body>

</html>