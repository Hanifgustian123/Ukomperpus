<?php

include "config.php";
error_reporting(0);
session_start();
if (isset($_SESSION["username"])) {
    header("Location: portfolio.php");
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password' ,'$alamat','$level')";
    $result = mysqli_query($conn, $sql);
    echo "<script>alert('Registrasi Berhasil')</script>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="register.css">
    <title>Ukom</title>
</head>

<body>
    <form class="register" method="POST">
        <center>
            <br>
            <h1>Registrasi</h1></br>
            <center>
                <div class="field">
                    <br>
                    <center><label>Username</label></center></br>
                    <input type="text" name="Username">
                </div>
                <div class="field">
                    <br>
                    <center><label>Email</label></center></br>
                    <input type="email" name="email">
                </div>
                <div class="field">
                    <br>
                    <center><label>Password</label></center></br>
                    <input type="password" name="password">
                    <div class="field">
                        <br>
                        <center><label>Alamat</label></center></br>
                        <input type="alamat" name="alamat">
                    </div>
                    <br>
                    <div class="field" style="text-align: center;margin-bottom:10px "></br>
                        <p>Sudah punya akun?<a href="index.php">Login</a></p>
                    </div>
                    <div class="field">
                        <button type="submit" name="submit">Submit</button>
                    </div>
    </form>
</body>

</html>
