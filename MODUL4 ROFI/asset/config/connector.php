<?php

$conn = mysqli_connect("localhost", "root", "1202204108", "modul3");

function cek_car($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $wadah = [];

    while ( $car = mysqli_fetch_assoc($result) ) {
        $wadah[] = $car;
    }

    return $wadah;
}


?>