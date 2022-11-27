<?php 
session_start();

require "../config/user_connector.php";

// $result = mysqli_query($conn, "SELECT * FROM users");

// $user = mysqli_fetch_assoc($result);

if ( isset($_COOKIE["login"]) ) {
    if ( $_COOKIE["login"] == hash("sha512", "true") ) {
        $_SESSION["login"] = true;
    }

} 

if ( isset($_SESSION["login"]) ) {
    header("Location: Home-Rofi.php");
    exit;
}

if ( isset($_POST["login"]) ) {

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' ");

    if ( mysqli_num_rows($result) === 1 ) {
        
        $user = mysqli_fetch_assoc($result);
        if ( password_verify($password, $user["password"]) ) {
            // tempat session dan cookie dimulai
            
            
            //buat cookienya
            if ( isset($_POST["remember"]) ) {
                setcookie("user", hash("sha512", "true"), time()+20);
                // setcookie("secure_1202204108", hash("sha512", $user["email"]), time() + 30);
                // setcookie("rofi_1202204108", hash("sha512", $user["password"]), time() + 30);
            }
            
            $_SESSION["nama"] = $nama;
            header("Location: Home-Rofi.php");
            exit;

        } else {
            echo "
                <script>
                    alert ('Password Salah');
                    document.location.href = 'Login-Rofi.php';
                </script>
            ";
        }
    }
}




?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        /* .title {
            margin-top: 2cm;
        } */
        h1 {
            margin-top: 2cm;
        }

        .daftar-btn {
            width: 30%;
        }

        .img img {
            height: 100%;
            width: 50%;
            left: -50px;
            position: absolute;
        }
    </style>
</head>

<body>
    <div class="img col">
        <img src="../images/4.jpg" alt="">
    </div>

    <div class="title container mb-4">
        <div class="row">
            <div class="col-sm-6 offset-sm-6">
                <h1 class="">Login</h1>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-6 offset-sm-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" name="remember" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember Me?</label>
                    </div>

                    <a href="">
                        <button type="submit" name="login" class="login-btn btn btn-outline-primary btn-lg mb-3">Masuk</button>
                    </a>
                    <!-- <p>Anda sudah punya akun?<button name="getLogin" class="btn btn-transparant">Login!</button></p> -->
                    <p>Anda belum punya akun? <a href="Register-Rofi.php">Daftar!</a> </p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>