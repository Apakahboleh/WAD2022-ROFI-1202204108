<?php

require "../config/connector.php";

$mobil = cek_car("SELECT * FROM showroom_rofi_table");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/index.css">
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
                    <a class="nav-link" href="Add-Rofi.php">Add Car</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>


    <div class="container tambah-title">
        <div class="row">
            <div class="col offset-sm-1">
                <h1>My Show Room</h1>
                <p>List Show Room Rofi - 1202204108</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <?php foreach ( $mobil as $car ) : ?>
                <div class="col offset-sm-1">
                    <div class="card" style="width: 25rem;">
                        <img src="../images/<?= $car["foto_mobil"]; ?>" style="border-radius: 2%;" width="520px" alt="" class="card-img-top" alt="...">
                        <div class="item card-body">
                            <h5 class="card-title"><?= $car["merk_mobil"] ?></h5>
                            <p class="card-text">
                                <?php 
                                $text = $car["deskripsi"];
                                if ( strlen($text) > 5 ) {
                                    $text = substr($text, 0, 50) . '...';
                                    echo $text;
                                }                            
                                ?>

                            </p>
                            <a href="Detail-Rofi.php?id=<?= $car["id_mobil"]; ?>&&gambar=<?= $car["foto_mobil"] ?>">
                                <button style="width: 40%;" class="btn btn-primary">Detail</button>
                            </a>
                            <a href="../config/delete.php?id=<?= $car["id_mobil"]; ?>">
                                <button style="width: 40%;" class="btn btn-danger">Hapus</button>
                            </a>

                        </div>
                    </div>
                    <br>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>