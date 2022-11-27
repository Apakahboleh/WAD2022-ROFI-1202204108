<?php 

require "../config/register.php";

if ( isset($_POST["daftar"]) ) {

    if ( register($_POST) > 0 ) {
        echo "
            <script>
                alert ('Akunmu berhasil didaftarkan');
                document.location.href = 'Before-Rofi.php';
            </script>
        ";

    } else {
        echo "
            <script>
                alert ('Akunmu Gagal didaftarkan');
                document.location.href = 'Before-Rofi.php';
            </script>
        ";
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
            margin-top: 4cm;
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
                <h1 class="mt-3">Register</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
                        <div id="email" class="form-text">Dikatain dede dari bootsrap hiks</div>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>

                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomor Handphone</label>
                        <input type="telp" name="no_hp" class="form-control" id="no_hp">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3">
                        <label for="password2" class="form-label">Konfirmasi Kata Sandi</label>
                        <input type="password" name="password2" class="form-control" id="password2">
                    </div>

                    <button type="submit" name="daftar" class="daftar-btn btn btn-outline-primary btn-lg mb-3">Daftar</button>
                    <!-- <p>Anda sudah punya akun?<button name="getLogin" class="btn btn-transparant">Login!</button></p> -->
                    <p>Anda sudah punya akun? <a href="Login-Rofi.php">Login!</a> </p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>