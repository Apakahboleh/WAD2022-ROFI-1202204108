<?php 
$conn = mysqli_connect("localhost", "root", "1202204108", "wad_modul4_rofi");

function cek_user($query_user) {
    global $conn;

    $result = mysqli_query($conn, $query_user);
    $cont = [];

    while ( $user = mysqli_fetch_assoc($result) ) {
        $cont[] = $user;
    }

    return $cont;
}


?>