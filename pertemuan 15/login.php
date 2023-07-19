<?php 
// code menjalankan $session
session_start();
// code untuk tidak bisa kembali dari index/yang lain ke login.php
if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}
require 'connection.php';
if (isset($_POST["login"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        
    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
        // set session
        $_SESSION["login"] = true; 

        // cek session
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
</head>

<body>
    <h1>Halaman Login</h1>

    <?php if (isset($error) ) : ?>
    <p style="color : red; font-style:italic">Username / Password salah</p>
    <?php endif;?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username" placeholder="Masukkan Username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password">
            </li>
        </ul>
        <li>
            <button type="submit" name="login">Login</button>
        </li>
    </form>
</body>

</html>