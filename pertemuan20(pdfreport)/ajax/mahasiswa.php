<?php 
usleep(500000);
require '../connection.php';


$keyword = $_GET["keyword"];

$query ="SELECT * FROM t_biodata
    WHERE 
    nama LIKE '%$keyword%' OR
    Npm LIKE '%$keyword%' OR
    Telp LIKE '%$keyword%' OR
    Email LIKE '%$keyword%' OR
    Alamat LIKE '%$keyword%' OR
    TempatLahir LIKE '%$keyword%' OR
    TglLahir LIKE '%$keyword%' OR
    JenisKelamin LIKE '%$keyword%' OR
    Agama LIKE '%$keyword%' OR
    Prodi LIKE '%$keyword%'
";
$mahasiswa = query($query); 



?>

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