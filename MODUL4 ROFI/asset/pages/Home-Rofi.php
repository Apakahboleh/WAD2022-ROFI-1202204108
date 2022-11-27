<?php
session_start();

if (isset($_SESSION["nama"]) == '') {
    header("Location: Before-Rofi.php");
    exit;
}

require "../config/connector.php";

if (isset($_POST["mycar"])) {

    if (cek_car($_POST) > 0) {
        header("Location: ListCar-Rofi.php");
        exit;
    } else {
        header("Location: Add-Rofi.php");
        exit;
    }
}

require "../config/user_connector.php";
$user = cek_user("SELECT * FROM users");


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        h1 {
            font-family: poppins;
            font-weight: bold;
            font-size: 50px;
        }

        .foot .copyright p {
            margin-top: 30cm;
        }

        .foot img {
            width: 100px;
            right: 30px;
        }

        button {
            margin-top: -15%;
        }

        footer {
            margin-top: -5%;
            padding-left: 250px;
        }

    </style>

    <link rel="stylesheet" href="../style/index.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="wadah container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="row">
                    <div class="for-link navbar-nav">
                        <a class="navbar-brand" href="#">Home</a>
                        <a class="linkcar nav-link" href="ListCar-Rofi.php">MyCar</a>
                    </div>
                </div>

                <div class="row ms-auto">
                    <div class="mt-1 mx-5 navbar-nav for-link">
                        <a href="Add-Rofi.php">
                            <button class="navbut btn btn-light">Add Car</button>
                        </a>
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
        </div>
    </nav>

    <div class="container title">
        <div class="row">
            <div class="col">
                <h1>Selamat Datang Di</h1>
                <h1>Show Room [<?= $_SESSION["nama"]; ?>] </h1>
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, saepe? Lorem ipsum dolor sit amet consectetur adipisicing elit . Sint veritatis expedita<br> </small>
            </div>

            <div class="col">
                <img src="https://cdn.motor1.com/images/mgl/LeLmG/s1/mercedes-benz-concept-eqg-side-view.webp" style="border-radius: 3%;" width="520px" alt="">
            </div>

            <form action="" method="post">
                <button class="btn btn-primary" name="mycar">MyCar</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <img src="../images/logo-ead.png" width="100px" alt="">
            </div>
        </div>
    </div>

    <footer>
        <div class="container mt-5">
            <div class="foot row">
                <div class=" col-sm-12">
                    <small class="copyright">ROFI_1202204108</small>
                </div>
            </div>
        </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>