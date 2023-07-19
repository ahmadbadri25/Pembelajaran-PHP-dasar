<?php

// Menjalankan session
session_start();

// Mengkoneksi database
require 'connection.php';

// Cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // Ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id ");
    $row = mysqli_fetch_assoc($result);

    // Cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

// Redirect jika sudah login
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

// Proses login
if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // Cek username
    if (mysqli_num_rows($result) === 1) {

        // Cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // Set session
            $_SESSION["login"] = true;

            // Cek remember me
            if (isset($_POST['remember'])) {
                // Buat cookie
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }

            header("location: index.php");
            exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
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

    .container form input[type="checkbox"] {
        margin-top: 10px;
    }

    .container form button {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .container form button:hover {
        background-color: #0056b3;
    }

    .container .error-message {
        color: red;
        font-style: italic;
        margin-top: 10px;
    }

    .container .register-link {
        text-align: center;
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Halaman Login</h1>

        <?php if (isset($error)) : ?>
        <p class="error-message">Username / Password salah</p>
        <?php endif; ?>

        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Masukkan Username">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Masukkan Password">

            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember Me</label>

            <button type="submit" name="login">Login</button>
        </form>

        <div class="register-link">
            <p>Belum punya akun? <a href="registrasi.php">Registrasi</a></p>
        </div>
    </div>
</body>

</html>