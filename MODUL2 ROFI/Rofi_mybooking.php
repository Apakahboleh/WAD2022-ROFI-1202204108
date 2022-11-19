    <?php
    $link_mobil = [
        [
            "gambar" => "1.png"
        ]

    ];

    $nama = $_POST["nama"];
    $date = $_POST["date"];
    $start = $_POST["start"];
    // waktu yg dipanggil tidak ada karna kelebihan s
    $duration = $_POST["duration"];

    $tipe = $_POST["tipe"];
    $hp = $_POST["phone"];
    $service = $_POST["service"];
    $price = [200000, 150000, 150000];

    $harga = 0;

    foreach ($price as $p) {
        $totPrice = $p;
    }

    if (
        !isset($_POST["nama"]) ||
        !isset($_POST["date"])
    ) {

        // redirect
        echo "
            <script>
                alert ('Harap booking terlebih dahulu!');
                document.location.href = 'Rofi_blank.php';
            </script>
        ";
    }


    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman My Booking</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
            .col h4 {
                font-weight: 500;
                font-size: 26px;
            }

            footer {
                background-color: gray;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row mt-2">
                <div class="col">
                    <h3 class="text-center fs-3 mt-3 mb-3">Thank You <?= $nama; ?> for Reserving</h3>
                    <h4 class="text-center">Please double check your reservation details</h4>
                </div>
            </div>
        </div>

        <nav>
            <div class="container">
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
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>

        <section class="mt-5">
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Booking Number</th>
                            <th>Name</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Car Type</th>
                            <th>Phone Number</th>
                            <th>Service(s)</th>
                            <th>Total Price</th>
                        </tr>

                        <tr>
                            <td><?= rand(); ?></td>
                            <td><?= $nama; ?></td>
                            <td><?= $date, " ", $start; ?></td>
                            <td><?= date("Y-m-d",time() + (60*60*24*$duration))," ", $start; ?></td>
                            <!-- perkalian dalam jam menjadi 2 kali berakibat waktu yg dikalikan dalam sehari 2 -->
                            <td><?= $tipe; ?></td>
                            <td><?= $hp; ?></td>
                            <td>
                                <?php
                                if (isset($service) != "") {
                                    foreach ($service as $serve) {
                                        echo "<li type='none'> $serve </li>";
                                        if ($serve == "Health Protocol") {
                                            $harga += 25000;
                                        } else if ($serve == "Driver") {
                                            $harga += 100000;
                                        } else if ( $serve == "Fuel Filled" ) {
                                            $harga += 250000;
                                        } else if ( $serve == "") {
                                            echo "no service";
                                        }
                                    }
                                }
                                ?>
                            </td>
                            <td><?php global $harga;
                                echo $totPrice + $harga; ?>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </section>

        <footer class="footer mt-3 bg-secondary bg-opacity-10" style="background-color: gray;">
            <div class="container">
                <div class="row">
                    <div class="col fixed-bottom">
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