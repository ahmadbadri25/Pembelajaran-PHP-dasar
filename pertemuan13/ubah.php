<?php 
// koneksi
require 'connection.php';

// ambil data url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM t_biodata WHERE id = $id")[0];

// cek tombol sudah submit atau belum
if(isset($_POST["submit"])) {

// cek data berhasil diubah atau tidak
if(ubah($_POST)>0) {
    echo " 
    <script>
    alert('Data berhasil diubah');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo " 
    <script>
    alert('Data gagal diubah');
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
    <title>UbahData</title>
</head>
<h1>Ubah data mahasiswa</h1>
<form action="" method="post">

    <!-- menghidden kan id biar nanti ke detect -->
    <input type="hidden" name="id" value="<?= $mhs["id"]?>">
    <ul>
        <li>
            <label for="Npm">NPM :</label>
            <input type="text" name="Npm" id="Npm" required value="<?= $mhs["Npm"];?>">
        </li>
        <li>
            <label for="Nama">Nama :</label>
            <input type="text" name="Nama" id="Nama" required value="<?= $mhs["Nama"];?>">
        </li>
        <li>
            <label for="Telp">Telp :</label>
            <input type="text" name="Telp" id="Telp" required value="<?= $mhs["Telp"];?>">
        </li>
        <li>
            <label for="Email">Email :</label>
            <input type="text" name="Email" id="Email" required value="<?= $mhs["Email"];?>">
        </li>
        <li>
            <label for="Alamat">Alamat :</label>
            <input type="text" name="Alamat" id="Alamat" required value="<?= $mhs["Alamat"];?>">
        </li>
        <li>
            <label for="TempatLahir">Tempat Lahir :</label>
            <input type="text" name="TempatLahir" id="TempatLahir" required value="<?= $mhs["TempatLahir"];?>">
        </li>
        <li>
            <label for="TglLahir">Tgl Lahir :</label>
            <input type="text" name="TglLahir" id="TglLahir" required value="<?= $mhs["TglLahir"];?>">
        </li>
        <li>
            <label for="JenisKelamin">Jenis Kelamin :</label>
            <input type="text" name="JenisKelamin" id="JenisKelamin" required value="<?= $mhs["JenisKelamin"];?>">
        </li>
        <li>
            <label for="Agama">Agama :</label>
            <input type="text" name="Agama" id="Agama" required value="<?= $mhs["Agama"];?>">
        </li>
        <li>
            <label for="Prodi">Prodi :</label>
            <input type="text" name="Prodi" id="Prodi" required value="<?= $mhs["Prodi"];?>">
        </li>

        <li>
            <button type="submit" name="submit">Ubah Data</button>
        </li>
    </ul>
</form>

<body>

</body>

</html>