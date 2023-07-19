<?php 

//menjalankan session
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

// menghubungkan ke koneksi database
require 'connection.php';

//pagination

// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM t_biodata"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"])) ? $_GET["halaman"] :  1 ;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;



// query ke koneksi database
$mahasiswa = query("SELECT * FROM t_biodata LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari tekan
if( isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <!-- button logout -->
    <a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan Keyword Pencarian..."
            autocomplete="off">
        <button type="submit" name="cari">Cari! </button>
    </form>
    <br><br>
    <!-- navigasi -->
    <?php if( $halamanAktif > 1) : ?>
    <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif;?>


    <?php for ( $i = 1; $i <= $jumlahHalaman; $i++) :?>
    <?php if($i == $halamanAktif) : ?>
    <a href="?halaman=<?= $i; ?>" style="font-weight:bold; color:red;">
        <?= $i; ?> </a>
    <?php else : ?>
    <a href="?halaman=<?= $i ?>"><?= $i; ?></a>
    <?php endif;?>
    <?php endfor;?>

    <?php if( $halamanAktif < $jumlahHalaman) : ?>
    <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif;?>



    <br>


    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Aksi</th>
            <th>Id</th>
            <th>Npm</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Prodi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row): ?>
        <tr>
            <td>
                <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a>|
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah Anda Sudah Yakin?');">Hapus</a>

            </td>
            <td> <?= $i; ?> </td>
            <td><?= $row["Npm"];?></td>
            <td><?= $row["Nama"];?></td>
            <td><?= $row["Telp"];?></td>
            <td><?= $row["Email"];?></td>
            <td><?= $row["Alamat"];?></td>
            <td><?= $row["TempatLahir"];?></td>
            <td><?= $row["TglLahir"];?></td>
            <td><?= $row["JenisKelamin"];?></td>
            <td><?= $row["Agama"];?></td>
            <td><?= $row["Prodi"];?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>

    </table>
</body>

</html>