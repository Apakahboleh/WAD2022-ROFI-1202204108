<?php
session_start();
include "../config/insert.php";

if (isset($_SESSION["nama"]) == '') {
    header("Location: Before-Rofi.php");
    exit;
}

if (isset($_POST["selesai"])) {

    if (insert($_POST) > 0) {
        echo "
            <script>
                alert ('Data Berhasil ditambahkan');
                document.location.href = 'ListCar-Rofi.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert ('Data gagal ditambahkan');
                document.location.href = 'ListCar-Rofi.php';
            </script>
        ";

        echo mysqli_error($conn);
    }
}

require "../config/user_connector.php";
$user = cek_user("SELECT * FROM users");



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/index.css">
    <style>
        button {
            width: 15%;
        }

        /* .dropbrn {
            width: 10%;
        } */
    </style>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="wadah container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="for-link navbar-nav">
                    <a class="linkhome nav-link" href="Home-Rofi.php">Home</a>
                    <a class="navbar-brand" href="#">MyCar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION["nama"]; ?>
                </button>
                <ul class="dropdown-menu">
                    <?php foreach ($user as $u) : ?>
                        <li><a class="dropdown-item" href="Profile-Rofi.php?id=<?= $u["id"];  ?>"><?= $u["nama"] ?></a></li>
                    <?php endforeach; ?>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
                </ul>
            </div>

        </div>
    </nav>


    <div class="container tambah-title">
        <div class="row">
            <div class="col offset-sm-1">
                <h1>Tambah Mobil</h1>
                <p>Tambah Mobil Baru Anda Ke List Show Room</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-8 offset-sm-1">
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama_mobil" class="form-label">Nama Mobil</label>
                        <input type="text" name="nama_mobil" class="form-control" id="nama_mobil">
                    </div>

                    <div class="mb-3">
                        <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                        <input type="text" name="nama_pemilik" class="form-control" id="nama_pemilik">
                    </div>

                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk Mobil</label>
                        <input type="text" name="merk_mobil" class="form-control" id="merk">
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_beli" class="form-label">Tanggal Beli</label>
                        <input type="date" name="tanggal_beli" class="form-control" id="tanggal_beli">
                    </div>

                    <div class="form-floating mb-3">
                        <!-- <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" id="floatingTextarea2" style="height: 100px"></textarea> -->
                        <label for="floatingTextarea2">Deskripsi</label>
                        <input type="textarea" class="form-control" name="deskripsi" id="floatingTextarea2" style="height: 100px">
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Foto</label>
                        <input type="file" name="foto_mobil" class="form-control" id="gambar">
                    </div>

                    <label for="status" class="mt-3 form-label">Status Pembayaran</label>
                    <div class="mt-auto">
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="lunas" value="Lunas">
                            <label class="form-check-label" for="lunas">Lunas</label>
                        </div>

                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="belum" value="Belum Lunas">
                            <label class="form-check-label" for="belum">Belum Lunas</label>
                        </div>
                    </div>

                    <button type="submit" name="selesai" class="btn btn-primary mt-5 mb-5 btn-lg">Selesai</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>