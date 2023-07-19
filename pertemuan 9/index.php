<?php 
// menghubungkan ke koneksi database
require 'connection.php';

// query ke koneksi database
$mahasiswa = query("SELECT * FROM t_biodata");




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
    <h1>Daftar Mahasiswa</h1>
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
                <a href="">Ubah</a>|
                <a href="">Hapus</a>

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