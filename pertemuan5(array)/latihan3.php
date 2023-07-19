<?php 
$mahasiswa = [ ["Ahmad Badri", "202043502067", "teknik informatika", "25.ahmadbadri@gmail.com"],
["Ahmad Farid", "202043502017", "teknik informatika", "25.ahmadfarid@gmail.com"],
["Ahmad Ismail", "202043502027", "teknik informatika", "25.ahmadismail@gmail.com"],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar mahasiswa</title>
</head>

<body>
    <h1>daftar mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs):?>
    <ul>

        <li>Nama : <?= $mhs[0]; ?></li>
        <li>Npm : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach;?>
</body>

</html>