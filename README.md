<?php

include "config.php";
error_reporting(0);
session_start();
if (isset($_SESSION["username"])) {
    header("Location: portfolio.php");
}

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE email = '$email' AND  password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["username"] = $row["username"];
        header("index.php");
    }
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
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error'] ?>
    </div>

    <form class="register" method="POST">
        <center>
            <br>
            <h1>Login</h1></br>
            <center>
                <div class="field">
                    <center><label>Username</label></center>
                    <br><input type="nama" name="Nama"></br>
                </div>
                <div class="field">
                    <center><label>Email</label></center>
                    <br><input type="email" name="email"></br>
                </div>
                <div class="field">
                    <center<label>Password</label></br>
            </center>
            <div class="field">
                <br><input type="password" name="password"></br>
            </div>
            <div class="field">
                <center><label>Tanggal</label></center>
                <br><input type="tanggal" name="tanggal"></br>
            </div>
            <div class="field">
                <center><label>Level</label></center>
                <br><input type="tanggal" name="tanggal"></br>
            </div>
            <div class="field" style="text-align: center;margin-bottom:10px "></br>
                <p>Belum punya akun?<a href="register.php">Registrasi</a></p>
            </div>
            <div class="field">
                <button type="submit" name="submit">Submit</button>
                <div>
    </form>
</body>

</html>
