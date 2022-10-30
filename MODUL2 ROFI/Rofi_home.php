<?php

$link_mobil = [
    [
        "gambar" => "1.png"
    ]
    
];

$mobil = [
    [
        "nama" => "Toyota Rush",
        "harga" => "Rp.200000 / Day",
        "kursi" => "7 Kursi",
        "cc" => "1500 cc",
        "mesin" => "Manual",
        "gambar" => "1.png"
    ],

    [
        "nama" => "Toyota Alya",
        "harga" => "Rp.150000 / Day",
        "kursi" => "5 Kursi",
        "cc" => "1200 cc",
        "mesin" => "Manual",
        "gambar" => "2.png"
    ],

    [
        "nama" => "Honda Brio",
        "harga" => "Rp.150000 / Day",
        "kursi" => "5 Kursi",
        "cc" => "1200 cc",
        "mesin" => "Automatic",
        "gambar" => "honda.png"
    ]
]


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        footer {
            background-color: gray;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="title text-center mt-5">
                <h1 class="h1">
                    WELCOME TO EAD RENT
                </h1>
                <p class="mt-3">Find your best deal, here!</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top justify-content-center">
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="Rofi_home.php">Home</a>
                        </li>

                        <?php foreach ($link_mobil as $booking) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="Rofi_booking.php?gambar=<?= $booking["gambar"]; ?>">Booking</a>
                            </li>
                        <?php endforeach; ?>

                        <li class="nav-item">
                            <a class="nav-link" href="Rofi_mybooking.php">My Booking</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <section>
        <div class="container mt-3 offset-sm-1">
            <div class="row">
                <?php foreach ($mobil as $car) : ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="gambar/<?= $car["gambar"]; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $car["nama"]; ?></h5>
                                <p class="my-1"><?= $car["harga"]; ?></p>
                            </div>
                            <ul class="list-group list-group-flush text-center my-1">
                                <li class="list-group-item"><?= $car["kursi"]; ?></li>
                                <li class="list-group-item"><?= $car["cc"]; ?></li>
                                <li class="list-group-item"><?= $car["mesin"]; ?></li>
                            </ul>
                            <div class="card-footer text-center">
                                <form action="Rofi_booking.php?gambar=<?= $car["gambar"]; ?>" method="post">
                                    <button name="<?= $car["nama"]; ?>" class="btn btn-outline-dark">Book Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <br>

    <footer class="bg-secondary bg-opacity-10">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="col-sm-12 text-center">
                        <p class="mt-3">
                            Created by ROFI_1202204108
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>