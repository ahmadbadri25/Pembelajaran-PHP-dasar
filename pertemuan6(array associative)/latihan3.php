<?php 
// $mahasiswa =  [["Ahmad Badri", "202043502067", "teknik informatika", "25.ahmadbadri@gmail.com"],
//         ["Ahmad lopo", "202043502021", "teknik informatika", "25.ahmad2esi@gmail.com"],
//         ["Ahmad japri", "202043502267", "teknik informatika", "25.ahmadbadu@gmail.com"],
// ];

// Array Asociative
// definisinya sama seperti array numeri, kecuali
// keynya adalh string yang kita buat sendiri

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>

<body>
    <h1> Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs ):?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?> ">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["npm"]; ?></li>
        <li>Jurusan : <?= $mhs["email"]; ?></li>
        <li>Email: <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>

</html>