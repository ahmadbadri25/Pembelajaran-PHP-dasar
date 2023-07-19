<?php
require 'connection.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script> 
            alert('User baru berhasil ditambahkan!');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
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
        display: block;
        margin-bottom: 10px;
    }

    .container form input[type="text"],
    .container form input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
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
        <h1>Halaman Registrasi</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username :</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password :</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password2" class="form-label">Konfirmasi Password :</label>
                <input type="password" name="password2" id="password2" class="form-control">
            </div>
            <button type="submit" name="register" class="btn btn-primary">Register!</button>
        </form>
        <div class="mt-3">
            <p>Sudah punya akun? <a href="index.php">Login</a></p>
        </div>
    </div>
</body>

</html>