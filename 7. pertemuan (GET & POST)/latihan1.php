<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "Ahmad Badri",
        "npm" => "202043502067",
        "email" => "25.ahmadbadri@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.png"
    ],
    [
        "nama" => "yoga amanda",
        "npm" => "202043502023",
        "email" => "yogaamanda@gmail.com",
        "jurusan" => "Teknik Informatika" ,
        "gambar" => "2.png"
    ]
    
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Get</title>
</head>

<body>
    <h1> Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"];?>&npm=<?= $mhs["npm"];?>&email=<?= $mhs["email"];?>
            &jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"];?>
            "><?= $mhs["nama"];?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>