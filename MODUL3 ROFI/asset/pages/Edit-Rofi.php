<?php 

include "../config/edit.php";

// require "../config/connector.php";


$id_mobil = $_GET["id"];

$car = cek_car("SELECT * FROM showroom_rofi_table WHERE id_mobil = $id_mobil ")[0];

if ( isset($_POST["simpan"]) ) {
    
    if ( edit($_POST) > 0 ) {
        echo "
            <script>
                alert ('Pengeditan Berhasil Dilakukan');
                document.location.href = 'ListCar-Rofi.php';
            </script>
        ";

    } else {
        echo "
            <script>
                alert ('Pengeditan Gagal Dilakukan');
                document.location.href = 'ListCar-Rofi.php';
            </script>
        ";

        // echo mysqli_error($conn);
    }

}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/index.css">
    <style>
        button {
            width: 15%;
        }

        .tambah-title img {
            width: 450px;
            position: absolute;
            border-radius: 2%;
        }
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
                    <a class="nav-link" href="Detail-Rofi.php?id=<?= $car["id_mobil"]; ?>">Detail Car</a>
                </div>
            </div>
        </div>
    </nav>


    <div class="container tambah-title">
        <div class="row">
            <div class="col">
                <h1><?= $car["merk_mobil"] ?></h1>
                <p>Edit Mobil <?= $car["merk_mobil"] ?></p>
                <img class="mt-4" src="../images/<?= $car["foto_mobil"] ?>" alt="mobil">
            </div>
        </div>
    </div>

    <div class="container foto">
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-5 offset-sm-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="foto_lama" value="<?= $car["foto_mobil"] ?>">
                    <input type="hidden" id="id_mobil" name="id_mobil" value="<?= $car["id_mobil"] ?>">
                    <div class="mb-3">
                        <label for="nama_mobil" class="form-label">Nama Mobil</label>
                        <input type="text" name="nama_mobil" class="form-control" id="nama_mobil" value="<?= $car["nama_mobil"] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="pemilik_mobil" class="form-label">Nama Pemilik</label>
                        <input type="text" name="pemilik_mobil" class="form-control" id="pemilik_mobil" value="<?= $car["pemilik_mobil"] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk Mobil</label>
                        <input type="text" name="merk_mobil" class="form-control" id="merk" value="<?= $car["merk_mobil"] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_beli" class="form-label">Tanggal Beli</label>
                        <input type="date" name="tanggal_beli" class="form-control" id="tanggal_beli" value="<?= $car["tanggal_beli"] ?>">
                    </div>

                    <div class="form-floating mb-3">
                        <!-- <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" id="floatingTextarea2" style="height: 100px"></textarea> -->
                        <label for="floatingTextarea2">Deskripsi</label>
                        <input type="textarea" name="deskripsi" class="form-control" id="floatingTextarea2" style="height: 100px" value="<?= $car["deskripsi"] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="foto_mobil" class="form-label">Foto</label>
                        <input type="file" name="foto_mobil" class="form-control" id="foto_mobil" value="<?= $car["foto_mobil"] ?>">
                    </div>

                    <label for="status" class="mt-3 form-label">Status Pembayaran</label>
                    <div class="mt-auto">
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="status_pembayaran" id="lunas" value="Lunas" <?php if ($car["status_pembayaran"] == "Lunas") echo "checked" ?>>
                            <label class="form-check-label" for="lunas">Lunas</label>
                        </div>

                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="status_pembayaran" id="belum" value="Belum Lunas" <?php if ($car["status_pembayaran"] == "Belum Lunas") echo "checked" ?>>
                            <label class="form-check-label" for="belum">Belum Lunas</label>
                        </div>
                    </div>

                    <button type="submit" style="width: 100%;" name="simpan" class="btn btn-primary mt-5 mb-5 btn-lg">Simpan</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>