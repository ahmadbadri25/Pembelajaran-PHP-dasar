<?php  
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'connection.php';

$mahasiswa = query("SELECT * FROM t_biodata");

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
    <!-- Tambahkan referensi ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- script JavaScript yang diperlukan oleh Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- script JavaScript lainnya -->
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/script.js"></script>

    <style>
    .logout {
        margin-top: 20px;
    }

    h1 {
        margin-bottom: 20px;
    }

    .tambah {
        margin-bottom: 20px;
    }

    .form-cari {
        margin-bottom: 20px;
    }

    .loader {
        width: 20px;
        display: none;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- button logout -->
                <a href="logout.php" class="btn btn-primary logout">Logout</a>

                <h1 class="text-center">Daftar Mahasiswa</h1>

                <a href="tambah.php" class="btn btn-primary tambah">Tambah Data Mahasiswa</a>

                <form action="" method="post" class="form-cari">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control"
                            placeholder="Masukkan Keyword Pencarian..." autocomplete="off" id="keyword">
                        <button type="submit" name="cari" class="btn btn-primary">Cari!</button>
                    </div>
                    <img src="img/loader.gif" class="loader">
                </form>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="aksi">Aksi</th>
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
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($mahasiswa as $row): ?>
                        <tr>
                            <td class="aksi">
                                <a href="ubah.php?id=<?= $row["id"];?>" class="btn btn-primary">Ubah</a>
                                <a href="hapus.php?id=<?= $row["id"];?>" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda Sudah Yakin?');">Hapus</a>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>