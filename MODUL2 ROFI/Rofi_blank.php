<?php
$link_mobil = [
    [
        "gambar" => "1.png"
    ]
    
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        h1 {
            color: red;
            font-style: italic;
        }

        a {
            text-decoration: none;
            text-transform: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="warn mt-5 text-center">
                    <h1>Harap isi Sesuai Ketentuan Booking</h1>
                    <br>
                    <?php foreach ( $link_mobil as $img ) : ?>
                        <a href="Rofi_booking.php?gambar=<?= $img["gambar"]; ?>">Kembali ke form</a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>